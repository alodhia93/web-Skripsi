@extends('template')

@section('main')
		<div>
			<h2>Akun Mahasiswa</h2>
			@include('akun.form_pencarian')
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Email</th>
						<th>NIM</th>
                        <th>Nama</th>
						<th>Fakultas</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($akun as $ak)
						<tr>
							<td>{{ $loop->iteration }}</td>
                            <td>{{ $ak->email }}</td>
							<td>{{ $ak->nim }}</td>
							<td>{{ $ak->nama }}</td>
							<td>{{ $ak->fakultas }}</td>
							<td>
								<div style="display: inline-block">
									{{ link_to('akun/'.$ak->id, 'Detail', ['class'=>'btn btn-success btn-sm']) }}
								</div>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
 
 
 
	@endsection