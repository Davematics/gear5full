<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Ads;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ads=Ads::where('user_id',auth()->user()->id)->get();
        $orders=Order::where('owner_id',auth()->user()->id)->get();
        $pendingOrders=Order::where('owner_id',auth()->user()->id)->
        where('status','0')->get();
        $deliveredOrders=Order::where('owner_id',auth()->user()->id)->
        where('status','1')->get();
        return view('home' , compact('ads','orders','pendingOrders','deliveredOrders'));
    }
}
