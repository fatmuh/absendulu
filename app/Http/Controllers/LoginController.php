<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login-absensi');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('no_pegawai','password'))){
            return redirect('/absensi');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
