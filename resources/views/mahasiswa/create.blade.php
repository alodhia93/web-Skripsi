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
            {!! Form::label('jenisKelamin', 'Jenis Kelamin', ['class' => 'control-label']) !!}
            <div class="radio">
                <label>{!! Form::radio('jenisKelamin', 'Laki laki') !!}Laki laki</label>
            </div>
            <div class="radio">
                <label>{!! Form::radio('jenisKelamin', 'Perempuan') !!}Perempuan</label>
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('ipk', 'ipk', ['class' => 'control-label']) !!}
            {!! Form::text('ipk', null, ['class' => 'form-control']) !!}

            {!! Form::hidden('ipkPredikat', "2",) !!}
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
            {!! Form::label('kemampuanBahasaInggris', 'Kemampuan BahasaI nggris', ['class' => 'control-label']) !!}
            {!! Form::select('kemampuanBahasaInggris',[
                'Sangat besar' => 'Sangat besar',
                'Besar' => 'Besar',
                'Cukup besar' => 'Cukup besar',
                'Kurang' => 'Kurang',
                'Tidak sama sekali' => 'Tidak sama sekali',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pengetahuanDiluarBidang', 'Pengetahuan Diluar Bidang', ['class' => 'control-label']) !!}
            {!! Form::select('pengetahuanDiluarBidang',[
                'Sangat besar' => 'Sangat besar',
                'Besar' => 'Besar',
                'Cukup besar' => 'Cukup besar',
                'Kurang' => 'Kurang',
                'Tidak sama sekali' => 'Tidak sama sekali',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('keterampilanKomputer', 'Keterampilan Komputer', ['class' => 'control-label']) !!}
            {!! Form::select('keterampilanKomputer',[
                'Sangat besar' => 'Sangat besar',
                'Besar' => 'Besar',
                'Cukup besar' => 'Cukup besar',
                'Kurang' => 'Kurang',
                'Tidak sama sekali' => 'Tidak sama sekali',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pengalamanMagang', 'Pengalaman Magang', ['class' => 'control-label']) !!}
            {!! Form::select('pengalamanMagang',[
                'Sangat besar' => 'Sangat besar',
                'Besar' => 'Besar',
                'Cukup besar' => 'Cukup besar',
                'Kurang' => 'Kurang',
                'Tidak sama sekali' => 'Tidak sama sekali',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('jenisPekerjaan', 'Jenis Pekerjaan', ['class' => 'control-label']) !!}
            {!! Form::select('jenisPekerjaan',[
                'Instansi Pemerintah' => 'Instansi Pemerintah',
                'Organisasi non-profit/Lembaga Swadaya Masyarakat' => 'Organisasi non-profit/Lembaga Swadaya Masyarakat',
                'Perusahaan swasta' => 'Perusahaan swasta',
                'Wiraswasta/perusahaan sendiri' => 'Wiraswasta/perusahaan sendiri',
                'Lainnya' => 'Lainnya',
        ], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Tambah Data', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
    
@endsection