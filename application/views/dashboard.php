<div class="container">
<?= $this->session->flashdata('message') ?>
<div class="row" style="margin-left:180px">
  <div class="card bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header text-dark">Data Import</div>
  <div class="card-body">
    <h3 class="card-title text-white"><?= $this->db->get('klasifikasi')->num_rows() ?></h3>
    <p class="card-text text-white"><b>Data Import yang tersimpan</b></p>
  </div>
</div>
<div class="card bg-success mb-3 ml-3" style="max-width: 18rem;">
  <div class="card-header text-dark">Data Training</div>
  <div class="card-body">
    <h3 class="card-title text-white"><?= $this->db->query("SELECT * FROM klasifikasi LIMIT 174")->num_rows(); ?></h3>
    <p class="card-text text-white"><b>Data Training yang tersimpan</b></p>
  </div>
</div>
<div class="card bg-primary mb-3 ml-3" style="max-width: 18rem;">
  <div class="card-header text-dark">Data Testing</div>
   <div class="card-body">
    <h3 class="card-title text-white"><?= $this->db->query("SELECT * FROM klasifikasi LIMIT 174,76")->num_rows(); ?></h3>
    <p class="card-text text-white"><b>Data Testing yang tersimpan</b></p>
  </div>
</div>

	</div>
</div>