@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Presensi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Halaman Presensi Keluar</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Halaman Presensi Keluar
        </div>
        <div class="card-body">
            <form action="{{ route('ubah-presensi') }}" method="POST">
                @csrf
                <center>
                    <label id="clock" style="font-size: 100px; color: #8a1212; -webkit-text-stroke: 3px #fe3636;
                                                    text-shadow: 4px 4px 10px #fe3636,
                                                    4px 4px 20px #fe3636,
                                                    4px 4px 30px#fe3636,
                                                    4px 4px 40px #fe3636;">
                    </label>
                </center>

                <center>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Klik Untuk Presensi Keluar</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
@endsection
