<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function data_user()
    {
        $data = User::all();
        return view('data-user')->with([
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect('data-user')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function account()
    {
        return view('account');
    }

    public function update_profile(Request $request){
        $data = $request->validate([
            'name' => ['string', 'min:3', 'max:30', 'required'],
            'email' => ['email', 'string', 'min:3', 'max:50', 'required'],
            'jenis_kelamin' => ['string', 'max:10'],
            'no_hp' => ['string', 'max:15'],
            'tempat_lahir' => ['string', 'max:30'],
            'tanggal_lahir' => ['date'],
        ]);

            if($request->file('foto_profile')) {
                if($request->oldFoto){
                    Storage::delete($request->oldFoto);
                }
                $data['foto_profile'] = $request->file('foto_profile')->store('foto');
            }

        auth()->user()->update($data);
        return redirect('account')->with('toast_success', 'User Updated Successfully!');
    }

    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('show')->with([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('data-user')->with('toast_success', 'User Updated Successfully!');
    }
}
