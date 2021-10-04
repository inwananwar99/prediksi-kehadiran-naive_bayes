<div class="container">
	<h5 class="mb-4"><?= $judul; ?></h5>
	<div class="form-group">
		<a class="btn btn-success" href="<?= base_url('Data/tambahTesting') ?>">Tambah</a>
	</div>
	<div class="row" style="margin-top: 30px;">
		
		<div>
		
			<div class="table-responsive">
				<table class="table table-striped table-bordered kehadiran" >
					<thead>
						<tr>
						<th>No</th>
						<th>Jenis Kelamin</th>
						<th>Status Perkawinan</th>
						<th>Alamat</th>
						<th>Kepemilikan KTP</th>
						<th>Pekerjaan</th>
						<th>Jarak Rumah</th>
						<th>Status Keberadaan</th>
						<th>Status Kehadiran</th>
						<th>Aksi</th>
					</tr>	
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach ($trainingtesting as $kls) {
						 ?>
						<tr>
						<td><?= $no++; ?></td>
						<td><?= $kls['jenis_kelamin']; ?></td>
						<td><?= $kls['status_perkawinan']; ?></td>
						<td><?= $kls['alamat']; ?></td>
						<td><?= $kls['ktp']; ?></td>
						<td><?= $kls['pekerjaan']; ?></td>
						<td><?= $kls['jarak_rumah']; ?></td>
						<td><?= $kls['stts_keberadaan']; ?></td>
						<td><?= $kls['stts_kehadiran']; ?></td>
						<td>
							<div class="row">
								<div class="col">
									<a href=""><i class="far fa-edit"></i><br>Edit</a>
									<a href=""><br><i class="far fa-trash-alt"></i>Hapus</a>

								</div>
							</div>
							
						</td>
					</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>