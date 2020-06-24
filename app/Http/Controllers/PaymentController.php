<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DeliveryAddress;
use App\Http\Requests;
use App\VendorWallet;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails['data']);
       
        // if($request->diffaddress){
        //     $daddress=$request->firstName.' '.$daddress=$request->lastName.
        //     '<br>'.
        //     'phone:'. $request->phone.'<br>'.
        //     'email:'.$request->emailAddress.'<br>'.
        //     'Address '.$request->streetAddress.'<br>'.
        //     $request->apt.'<br>'.
        //     $request->cityAddress.'<br>'.
        //     'Zip code: '.$request->postcode.'<br>'. 
        //     'LGA: '.$request->lga. '<br>'.
        //     'State: '.$request->state;
        // }else{
           
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
                $order->delivery_charges=$paymentDetails['data']['amount']-$cart['amount']; //$cart['delivery_charges'];
            $order->delivery_days=3;  //$cart['delivery_days'];
            //dd($cart['goods']);
            $order->save();

            $credit= new VendorWallet();
            $credit->user_id=$cart['owner_id'];
            $credit->type='credit';
            $credit->amount=$cart['amount'];
            $credit->description='payment for goods ( '.$cart['goods'].' )';
            $credit->status='0';
            $credit->save();
            }
           
            $deliveryAddress= new DeliveryAddress();
            $deliveryAddress->order_id=$orderid;
            $deliveryAddress->address=$daddress;
            $deliveryAddress->save();
            session()->forget('cart');
        
            return redirect('/home')->with('success', 'Order placed successfully!');
        }
    }
}