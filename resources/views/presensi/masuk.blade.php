@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Presensi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Halaman Presensi Masuk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Halaman Presensi Masuk
        </div>
        <div class="card-body">
            <form action="{{ route('simpan-masuk') }}" method="POST">
                @csrf
                <center>
                    <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                    text-shadow: 4px 4px 10px #36D6FE,
                                                    4px 4px 20px #36D6FE,
                                                    4px 4px 30px#36D6FE,
                                                    4px 4px 40px #36D6FE;">
                    </label>
                </center>

                <center>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Klik Untuk Presensi Masuk</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
@endsection
