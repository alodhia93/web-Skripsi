@extends('template')

@section('main')
<div class="card col align-self-center" style="width: max-content;">
    <div class="card-body">
        <h5 class="card-title">Form Prediksi</h5>
        {!! Form::model($mahasiswa, ['method' => 'PATCH', 'action' => ['PrediksiController@update', $mahasiswa->nim_mahasiswa]]) !!}
        @include('prediksi.form', ['submitBtnText' => 'Perbarui'])
        {!! Form::close() !!}
    </div>
</div>
    
@endsection