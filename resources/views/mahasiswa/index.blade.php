@extends('template')

@section('main')
		<div>
			<h2>Data Mahasiswa</h2>
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
                    @php
                        $i=0;
                    @endphp
					@foreach ($mahasiswa as $ms)
						<tr>
							<td>{{ $ms->nim }}</td>
							<td>{{ $ms->nama }}</td>
                            <td>{{ $ms->ipk }}</td>
							<td>{{ /*$client[$i++]['prediction(diterimaBulanStlhLulus)']*/ $    ms->ipk  }} bulan</td>
							<td>{{ $ms->fakultas }}</td>
							<td>{{ $ms->ikutOrganisasi }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
 
 
 
	@endsection