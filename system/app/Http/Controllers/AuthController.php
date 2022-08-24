<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class AuthController extends Controller{

    function showLogin(){
        return view('login');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('dashboard')->with('success', 'Login Berhasil');
        } else{
            return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda!');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

    function showRegister(){
        return view('register');
    }

    

}