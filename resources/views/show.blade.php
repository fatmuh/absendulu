@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Update User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Update User</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Update User
        </div>
        <div class="card-body">
            <form action="{{ url('/update/'.$data->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Pegawai</label>
                    <input type="text" class="form-control" name="no_pegawai" value="{{$data->no_pegawai}}">
                    <div class="form-text">Sesuai dengan yang ada di Kartu RFID.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select" name="level">
                        <option value="{{$data->level}}">{{$data->level}} (Current)</option>
                        <option value="Admin">Admin</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$data->email}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select" name="jenis_kelamin">
                        <option value="{{$data->jenis_kelamin}}">{{$data->jenis_kelamin}} (Current)</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp" value="{{$data->no_hp}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>
</div>
@endsection
