<div class="container">
	<div class="jumbotron" style="margin-top: 20px;">
		<h2>Hasil Prediksi Status Kehadiran Masyarakat</h2><br>
		<h5><?= 'Jenis Kelamin : '.$input1; ?></h5>
		<h5><?= 'Status Perkawinan : '.$input2; ?></h5>
		<h5><?= 'Alamat : '.$input3; ?></h5>
		<h5><?= 'Kepemilikan KTP : '.$input4; ?></h5>
		<h5><?= 'Pekerjaan : '.$input5; ?></h5>
		<h5><?= 'Jarak Rumah : '.$input6; ?></h5>
		<h5><?= 'Status Keberadaan : '.$input7; ?></h5><br><br>
	<!-- <p><?= 'Masyarakat yang hadir :      '.round($h1,4) .' x '. round($h2,4) .' x '. round($h3,4) .' x '. round($h4,4) .' x '. round($h5,4) .' x '. round($h6,4) .' x '. round($h7,4) .' x '. $prob_hadir .' = '. $hadir; ?></p>
	<p><?= 'Masyarakat yang tidak hadir : '.$th1 .' x '. $th2 .' x '. $th3 .' x '. $th4 .' x '. $th5 .' x '. $th6 .' x '. $th7 .' x '. $prob_tidakhadir .' = '. $tidak_hadir; ?></p> -->
	<h5><?= $simpulan1; ?></h5>
	</div>
	<a href="<?= base_url('Klasifikasi/hitung'); ?>">Kembali</a>
</div>