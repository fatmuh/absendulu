<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;

use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presensi.masuk');
    }

    public function keluar()
    {
        return view('presensi.keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if ($presensi){
            return back()->with('toast_error', 'Present Entry Has Been Added!');
        }else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }

        return redirect('presensi-masuk')->with('toast_success', 'Present Entry Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function halamanrekap()
    {
        return view('presensi.rekap-absensi');
    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
        return view('presensi.laporan-karyawan',compact('presensi'));
    }

    public function presensipulang(){
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();

        $dt=[
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == ""){
            $presensi->update($dt);
            return redirect('presensi-keluar')->with('toast_success', 'Present Exit Successfully!');
        }else{
            return back()->with('toast_error', 'Present Exit Has Been Added!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
