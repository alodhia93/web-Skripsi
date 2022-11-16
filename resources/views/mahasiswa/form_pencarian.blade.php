<div id="pencarian">
    {!! Form::open(['url' => 'mahasiswa/cari', 'method' => 'GET']) !!}
    <div class="row right">
        <div class="col-md-6">
            <div class="input-group">
                {!! Form::text('search', (!empty($search)) ? $search : null , ['class' => 'form-control', 'placeholder' => 'Masukkan nama yang dicari']) !!}
                <span class="input-group-btn">
                    {!! Form::submit('Cari', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                </span>
            </div>
        </div>
    </div>
    
    {!! Form::close() !!}
</div>