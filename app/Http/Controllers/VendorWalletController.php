<?php

namespace App\Http\Controllers;

use App\VendorWallet;
use Illuminate\Http\Request;

class VendorWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions=VendorWallet::where('user_id',auth()->user()->id)->get();
        return view('wallet.my-wallet', compact('transactions'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VendorWallet  $vendorWallet
     * @return \Illuminate\Http\Response
     */
    public function show($vendorWallet)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VendorWallet  $vendorWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(VendorWallet $vendorWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VendorWallet  $vendorWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VendorWallet $vendorWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VendorWallet  $vendorWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendorWallet $vendorWallet)
    {
        //
    }
}
