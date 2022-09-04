@extends('template')

@section('main')
<div class="modal fade" id="hapusAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['method' => 'DELETE', 'action' => ['VerifikasiController@destroy', $akun->id]]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
                </div>
                <div class="modal-body">

                    <label>Akun ini akan dihapus, apakah anda yakin untuk menghapus akun ini?</label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                </div>
            </div>
        {!! Form::close() !!}	
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h2>Akun Mahasiswa</h2>
            <table border="0">
                <tr>
                    <td>
                        <div style="display: inline-block">
                            {!! Form::model($akun, ['method' => 'PATCH', 'action' => ['VerifikasiController@update', $akun->id]]) !!}
                            {!! Form::hidden('verifikasi', '1', ) !!}
                            {!! Form::submit('Verifikasi', ['class' => 'btn btn-success mr-5']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block">
                            <button type="button" class="btn btn-danger mr-5" data-toggle="modal" data-target="#hapusAkun">
                                Hapus Akun
                            </button>
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