<div class="container">
<h4 style="margin-bottom: 30px;">Ubah Data Kehadiran</h4>
<form method="post" action="<?= base_url('Klasifikasi/ubahDataKehadiran') ?>">
  <div class="row">
  <div class="col-md-6">
	<div class="form-group">
    <?php foreach([$klasifikasi] as $kls) : ?>
      <input type="hidden" name="id" value="<?= $kls['id_klasifikasi']; ?>">
    <?php endforeach; ?>
    <label for="ktp">Jenis Kelamin</label>
    <select class="form-control" name="jk">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['jenis_kelamin']; ?></option>
      <?php endforeach ?>
      <option>L</option>
      <option>P</option>
    </select>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="ktp" >Status Perkawinan</label>
    <select class="form-control" name="perkawinan">
     <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['status_perkawinan']; ?></option>
      <?php endforeach ?>
      <option>Sudah Menikah</option>
      <option>Pisah</option>
      <option>Belum Menikah</option>
    </select>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6">
	<div class="form-group">
		<label>Alamat</label>
		<select name="alamat" class="form-control">
     <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['alamat']; ?></option>
      <?php endforeach ?>
			<option >Kp. Transito</option>
			<option >Kp. Transito No. 5</option>
			<option >Kp. Transito No. 10</option>
		</select>
	</div>
	</div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="ktp">Kepemilikan KTP</label>
    <select class="form-control" name="ktp">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['ktp']; ?></option>
      <?php endforeach ?>
      <option >K</option>
      <option >B</option>
    </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Pekerjaan</label>
    <select class="form-control" name="pekerjaan">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['pekerjaan']; ?></option>
      <?php endforeach ?>
      <option >PNS</option>
      <option >Buruh</option>
    </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Jarak Rumah</label>
    <select class="form-control" name="jarak">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['jarak_rumah']; ?></option>
      <?php endforeach ?>
      <option >< 200 Meter</option>
      <option >> 200 Meter</option>
    </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Status Keberadaan</label>
    <select class="form-control" name="keberadaan">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['stts_keberadaan']; ?></option>
      <?php endforeach ?>
      <option >Tanjungpinang</option>
      <option >Diluar Tanjungpinang</option>
    </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Status Kehadiran</label>
    <select class="form-control" name="kehadiran">
      <?php foreach([$klasifikasi] as $kls) : ?>
        <option><?= $kls['stts_kehadiran']; ?></option>
      <?php endforeach ?>
      <option value="Hadir">Hadir</option>
      <option value="Tidak Hadir">Tidak Hadir</option>
    </select>
  </div>
</div>
</div>
 <div class="row">
    <button type="submit" class="btn btn-primary">Ubah</button>
    <a style="margin-left:15px;margin-top: 5px;" href="<?= base_url('Klasifikasi') ?>">Ke Halaman Data Kehadiran</a>
</div>
</form>
</div>