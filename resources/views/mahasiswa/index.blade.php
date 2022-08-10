@extends('template')

@section('main')
<div class="row">
    <div class="col-md-6">
        <h2>Data Mahasiswa</h2>
        <p><i>Ini hanyalah prediksi belaka bukan benar benar akan terjadi nanti. Dari hasil ini diharapkan teman-teman bisa mempersiapkan diri untuk mendapatkan pekerjaan nantinya.</i></p>
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>{{ $ms->nama }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>{{ $ms->nim }}</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>{{ $ms->ipk }}</td>
                </tr>
                <tr>
                    <td>Masa Studi Bulan</td>
                    <td>{{ $ms->masaStudiBulan }}</td>
                </tr>
                <tr>
                    <td>Masa Studi Tahun</td>
                    <td>{{ $ms->masaStudiTahun }}</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>{{ $ms->fakultas }}</td>
                </tr>
                <tr>
                    <td>Kemampuan BIng</td>
                    <td>{{ $ms->kemampuanBIng }}</td>
                </tr>
                <tr>
                    <td>pengalaman Magang</td>
                    <td>{{ $ms->pengalamanMagang }}</td>
                </tr>
                <tr>
                    <td>Jenis Pekerjaan Pertama</td>
                    <td>{{ $ms->jenisPekerjaanPertama }}</td>
                </tr>
                <tr>
                    <td>Hubungan Studi</td>
                    <td>{{ $ms->hubStudidgnPekerjaan }}</td>
                </tr>
                <tr>
                    <td>Ikut Organisasi</td>
                    <td>{{ $ms->ikutOrganisasi }}</td>
                </tr>
                <tr>
                    <td>Perkiraan Mendapatkan Pekerjaan Setelah</td>
                    <td>{{ $prediksi }} bulan dari wisuda</td>
                </tr>
            </table>
        </div>
        
    </div>
@endsection