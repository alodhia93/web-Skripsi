@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
        <h2>Data Mahasiswa</h2>
        <p><i>Ini hanyalah prediksi semata. Dari hasil yang didapat ini diharapkan teman-teman bisa mempersiapkan diri untuk lebih giat lagi meningkatkan niat belajar.</i></p>
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
            </table></div>
        
    </div>
@endsection