@extends('template')

@section('main')
		<div>
			<h2>Data Mahasiswa</h2>
			@include('mahasiswa.form_pencarian')
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
                        <th>Nama</th>
						<th>Program Studi</th>
                        <th>Jenis Kelamin</th>
						<th>Predikat IPK</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($mahasiswa as $ms)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $ms->nim_mahasiswa }}</td>
							<td>{{ $ms->nama_mahasiswa }}</td>
                            <td>{{ $ms->prodi }}</td>
							<td>{{ $ms->Jenis_Kelamin}}</td>
							<td>{{ $ms->predikat_IPK }}</td>
							<td>
								<div style="display: inline-block">
									{{ link_to('mahasiswa/'.$ms->nim_mahasiswa, 'Detail', ['class'=>'btn btn-success btn-sm']) }}
								</div>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
 
 
 
	@endsection