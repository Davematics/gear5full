<?php

namespace App\Http\Controllers;

use App\Order;
use App\DeiveryAddress;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('IsVendor')->except(['store','myorder']);
    }
    public function index(Request $request)
    {
        if (!$request->i) {
            $orders=Order::where('owner_id', auth()->user()->id)->get();
        }else if($request->i=="pending"){
            $orders=Order::where('owner_id', auth()->user()->id)->where('status','0')->get();
        }else if($request->i=='delivered'){
            $orders=Order::where('owner_id', auth()->user()->id)->where('status','1')->get();
        }else if($request->i=="retured"){
            $orders=Order::where('owner_id', auth()->user()->id)->where('status','2')->get();
        }else if($request->i=='cancelled'){
            $orders=Order::where('owner_id', auth()->user()->id)->where('status','3')->get(); 
        }else{
           return redirect('/home');
        }
        return view('order.myorder',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->diffaddress){
            $daddress=$request->firstName.' '.$daddress=$request->lastName.
            '<br>'.
            'phone:'. $request->phone.'<br>'.
            'email:'.$request->emailAddress.'<br>'.
            'Address '.$request->streetAddress.'<br>'.
            $request->apt.'<br>'.
            $request->cityAddress.'<br>'.
            'Zip code: '.$request->postcode.'<br>'. 
            'LGA: '.$request->lga. '<br>'.
            'State: '.$request->state;
        }else{
           
            $daddress=auth()->user()->name.
            '<br>'.
            'phone:'. auth()->user()->phone.'<br>'.
            'email:'.auth()->user()->email.'<br>'.
            'Address '. auth()->user()->street.'<br>'.
            auth()->user()->apt.'<br>'.
            auth()->user()->city.'<br>'.
            'Zip code: '. auth()->user()->zip_code.'<br>'. 
            'LGA: '. auth()->user()->lga. '<br>'.
            'State: '. auth()->user()->state;
        }
       // dd($daddress);
        $carts = session()->get('cart');
        if(!$carts){
            return redirect()->back()->with('success', 'No product found in cart!');
        }else{
            $orderid=rand();
            foreach ($carts as $cart) {
                $order=new Order();
                $order->order_id=$orderid;
                $order->buyer_id=auth()->user()->id;
                $order->owner_id=$cart['owner_id'];
                $order->goods=$cart['goods'];
                $order->quantity=$cart['quantity'];
                $order->amount=$cart['amount'];
                $order->photo=$cart['photo'];
                $order->status=0;
                $order->delivery_charges=300; //$cart['delivery_charges'];
            $order->delivery_days=2;  //$cart['delivery_days'];
            //dd($cart['goods']);
            $order->save();
           
            }
           
            $deliveryAddress= new DeiveryAddress();
            $deliveryAddress->order_id=$orderid;
            $deliveryAddress->address=$daddress;
            $deliveryAddress->save();
            session()->forget('cart');
        
            return redirect()->back()->with('success', 'Order placed successfully!');
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        //dd('o');
        $id=base64_decode($order);
        $order=Order::findorfail($id);
//dd($order);
    return view('order.single-order',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$order)
    {
        $order=Order::where('id',$order)->firstorfail();
        $order->status=$request->status;
        $order->save();
        return redirect()->back()->with('success','order status updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function myorder()
    {
        $orders=Order::where('buyer_id', auth()->user()->id)->latest()->get();
        return view('user.order',compact('orders'));
    }
}
