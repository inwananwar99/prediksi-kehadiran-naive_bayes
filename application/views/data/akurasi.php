<div class="container">
	<h3><?= $judul ?></h3>
	<div class="jumbotron" style="margin-top: 20px;">
			<div class="row">
				<div class="form-group">
					<form action="<?= base_url('Data/cm_akurasi') ?>" method="post" >
						<!-- <label>Jumlah Data Training</label>
						<input type="text" class="form-control" name="dtrain" value="<?= $training; ?>"> -->
						<label>Jumlah Data Testing </label>
						<input type="text" class="form-control" name="dtest" value="<?= $testing; ?>"><br>
					<button class="btn btn-success" type="submit">Hitung</button>
					</form>
				</div>
			</div>
	</div>
</div>						