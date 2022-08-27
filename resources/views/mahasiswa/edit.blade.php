@extends('template')

@section('main')
<div class="card col align-self-center" style="width: max-content;">
    <div class="card-body">
        <h5 class="card-title">Form Prediksi</h5>
        {!! Form::model($mahasiswa, ['method' => 'PATCH', 'action' => ['MahasiswaController@update', $mahasiswa->nim]]) !!}
        @include('mahasiswa.form', ['submitBtnText' => 'Perbarui'])
        {!! Form::close() !!}
    </div>
</div>
    
@endsection