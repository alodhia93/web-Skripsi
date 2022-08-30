@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
        <h2>Akun Mahasiswa</h2>
            <table border="0">
                <tr>
                    <td>
                        <div style="display: inline-block">
                            {!! Form::model($akun, ['method' => 'PATCH', 'action' => ['VerifikasiController@update', $akun->id]]) !!}
                            {!! Form::hidden('verifikasi', '1', ) !!}
                            {!! Form::submit('Verifikasi', ['class' => 'btn btn-success btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['VerifikasiController@destroy', $akun->id]]) !!}
                            {!! Form::submit('Tolak', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            </table>
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