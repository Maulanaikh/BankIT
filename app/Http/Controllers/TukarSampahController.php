<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\TukarSampah;
use App\Models\eWallet;
use App\Models\Notif;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use PhpParser\Node\Stmt\Nop;

class TukarSampahController extends Controller
{
    protected $tsampah;

    // public function __construct(){
    //     $this->tsampah = new TukarSampah();
    // }
    public function index()
    {   
        $ts = TukarSampah::all();
        $saldo = eWallet::all();
        $notif = Notif::where('namaPengguna', auth()->user()->name)->get();

        return view('admin.datauser',compact('ts'),[
            'saldo' => $saldo,
            'notif' => $notif
        ]);
 
    }

    public function create()
    {
        $saldo = eWallet::all();
        $notif = Notif::where('namaPengguna', auth()->user()->name)->get();

        //$saldo = eWallet::where('id',$id)->first();
        
        return view('TukarSampah',[
            'saldo' => $saldo,
            'notif' => $notif
        ]);

        
       
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        //$total = TukarSampah::selectRaw('SUM((berat_plastik * 500 ) + (berat_besi * 1000 ) + (berat_kaleng * 500 )) as total')->first();
        //TukarSampah::create($request->except(['_token','submit']));
        
        $penjumlahan = new TukarSampah();
        $penjumlahan->nama = auth()->user()->name;
        $penjumlahan->berat_plastik = $request->berat_plastik;
        $penjumlahan->berat_besi = $request->berat_besi;
        $penjumlahan->berat_kaleng = $request->berat_kaleng;
        $penjumlahan->alamat_penjemputan = $request->alamat_penjemputan;
        $penjumlahan->total = ($request->berat_plastik * 500) + ($request->berat_besi * 1000)
         + ($request->berat_kaleng * 500);
        $penjumlahan->save();

    
        return redirect('/TukarSampah');
    }
    
    public function delivered($id)
    {
        $tukar = TukarSampah::find($id);
        if($tukar->status == "Unverified") {
            $tukar->status="Verified";
            $tukar->save();
            $wallet = eWallet::where('namaPengguna', $tukar->nama)->first();
            $wallet['saldo'] = $wallet['saldo'] + ($tukar->berat_plastik * 500) + ($tukar->berat_besi * 1000) + ($tukar->berat_kaleng * 500);
            $wallet->save();
            $pesan = new Notif();
            $pesan->namaPengguna = $tukar->nama;
            $pesan->isi = "Saldo anda bertambah RP.$tukar->total";
            $pesan->save();
            session()->flash('Konfirm', 'Verifikasi Berhasil');
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $tukar = TukarSampah::find($id);
        if($tukar->status == "Unverified") {
            $tukar->delete();
            session()->flash('Success', 'Data berhasil dihapus');
            return redirect()->back();
        }
        else {
            session()->flash('Success', 'Data tidak bisa dihapus karena sudah terverifikasi');
            return redirect()->back();
        }
    }

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    // public function update(Request $request, $id)
    // {

    //     //find data
    //     $data = TukarSampah::find($id);
        
    //     //update data
    //     $data->total = $request->total;
        
    //     $data->save();
        
    //     //redirect with success message
    //     return redirect()->route('route_name')->with('success', 'Data berhasil diupdate');
    // }
    


    // public function hitung(Request $request)
    // {
    //     $data = $request->all();
    //     dd($data);
    //     $a = 500;
    //     $b = 1000;
    //     $hasil = ($data['berat_plastik'] * $a) + ($data['berat_besi'] * $b) + ($data['berat_kaleng'] * $a);
        
    //     // return view('partials.topbar',[
    //     //     'Total' => $hasil,
    //     // ]);
    // }
}
//     public function simpan(Request $request)
//         {
        
//             $validateData = $request->validate([
    
//                 'sampah'  => 'required',
//                 'berat_plastik' => 'integer',
//                 'berat_besi' => 'integer',
//                 'berat_kaleng' => 'integer',
//                 'total' => 'integer',
     
//             ]);
//             TukarSampah::create($validateData);
//             try{
//                 $sampah  = $request->sampah;
//                 $berat = $request->berat;
    
//                 $User = new User();
//                 $User->sampah = $sampah;
//                 $berat->berat = $berat;
    
//                 $User->save();
    
//                 // Toastr::success('Data added successfully :)','Success');
//                 return redirect()->back();
    
//             }catch(\Exception $e){
    
//                 // Toastr::error('Data added fail :)','Error');
//                 return redirect()->back();
//             }
            
        
//         }

//     public function insertCheckbox(Request $request)
//     {
//         dd($request->all());
//     }
// }
