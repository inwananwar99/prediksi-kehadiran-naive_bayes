<div class="container">
	<div class="row" style="margin-top: 30px;">
		
		<div>
		
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="klasifikasi">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Kelamin</th>
							<th>Status Perkawinan</th>
							<th>Alamat</th>
							<th>Pekerjaan</th>
							<th>Kepemilikan KTP</th>
							<th>Jarak Rumah</th>
							<th>Status Keberadaan</th>
							<th>Status Kehadiran</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach ($klasifikasi as $row) {
						 ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row['jenis_kelamin'] ?></td>
							<td><?= $row['status_perkawinan'] ?></td>
							<td><?= $row['alamat'] ?></td>
							<td><?= $row['pekerjaan'] ?></td>
							<td><?= $row['ktp'] ?></td>
							<td><?= $row['jarak_rumah'] ?></td>
							<td><?= $row['stts_keberadaan'] ?></td>
							<td><?= $row['stts_kehadiran'] ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>