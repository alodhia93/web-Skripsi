@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
        <h2>Data Mahasiswa</h2>
        <p><i>Ini hanyalah prediksi belaka bukan benar benar akan terjadi nanti. Dari hasil ini diharapkan teman-teman bisa mempersiapkan diri untuk mendapatkan pekerjaan nantinya.</i></p>
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>{{ $mahasiswa->nama }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>{{ $mahasiswa->ipk }}</td>
                </tr>
                <tr>
                    <td>Masa Studi Bulan</td>
                    <td>{{ $mahasiswa->masaStudiBulan }}</td>
                </tr>
                <tr>
                    <td>Masa Studi Tahun</td>
                    <td>{{ $mahasiswa->masaStudiTahun }}</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>{{ $mahasiswa->fakultas }}</td>
                </tr>
                <tr>
                    <td>Kemampuan BIng</td>
                    <td>{{ $mahasiswa->kemampuanBIng }}</td>
                </tr>
                <tr>
                    <td>pengalaman Magang</td>
                    <td>{{ $mahasiswa->pengalamanMagang }}</td>
                </tr>
                <tr>
                    <td>Jenis Pekerjaan Pertama</td>
                    <td>{{ $mahasiswa->jenisPekerjaanPertama }}</td>
                </tr>
                <tr>
                    <td>Hubungan Studi</td>
                    <td>{{ $mahasiswa->hubStudidgnPekerjaan }}</td>
                </tr>
                <tr>
                    <td>Ikut Organisasi</td>
                    <td>{{ $mahasiswa->ikutOrganisasi }}</td>
                </tr>
                <tr>
                    <td>Perkiraan Mendapatkan Pekerjaan Setelah</td>
                    <td>{{ $prediksi }} bulan dari wisuda</td>
                </tr>
            </table>
        </div>
        
    </div>
@endsection