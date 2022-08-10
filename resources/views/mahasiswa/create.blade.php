@extends('template')

@section('main')
<div class="card col align-self-center" style="width: max-content;">
    <div class="card-body">
        <h5 class="card-title">Form Prediksi</h5>
        {!! Form::open(['url' => 'mahasiswa']) !!}
        <div class="form-group">
            {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nim', 'NIM', ['class' => 'control-label']) !!}
            {!! Form::text('nim', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('ipk', 'ipk', ['class' => 'control-label']) !!}
            {!! Form::text('ipk', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('masaStudiBulan', 'Masa Studi Bulan', ['class' => 'control-label']) !!}
            {!! Form::selectRange('masaStudiBulan', 1, 11, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('masaStudiTahun', 'Masa Studi Tahun', ['class' => 'control-label']) !!}
            {!! Form::selectRange('masaStudiTahun', 3, 5, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fakultas', 'Fakultas', ['class' => 'control-label']) !!}
            {!! Form::select('fakultas',[
                'EKONOMI' => 'EKONOMI',
                'HUKUM' => 'HUKUM',
                'ILMU KOMPUTER' => 'ILMU KOMPUTER',
                'ILMU SOSIAL DAN ILMU POLITIK' => 'ILMU SOSIAL DAN ILMU POLITIK',
                'KEDOKTERAN' => 'KEDOKTERAN',
                'KEGURUAN DAN ILMU PENDIDIKAN' => 'KEGURUAN DAN ILMU PENDIDIKAN',
                'KESEHATAN MASYARAKAT' => 'KESEHATAN MASYARAKAT',
                'MATEMATIKA DAN ILMU PENGETAHUAN ALAM' => 'MATEMATIKA DAN ILMU PENGETAHUAN ALAM',
                'PERTANIAN' => 'PERTANIAN',
                'TEKNIK' => 'TEKNIK',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('kemampuanBIng', 'Kemampuan BIng', ['class' => 'control-label']) !!}
            {!! Form::selectRange('kemampuanBIng', 1, 5, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pengalamanMagang', 'Pengalaman Magang', ['class' => 'control-label']) !!}
            {!! Form::selectRange('pengalamanMagang', 1, 5, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('jenisPekerjaanPertama', 'Jenis Pekerjaan Pertama', ['class' => 'control-label']) !!}
            {!! Form::select('jenisPekerjaanPertama',[
                'BUMN' => 'BUMN',
                'BUMD' => 'BUMD',
                'Instansi Pemerintah' => 'Instansi Pemerintah',
                'Organisasi non-profit' => 'Organisasi non-profit',
                'Swasta' => 'Swasta',
                'Wiraswasta' => 'Wiraswasta',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('hubStudidgnPekerjaan', 'Hubungan Studi dgn Pekerjaan', ['class' => 'control-label']) !!}
            {!! Form::selectRange('hubStudidgnPekerjaan', 1, 5, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ikutOrganisasi', 'Ikut Organisasi', ['class' => 'control-label']) !!}
            <div class="radio">
                <label>{!! Form::radio('ikutOrganisasi', 1) !!}Pernah</label>
            </div>
            <div class="radio">
                <label>{!! Form::radio('ikutOrganisasi', 0) !!}Tidak Pernah</label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Tambah Data', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
    
@endsection