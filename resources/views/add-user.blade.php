@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Add User</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Add User
        </div>
        <div class="card-body">
            <form action="{{ route('saveuser') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Pegawai</label>
                    <input type="text" class="form-control" name="no_pegawai" placeholder="Nomor Pegawai" autofocus
                        required>
                    <div class="form-text">Sesuai dengan yang ada di Kartu RFID.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select" name="level" required>
                        <option selected>Open this select menu</option>
                        <option value="Admin">Admin</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email@emailanda.com" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select" name="jenis_kelamin" required>
                        <option selected>Open this select menu</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="08123456789" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir Karyawan" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
                </div>
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
</div>
@endsection
