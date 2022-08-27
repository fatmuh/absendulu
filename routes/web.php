<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensiController;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth','ceklevel:Admin,Karyawan'])->group(function () {
    Route::get('/absensi', [PegawaiController::class, 'absensi'])->name('absensi');
    Route::get('/add-user', [PegawaiController::class, 'adduser'])->name('adduser');
    Route::post('/save-user', [PegawaiController::class, 'saveuser'])->name('saveuser');
    Route::get('/data-user', [PegawaiController::class, 'data_user'])->name('data-user');
    Route::get('/delete/{id}', [PegawaiController::class,'delete'])->name('delete');

    Route::get('/show/{id}', [PegawaiController::class,'show'])->name('show');
    Route::post('/update/{id}', [PegawaiController::class,'update'])->name('update');

    Route::get('/rekap-absensi',[PresensiController::class,'halamanrekap'])->name('rekap-absensi');
    Route::get('/rekap-absensi/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('rekap-absensi-keseluruhan');

    Route::get('/account', [PegawaiController::class, 'account'])->name('account');
    Route::put('/update-profile', [PegawaiController::class, 'update_profile'])->name('update-profile');
});

Route::middleware(['auth','ceklevel:Karyawan'])->group(function () {
    Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
    Route::get('/presensi-masuk', [PresensiController::class, 'index'])->name('presensimasuk');
    Route::get('/presensi-keluar', [PresensiController::class, 'keluar'])->name('presensikeluar');
    Route::post('/ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
});
