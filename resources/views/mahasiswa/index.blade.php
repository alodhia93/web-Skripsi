@extends('template')

@section('main')
		<div>
			<h2>Data Mahasiswa</h2>
			<a href="{{ url('mahasiswa/export') }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
			@include('mahasiswa.form_pencarian')
			<table class="table">
				<thead>
					<tr>
						<th>NIM</th>
                        <th>Nama</th>
						<th>IPK</th>
                        <th>Prediksi</th>
						<th>Fakultas</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($mahasiswa as $ms => $id)
						<tr>
							<td>{{ $id->nim }}</td>
							<td>{{ $id->nama }}</td>
                            <td>{{ $id->ipk }}</td>
							<td>{{ $id->prediksi}} bulan</td>
							<td>{{ $id->fakultas }}</td>
							<td>
								<div style="display: inline-block">
									{{ link_to('mahasiswa/'.$id->nim, 'Detail', ['class'=>'btn btn-success btn-sm']) }}
								</div>
								<div style="display: inline-block">
									{!! Form::open(['method' => 'DELETE', 'action' => ['MahasiswaController@destroy', $id->nim]]) !!}
									{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
									{!! Form::close() !!}
								</div>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
 
 
 
	@endsection