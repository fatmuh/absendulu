@extends('layouts.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Karyawan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/absensi">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Karyawan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            Data Karyawan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No. Pegawai</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataKaryawan)
                    <tr>
                        <td>{{ $dataKaryawan->no_pegawai}}</td>
                        <td>{{ $dataKaryawan->name}}</td>
                        <td>{{ $dataKaryawan->level}}</td>
                        <td>{{ $dataKaryawan->email}}</td>
                        <td>{{ $dataKaryawan->no_hp}}</td>
                        <td><center>
                            <a href="{{url('/show/'.$dataKaryawan->id)}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            <a href="{{url('/delete/'.$dataKaryawan->id)}}" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> </center></td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
