@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
        <h2>Akun Mahasiswa</h2>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>{{ $akun->nim}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $akun->nama  }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $akun->jenisKelamin  }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $akun->email }}</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>{{ $akun->fakultas }}</td>
                </tr>
                    <td colspan="2">
                        <img src="{{ asset('kpmUpload/'.$akun->kpm) }}" class="zoom">
                    </td>
                </tr>
            </table></div>
        
    </div>
@endsection