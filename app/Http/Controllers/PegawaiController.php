<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function absensi(){
        return view('absensi');
    }

    public function adduser(){
        return view('add-user');
    }

    public function saveuser(Request $request){
        /* dd($request->all()); */

        User::create([
            'no_pegawai' => $request->no_pegawai,
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt('admin'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'remember_token' => Str::random(60),
        ]);
        return redirect('add-user')->with('toast_success', 'User Added Successfully!');
    }
}
