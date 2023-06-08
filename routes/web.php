<?php

use App\Http\Middleware\CekLevel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EWalletController;
use App\Http\Controllers\TukarSampahController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.indexcoba');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/TukarSampah', function () {
    return view('TukarSampah');
});

Route::get('/TukarSampah/Pengiriman', function () {
    return view('TukarSampahPengiriman');
});

Route::get('/datauser', function () {
    return view('admin.datauser');
});

// Login Register
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth','ceklevel:1']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/datauser', [TukarSampahController::class, 'index']);
    Route::get('/TukarSampah', [TukarSampahController::class, 'create']);
    Route::post('/TSstore', [TukarSampahController::class, 'store']);
    Route::get('/delivered/{id}', [TukarSampahController::class, 'delivered']);
    Route::get('/delete/{id}', [TukarSampahController::class, 'delete']);
});

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/TukarSampah', [TukarSampahController::class, 'create']);
    Route::post('/TSstore', [TukarSampahController::class, 'store']);
    Route::get('/topbar', [EWalletController::class, 'index']);
    Route::post('/topbarstore', [EWalletController::class, 'store']);
    //Route::get('/saldo/{id}', [TukarSampahController::class, 'create']);
    // Route::post('/TSstore', [NotifController::class, 'index']);
});




//Route::get('/TukarSampah', [TukarSampahController::class, 'index']);
//Route::post('/TukarSampah', [TukarSampahController::class, 'simpan']);
    // Route::get('/datauser');
// Route::post('/TSstore', [HitungController::class, 'hitung']);
