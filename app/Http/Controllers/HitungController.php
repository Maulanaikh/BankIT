<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HitungController extends Controller
{
    public function hitung(Request $request)
    {
        $a = 500;
        $b = 1000;
        $berat_plastik = $request->input('berat_palstik');
        $berat_besi = $request->input('berat_besi');
        $Berat_kaleng = $request->input('Berat_kaleng');

        $hasil = ($berat_plastik * $a) + ($berat_besi * $b) + ($Berat_kaleng * $a) ;

        return view('dashboard.index',[
            'total' => $hasil
        ]);
    }
}
