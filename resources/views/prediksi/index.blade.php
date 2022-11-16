@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
		@include('__partial')
        <h2>Data Mahasiswa</h2>
        <p><i>Ini hanyalah prediksi belaka bukan benar benar akan terjadi nanti. Dari hasil ini diharapkan teman-teman bisa mempersiapkan diri untuk mendapatkan pekerjaan nantinya.</i></p>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>{{ $mahasiswa->nim_mahasiswa}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $mahasiswa->Jenis_Kelamin  }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                </tr>
                <tr>
                    <td>Pengetahuan di bidang atau disiplin ilmu</td>
                    <td>{{ $mahasiswa->Pengetahuan_di_bidang_atau_disiplin_ilmu }}</td>
                </tr>
                <tr>
                    <td>Pengetahuan di luar bidang atau disiplin ilmu</td>
                    <td>{{ $mahasiswa->Pengetahuan_di_luar_bidang_atau_disiplin_ilmu }}</td>
                </tr>
                <tr>
                    <td>Pengetahuan umum</td>
                    <td>{{ $mahasiswa->Pengetahuan_umum }}</td>
                </tr>
                <tr>
                    <td>Berpikir kritis</td>
                    <td>{{ $mahasiswa->Berpikir_kritis }}</td>
                </tr>
                
                <tr>
                    <td>predikat IPK</td>
                    <td>{{ $mahasiswa->predikat_IPK }}</td>
                </tr>
                <tr>
            </table>{{ link_to('prediksi/'.$mahasiswa->nim_mahasiswa.'/edit', 'Sunting', ['class'=>'btn btn-warning btn-sm']) }}
        </div>
    </div>
@endsection