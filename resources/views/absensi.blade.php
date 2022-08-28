@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    @if (auth()->user()->level == "Karyawan")
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Absen Masuk</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="presensi-masuk">Masuk</a>
                    <div class="small text-white"><i class="fa-solid fa-right-to-bracket"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Absen Pulang</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="presensi-keluar">Pulang</a>
                    <div class="small text-white"><i class="fa-solid fa-right-from-bracket"></i></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Jadwal Dinas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Dinas</a>
                    <div class="small text-white"><i class="fas fa-calendar"></i></div>
                </div>
            </div>
        </div> --}}
    </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user me-1"></i>
            Data <b>{{ old('name', Auth::user()->name) }}</b>
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="text-center">
                    @if (old('foto_profile', Auth::user()->foto_profile))
                        <img src="{{ asset('storage/'. old('foto_profile', Auth::user()->foto_profile)) }}" width="150px" class="rounded m-3">
                    @else
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                        width="200px" class="rounded m-3">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor Pegawai</label>
                    <input type="text" class="form-control" name="no_pegawai"
                        value="{{ old('no_pegawai', Auth::user()->no_pegawai) }}" readonly>
                    <div class="form-text">Sesuai dengan yang ada di Kartu RFID.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                        value="{{ old('email', Auth::user()->email) }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin"
                        value="{{ old('jenis_kelamin', Auth::user()->jenis_kelamin) }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp"
                        value="{{ old('no_hp', Auth::user()->no_hp) }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir"
                        value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}" readonly>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
