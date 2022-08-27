@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Profile</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Edit Profile
        </div>
        <div class="card-body">
            <form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                @method("put")
                @csrf

                <div class="text-center mb-3">
                    <input type="hidden" name="oldFoto" value="{{ auth()->user()->foto_profile }}">
                    @if (old('foto_profile', Auth::user()->foto_profile))
                        <img src="{{ asset('storage/'. old('foto_profile', Auth::user()->foto_profile)) }}" width="150px" class="rounded m-3">
                    @else
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                        width="200px" class="rounded m-3">
                    @endif
                    <input type="file" class="dropify" name="foto_profile" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Pegawai</label>
                    <input type="text" class="form-control" name="no_pegawai"
                        value="{{ old('no_pegawai', Auth::user()->no_pegawai) }}" readonly>
                    <div class="form-text">Sesuai dengan yang ada di Kartu RFID.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->name) }}">
                    @error('name')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                        value="{{ old('email', Auth::user()->email) }}" required>
                    @error('email')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select" name="jenis_kelamin">
                        <option value="{{ old('jenis_kelamin', Auth::user()->jenis_kelamin) }}">
                            {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) }} (Current)</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp"
                        value="{{ old('no_hp', Auth::user()->no_hp) }}">
                    @error('no_hp')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir"
                        value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}">
                    @error('tempat_lahir')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}">
                    @error('tanggal_lahir')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Profil</button>
            </form>
        </div>
    </div>
</div>
@endsection
