<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Kepegawaian</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
<style>
  a.d-block{
    color : #fff;
  }

  
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Preloader -->
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li>
    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?=ucfirst($this->fungsi->users_login()->nama)?></a>
        </div>
      </div>
      </li>
      <!-- USER Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-cog"></i>
        </a>
        <div class="dropdown-menu" role="menu">
          
        <a class="dropdown-item" href="<?= site_url('users/profiluser')?>">Edit Profile</a>
        <a class="dropdown-item" href="<?= site_url('auth/logout')?>">Logout</a>
                      
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('dashboard/user')?>" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/sl_round.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold">SIMPEG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block" style="font-size:small">MAIN NAVIGATION</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?= site_url('dashboard/user')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('users/pegawai')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kepegawaian
              </p>
            </a>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kepegawaian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kepegawaian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Kepegawaian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <tbody>
                  <?php foreach($identitas as $i) ?>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><?= $i['nama'] ?></td>
                    </tr>
                    <tr>
                      <td>NIP</td>
                      <td>:</td>
                      <td><?= $i['nip'] ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><?=$retVal = ($i['id_jk']) == 1 ? "Laki-laki" : "Perempuan"; ?></td>
                    </tr>
                    <tr>
                      <td>NUPTK</td>
                      <td>:</td>
                      <td><?= $i['nuptk'] ?></td>
                    </tr>
                    <tr>
                      <td>Tempat Tanggal Lahir</td>
                      <td>:</td>
                      <td><?= $i['tempat_lahir'] ?>, <?= $i['tgl_lahir'] ?></td>
                    </tr>
                    <tr>
                      <td>Status Kepegawaian</td>
                      <td>:</td>
                      <td><?= $retVal = ($i['id_status']) == 1 ? "GTY" :
                              $retVal = ($i['id_status']) == 2 ? "PTY" : 
                              $retVal = ($i['id_status']) == 3 ? "PTTY" : "GTTY"; ?></td>
                    </tr>
                    <tr>
                      <td>Pangkat / Golongan</td>
                      <td>:</td>
                      <td><?= $retVal = ($i['id_pangkat']) == 1 ? "GOL-I" :
                              $retVal = ($i['id_pangkat']) == 2 ? "GOL-II" : 
                              $retVal = ($i['id_pangkat']) == 3 ? "GOL-III" :  
                              $retVal = ($i['id_pangkat']) == 4 ? "GOL-IV" : "LAINNYA"; ?></td>
                    </tr>
                    <tr>
                      <td>No telepon</td>
                      <td>:</td>
                      <td><?= $i['hp'] ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?= $i['alamat'] ?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><?= $i['email'] ?></td>
                    </tr>
                    <tr>
                      <td>NPWP</td>
                      <td>:</td>
                      <td><?= $i['npwp'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <strong>Copyright &copy; 2021 </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>