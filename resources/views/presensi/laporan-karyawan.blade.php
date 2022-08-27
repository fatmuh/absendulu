@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Halaman Laporan Absensi Karyawan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Halaman Laporan Absensi Karyawan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Halaman Laporan Absensi Karyawan
        </div>

        <div class="card-body">
        <div class="form-group mb-3">
            <label class="form-label">Tanggal Awal</label>
            <input type="date" name="tglawal" id="tglawal" class="form-control" />
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Tanggal Akhir</label>
            <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
        </div>
        <div class="form-group mb-3">
            <a href="" onclick="this.href='/rekap-absensi/'+ document.getElementById('tglawal').value +
        '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                Lihat <i class="fas fa-print"></i>
            </a>
        </div>
        <div class="form-group">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Pegawai</th>
                    <th>Tanggal</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Jumlah Jam Kerja</th>
                </tr>
                </thead>
                @foreach ($presensi as $item)
                <tr>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->tgl }}</td>
                    <td>{{ $item->jammasuk }}</td>
                    <td>{{ $item->jamkeluar }}</td>
                    <td>{{ $item->jamkerja }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
