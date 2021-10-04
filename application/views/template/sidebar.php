  <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul style="background-color: grey;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        Admin
                        <!-- <div class="sidebar-brand-text mx-3">Sidebar Admin</div> -->
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider ">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Admin
                    </div>


                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Welcome/dashboard'); ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>


                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-database"></i>
                            <span>Lihat Data</span></a>
                    </li>
                     <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Import">
                            <i class="fas fa-file-import"></i>
                            <span>Import Data</span></a>
                    </li>

                    <li class="nav-item">
                       <a class="nav-link" href="#" data-toggle="modal" data-target="#PengujianModal">
                            <i class="fas fa-pen-square"></i>
                            <span>Pengujian</span></a>
                    </li>

                
                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Logout">
                            <i class=" fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span></a>
                    </li>



                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav style="background-color: darkgrey;" class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>



                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">




                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        </span>
                                        <h6 style="color:white;"><?= $this->session->userdata('admin'); ?></h6>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('index.php/Admin/logout') ?>" data-toggle="modal" data-target="#logout">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-4">
         <!--  <div class="card-header">
            Featured
          </div> -->
          <div class="card-body bg-success">
            <h5 class="card-title text-center text-white">Data Training</h5>
            
            <a  href="<?= base_url('Data/data_training') ?>" class="btn btn-link text-white" style="margin-left:170px">Lihat Data</a>
          </div>
        </div>
         <div class="card">
         <!--  <div class="card-header">
            Featured
          </div> -->
          <div class="card-body bg-primary">
            <h5 class="card-title text-center text-white">Data Testing</h5>
            
            <a href="<?= base_url('Data/data_testing') ?>" class="btn btn-link text-white" style="margin-left:170px">Lihat Data</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Pengujian -->
<div class="modal fade" id="PengujianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengujian Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-4">
            <div class="card-body">
            <h5 class="card-title text-center">Pengujian Tunggal</h5>
            
            <a  href="<?= base_url('Klasifikasi/hitung') ?>" class="btn btn-link" style="margin-left:170px">Lebih lanjut</a>
          </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Pengujian Akurasi</h5>
            
            <a  href="<?= base_url('Data/akurasi') ?>" class="btn btn-link" style="margin-left:170px">Lebih lanjut</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Import -->
<div class="modal fade" id="Import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col">
            <?php if(!empty($this->session->flashdata('status'))){ ?>
            <div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
            <?php } ?>
            <form action="<?= base_url('Data/import_data'); ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                <div class="form-group">
                    <label>Pilih File Excel</label>
                    <input type="file" class="form-control" name="fileExcel"><br>
                <div class="row">
                    <div class="col">
                    <button class='btn btn-success' type="submit">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Import      
                    </button><br><br>
                      <a href="<?= base_url('Data') ?>" >Lihat Data Import</a>
                    </div>
                </div>    
                    
                </div>
                </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal Import -->
<div class="modal fade" id="Logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin logout?</p>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url('Welcome/logout') ?>" class="btn btn-danger">Logout</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>