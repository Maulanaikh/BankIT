<?php

namespace App\Http\Controllers;

use App\Models\eWallet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class eWalletController extends Controller
{
    // public function index()
    // {
    //     $sd = eWallet::all();
    //     return view('layouts.main',compact('sd'));
    // }

    // public function store(Request $request)
    // {
    //     $walet = new eWallet();
    //     $walet->saldo = $request->saldo;
    //     $walet->save();
    // }
    
    
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
   
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function show(eWallet $eWallet)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(eWallet $eWallet)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eWallet $eWallet)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(eWallet $eWallet)
    {
        //
    }
}

