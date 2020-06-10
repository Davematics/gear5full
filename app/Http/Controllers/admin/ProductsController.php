<?php

namespace App\Http\Controllers\admin;
use App\Ads;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if($request->i){
           if($request->i=="approved"){
            $adss=Ads::where('status','1')->latest()->get();
            return view('admin.products',compact('adss'));
           }else if($request->i=="notapproved"){
            $adss=Ads::where('status','0')->latest()->get();
            return view('admin.products',compact('adss'));
           }else if($request->i=="deactivated"){
            $adss=Ads::where('status','2')->latest()->get();
            return view('admin.products',compact('adss'));
           }
        }else{
            $adss=Ads::latest()->get();
            return view('admin.products',compact('adss'));
        }
       
    }

    public function Orders(Request $request)
    {
        if (!$request->i) {
            $orders=Order::latest()->get();
        }else if($request->i=="pending"){
            $orders=Order::where('status','0')->latest()->get();
        }else if($request->i=='delivered'){
            $orders=Order::where('status','1')->latest()->get();
        }else if($request->i=="retured"){
            $orders=Order::where('status','2')->latest()->get();
        }else if($request->i=='cancelled'){
            $orders=Order::where('status','3')->latest()->get(); 
        }else{
           return redirect('/home');
        }
        return view('admin.orders',compact('orders'));
    }

}
