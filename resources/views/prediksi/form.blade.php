<div class="form-group">
    {!! Form::label('nim_mahasiswa', 'NIM', ['class' => 'control-label']) !!}
    {!! Form::text('nim_mahasiswa', $mahasiswa['nim'], ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="form-group">
            {!! Form::label('nama_mahasiswa', 'Nama', ['class' => 'control-label']) !!}
            {!! Form::text('nama_mahasiswa', $mahasiswa['nama'], ['class' => 'form-control', 'readonly']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Jenis_Kelamin', 'Jenis Kelamin', ['class' => 'control-label']) !!}
            {!! Form::text('Jenis_Kelamin', $mahasiswa['Jenis_Kelamin'] , ['class' => 'form-control', 'readonly']) !!}
            {!! Form::hidden('LakiLaki', $LakiLaki) !!}
            {!! Form::hidden('Perempuan', $Perempuan) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('prodi', 'Program Studi', ['class' => 'control-label']) !!}
            {!! Form::text('prodi', $mahasiswa['prodi'], ['class' => 'form-control', 'readonly']) !!}
        </div>
        

        @if ($errors->any())
            <div class="form-group {{ $errors->has('Pengetahuan_di_bidang_atau_disiplin_ilmu') ? 'has-error' : 'has-success'}}">
        @else
            <div class="form-group">
        @endif
            {!! Form::label('Pengetahuan_di_bidang_atau_disiplin_ilmu', 'Pengetahuan di bidang atau disiplin ilmu', ['class' => 'control-label']) !!}
            {!! Form::select('Pengetahuan_di_bidang_atau_disiplin_ilmu',[
                null => 'Silahkan pilih',
                '5' => 'Sangat Tinggi',
                '4' => 'Tinggi',
                '3' => 'Cukup',
                '2' => 'Rendah',
                '1' => 'Sangat Rendah',
        ], null, ['class' => 'form-control']) !!}
            @if ($errors->has('Pengetahuan_di_bidang_atau_disiplin_ilmu'))
                <span class="help-block">{{ $errors->first('Pengetahuan_di_bidang_atau_disiplin_ilmu') }}</span>
            @endif
        </div>

        @if ($errors->any())
            <div class="form-group {{ $errors->has('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu') ? 'has-error' : 'has-success'}}">
        @else
            <div class="form-group">
        @endif
            {!! Form::label('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu', 'Pengetahuan di luar bidang atau disiplin ilmu', ['class' => 'control-label']) !!}
            {!! Form::select('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu',[
                null => 'Silahkan pilih',
                '5' => 'Sangat Tinggi',
                '4' => 'Tinggi',
                '3' => 'Cukup',
                '2' => 'Rendah',
                '1' => 'Sangat Rendah',
        ], null, ['class' => 'form-control']) !!}
            @if ($errors->has('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu'))
                <span class="help-block">{{ $errors->first('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu') }}</span>
            @endif
        </div>

        @if ($errors->any())
            <div class="form-group {{ $errors->has('Pengetahuan_umum') ? 'has-error' : 'has-success'}}">
        @else
            <div class="form-group">
        @endif
            {!! Form::label('Pengetahuan_umum', 'Pengetahuan umum', ['class' => 'control-label']) !!}
            {!! Form::select('Pengetahuan_umum',[
                null => 'Silahkan pilih',
                '5' => 'Sangat Tinggi',
                '4' => 'Tinggi',
                '3' => 'Cukup',
                '2' => 'Rendah',
                '1' => 'Sangat Rendah',
        ], null, ['class' => 'form-control']) !!}
            @if ($errors->has('Pengetahuan_umum'))
                <span class="help-block">{{ $errors->first('Pengetahuan_umum') }}</span>
            @endif
        </div>

        @if ($errors->any())
            <div class="form-group {{ $errors->has('Berpikir_kritis') ? 'has-error' : 'has-success'}}">
        @else
            <div class="form-group">
        @endif
            {!! Form::label('Berpikir_kritis', 'Berpikir kritis', ['class' => 'control-label']) !!}
            {!! Form::select('Berpikir_kritis',[
                null => 'Silahkan pilih',
                '5' => 'Sangat Tinggi',
                '4' => 'Tinggi',
                '3' => 'Cukup',
                '2' => 'Rendah',
                '1' => 'Sangat Rendah',
        ], null, ['class' => 'form-control']) !!}
            @if ($errors->has('Berpikir_kritis'))
                <span class="help-block">{{ $errors->first('Berpikir_kritis') }}</span>
            @endif
        </div>
        
        </div>

        <div class="form-group">
            {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
        </div>