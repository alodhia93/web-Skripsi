		<div>
			<table class="table">
				<thead>
					<tr>
						<th>NIM</th>
                        <th>Nama</th>
						<th>Jenis Fakultas</th>
						<th>IPK</th>
						<th>Predikat IPK</th>
                        <th>Fakultas</th>
						<th>Kemampuan Bahasa Inggris</th>
                        <th>Pengetahuan Diluar Bidang</th>
						<th>Keterampilan Komputer</th>
                        <th>Pengalaman Magang</th>
						<th>Jenis Pekerjaan</th>
                        <th>Prediksi</th>
						<th>kira-kira (bulan)</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($mahasiswa as $ms => $id)
						<tr>
							<td>{{ $id->nim }}</td>
							<td>{{ $id->nama }}</td>
							<td>{{ $id->jenisKelamin }}</td>
                            <td>{{ $id->ipk }}</td>
							<td>{{ $id->ipkPredikat }}</td>
							<td>{{ $id->fakultas }}</td>
							<td>{{ $id->kemampuanBahasaInggris }}</td>
							<td>{{ $id->pengetahuanDiluarBidang }}</td>
							<td>{{ $id->keterampilanKomputer }}</td>
							<td>{{ $id->pengalamanMagang }}</td>
							<td>{{ $id->jenisPekerjaan }}</td>
							<td>{{ $id->prediksi }}</td>
							<td>{{ $id->prediksi === "Cepat" ? "1 - 6 bulan" : ($id->prediksi === "Sedang" ? "7 - 12 bulan" : "Lebih dari 1 tahun" )}}</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
 