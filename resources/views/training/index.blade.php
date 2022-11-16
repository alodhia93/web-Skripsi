@extends('template')

@section('main')
 
		
		<div>
			

			<h2>Data Training</h2>
			<br>
			<br>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Predikat IPK</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Prodi</th>
						<th>Pengetahuan di bidang atau disiplin ilmu</th>
						<th>Pengetahuan di luar bidang atau disiplin ilmu</th>
						<th>Pengetahuan umum</th>
						<th>Berpikir kritis</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($training as $tr)
						<tr>
							<td>{{ $tr->predikat_IPK }}</td>
							<td>{{ $tr->nim_mahasiswa }}</td>
							<td>{{ $tr->nama_mahasiswa }}</td>
							<td>{{ $tr->Jenis_Kelamin }}</td>
							<td>{{ $tr->prodi }}</td>
							<td>{{ $tr->Pengetahuan_di_bidang_atau_disiplin_ilmu }}</td>
							<td>{{ $tr->Pengetahuan_di_luar_bidang_atau_disiplin_ilmu }}</td>
							<td>{{ $tr->Pengetahuan_umum }}</td>
							<td>{{ $tr->Berpikir_kritis }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
				
			@endif
			@if ($page == true)
			<div>
				{{ $training->links() }}
			</div>
			@endif
			
			
		</div>
		
 
 
 
	@endsection