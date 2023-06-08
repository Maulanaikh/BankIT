<?php

namespace App\Http\Controllers;
use App\Models\eWallet;
use App\Models\Notif;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
   
        $saldo = eWallet::all();
        $notif = Notif::where('namaPengguna', auth()->user()->name)->get();
        return view('dashboard.index', [
            'saldo' => $saldo,
            'notif' => $notif
        ]);
    
        
    }
}
