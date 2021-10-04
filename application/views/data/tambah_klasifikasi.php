<div class="container">
<h4 style="margin-bottom: 30px;">Tambah Data Kehadiran</h4>
<form method="post" action="<?= base_url('Data/tambahDataTesting') ?>">
  <div class="row">
  <div class="col-md-6">
	<div class="form-group">
    <label for="ktp">Jenis Kelamin</label>
    <select class="form-control" name="jk">
      <option>-- Jenis Kelamin --</option>
      <option >Laki-laki</option>
      <option >Perempuan</option>
    </select>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="ktp" >Status Perkawinan</label>
    <select class="form-control" name="perkawinan">
      <option>-- Status Perkawinan --</option>
      <option >Sudah Menikah</option>
      <option >Pisah</option>
      <option >Belum Menikah</option>
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
      <option >Sudah Rekam</option>
      <option >Belum Rekam</option>
    </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Pekerjaan</label>
    <select class="form-control" name="pekerjaan">
      <option>-- Pekerjaan --</option>
     <?php foreach($getKerja as $kerja) : ?>
      <option value="<?= $kerja['pekerjaan']; ?>"><?= $kerja['pekerjaan']; ?></option>
    <?php endforeach; ?>
    </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Jarak Rumah</label>
    <select class="form-control" name="jarak">
       <option>-- Jarak Rumah --</option>
      <option value="Kurang Dari 200 Meter">Kurang Dari 200 Meter</option>
      <option value="200 Meter">200 Meter</option>
      <option value="Lebih dari 200 Meter">Lebih dari 200 Meter</option>
    </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Status Keberadaan</label>
    <select class="form-control" name="keberadaan">
      <option>-- Status Keberadaan --</option>
      <option >Tanjungpinang</option>
      <option >Diluar Tanjungpinang</option>
    </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="ktp">Status Kehadiran</label>
    <select class="form-control" name="kehadiran">
      <option>-- Status Kehadiran --</option>
      <option value="Hadir">Hadir</option>
      <option value="Tidak Hadir">Tidak Hadir</option>
    </select>
  </div>
</div>
</div>
 <div class="row">
    <button type="submit" class="btn btn-warning">Simpan</button>
    <a class="ml-4" href="<?= base_url('Data/data_testing') ?>">Kembali ke Data Testing</a>
</div>
</form>
</div>