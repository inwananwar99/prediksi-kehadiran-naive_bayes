<div class="container">
<h4>Prediksi Data Kehadiran</h4>
<form method="post" action="<?= base_url('Klasifikasi/perhitungan') ?>">
  <div class="row">
    <div class="col-md-6">
	<div class="form-group">
    <label for="ktp">Jenis Kelamin</label>
    <select class="form-control" name="jk">
      <option>-- Jenis Kelamin --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="ktp" >Status Perkawinan</label>
    <select class="form-control" name="perkawinan">
      <option>-- Status Perkawinan --</option>
      <option value="Sudah Menikah">Sudah Menikah</option>
      <option value="Pisah">Pisah</option>
      <option value="Belum Menikah">Belum Menikah</option>
    </select>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-6">
	<div class="form-group">
		<label>Alamat</label>
		<select name="alamat" class="form-control">
      <option>-- Alamat --</option>
      <option value="Kp.transito">Kp.transito</option>
      <option value="Jl.transito">Jl.transito</option>
      <option value="Kp.ransito">Kp.ransito</option>
      <option value="Kp.transito perum.transmigrasi">Kp.transito perum.transmigrasi</option>
      <option value="Jl.transito.kp.transito">Jl.transito.kp.transito</option>
      <option value="Jl.transito perum.transito">Jl.transito perum.transito</option>
      <option value="Jl.transito kp.transito">Jl.transito kp.transito</option>
      <option value="taman transito">taman transito</option>
      <option value="Taman.transito">Taman.transito</option>
      <option value="Komplek.transmigrasi jl.transito">Komplek.transmigrasi jl.transito</option>
			<option value="Kp transito">Kp transito</option>
		</select>
	</div>
</div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="ktp">Kepemilikan KTP</label>
    <select class="form-control" name="ktp">
      <option>-- Kepemilikan KTP --</option>
      <option value="Sudah Rekam">Sudah Rekam</option>
      <option value="Belum Rekam">Belum Rekam</option>
    </select>
    </div>
  </div>
</div>
    <div class="form-group">
    <label for="ktp">Pekerjaan</label>
    <select class="form-control" name="pekerjaan">
      <option>-- Pekerjaan --</option>
    <?php foreach($getKerja as $kerja) : ?>
      <option value="<?= $kerja['pekerjaan']; ?>"><?= $kerja['pekerjaan']; ?></option>
    <?php endforeach; ?>
    </select>
    </div>
    <div class="form-group">
    <label for="ktp">Jarak Rumah</label>
    <select class="form-control" name="jarak">
      <option>-- Jarak Rumah --</option>
      <option value="Kurang Dari 200 Meter">Kurang Dari 200 Meter</option>
      <option value="200 Meter">200 Meter</option>
      <option value="Lebih dari 200 Meter">Lebih dari 200 Meter</option>
    </select>
    </div>
    <div class="form-group">
    <label for="ktp">Status Keberadaan</label>
    <select class="form-control" name="keberadaan">
      <option>-- Status Keberadaan --</option>
      <option value="Tanjungpinang">Tanjungpinang</option>
      <option value="Luar Tanjungpinang">Luar Tanjungpinang</option>
    </select>
    
    </div>
    <div class="row">
    <button type="submit" class="btn btn-warning">Hitung</button>
    <a style="margin-left:15px; margin-top: 10px" href="<?= base_url('Data/data_testing'); ?>" >Lihat Data Testing</a>
  </div>
</form>
</div>