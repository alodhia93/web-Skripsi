@extends('template')

@section('main')
		<div>
			@include('__partial')
			<h2>Verifikasi Akun Mahasiswa</h2>
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
									{{ link_to('verifikasi/'.$ak->id, 'Verifikasi', ['class'=>'btn btn-success btn-sm']) }}
								</div>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
 
 
 
	@endsection