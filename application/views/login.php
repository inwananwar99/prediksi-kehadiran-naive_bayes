
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login User</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

</head>

<body class="bg-primary my-4">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <h2 class="text-center text-white">PENERAPAN METODE NAIVE BAYES UNTUK KLASIFIKASI
STATUS KEHADIRAN MASYARAKAT DALAM
PEMILIHAN GUBERNUR</h2>
      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
        
            <div class="row">
           
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login User</h1>
                    <?= $this->session->flashdata('message'); ?>
                  </div>
                  <form action="<?= base_url('Welcome/do_login'); ?>" method="post" class="user">
                    <div class="form-group">
                      <input type="username" name="username" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan Username..." autofocus="" required="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Password..." required="">
                    </div>
                 
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

</body>

</html>
