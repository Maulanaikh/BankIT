<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\eWallet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.indexcoba', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        $wallet = new eWallet();
        $wallet->namaPengguna = $request->name;
        $wallet->save();


        $request->session()->flash('Success', 'Registration successfull! Please login');

        return redirect('/login');
    }
}

