@extends('template')

@section('main')
		<center>
			<h4>Import Excel Ke Database Dengan Laravel</h4>
		</center>
 
		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="training/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
 
		<div>
			<h2>Data Training</h2>
			<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
				Unggah Data
			</button>
			<a role="button" class="btn btn-danger mr-5" aria-pressed="true" href="training/delete">
				Hapus Data
			</a>
			<br>
			<br>
			<br>
			@if (isset($training))
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>NIM</th>
						<th>IPK</th>
						<th>Diterima Setelah Lulus</th>
						<th>Masa Studi (bulan)</th>
						<th>Masa Studi (tahun)</th>
						<th>Fakultas</th>
						<th>Kemampuan Bahasa Inggris</th>
						<th>Pengalaman Magang</th>
						<th>Jenis Pekerjaan Pertama</th>
						<th>Hubungan Studi dengan Pekerjaan</th>
						<th>Ikut Organisasi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($training as $tr)
						<tr>
							<td>{{ $tr->nim }}</td>
							<td>{{ $tr->ipk }}</td>
							<td>{{ $tr->diterimaBulanStlhLulus }} bulan</td>
							<td>{{ $tr->masaStudiBulan }}</td>
							<td>{{ $tr->masaStudiTahun }}</td>
							<td>{{ $tr->fakultas }}</td>
							<td>{{ $tr->kemampuanBIng }}</td>
							<td>{{ $tr->pengalamanMagang }}</td>
							<td>{{ $tr->jenisPekerjaanPertama }}</td>
							<td>{{ $tr->hubStudidgnPekerjaan }}</td>
							<td>{{ $tr->ikutOrganisasi }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div>
				{{ $training->links() }}
			</div>	
			@else
				<p>Data training tidak ada</p>
			@endif
			
		</div>
		
 
 
 
	@endsection