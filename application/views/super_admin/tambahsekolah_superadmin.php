<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Admin | Tambah Sekolah</title>

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
<style>
  a.d-block{
    color : #fff;
  }

  thead.judul{
    text-align : center;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



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
          
        <a class="dropdown-item" href="<?= site_url('users/profilsuperadmin')?>">Edit Profile</a>
        <a class="dropdown-item" href="<?= site_url('auth/logout')?>">Logout</a>
                      
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('dashboard/superadmin')?>" class="brand-link">
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
            <a href="<?= site_url('dashboard/superadmin')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('users/daftarsekolah')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar Sekolah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('users/verifikasi')?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Verifikasi
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
            <h1 class="m-0">Tambah Data Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Sekolah</li>
              <li class="breadcrumb-item active">Tambah Sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- general form elements -->
            <div class="card card-lightblue">
              <div class="card-header">
                <h3 class="card-title">Pendaftaran Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <?php // echo validation_errors() ?>
                <form action="" method="post">
                  <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                    <label>Nama Sekolah *</label>
                    <input type="text" class="form-control" name="fullname" value="<?=set_value('fullname')?>" placeholder="Masukkan Nama Sekolah">
                    <?=form_error('fullname')?>
                  </div>
                  <div class="form-group <?=form_error('alamatsekolah') ? 'has-error' : null?>">
                    <label>Alamat Sekolah *</label>
                    <input type="text" class="form-control" name="alamatsekolah" value="<?=set_value('alamatsekolah')?>" placeholder="Masukkan Alamat Sekolah">
                    <?=form_error('alamatsekolah')?>
                  </div>
                  <div class="form-group <?=form_error('statussekolah') ? 'has-error' : null?>">
                    <label>Status *</label>
                    <input type="text" class="form-control" name="statussekolah" value="<?=set_value('statussekolah')?>" placeholder="Masukkan status sekolah">
                    <?=form_error('statussekolah')?>
                  </div>
                  <div class="form-group <?=form_error('jumlahsiswa') ? 'has-error' : null?>">
                    <label>Jumlah Siswa *</label>
                    <input type="number" class="form-control" name="jumlahsiswa" value="<?=set_value('jumlahsiswa')?>" placeholder="Masukkan jumlah siswa">
                    <?=form_error('jumlah siswa')?>
                  </div>
                  <div class="form-group <?=form_error('kepalasekolah') ? 'has-error' : null?>">
                    <label>Kepala Sekolah *</label>
                    <input type="text" class="form-control" name="kepalasekolah" value="<?=set_value('kepalasekolah')?>" placeholder="Masukkan nama Kepala Sekolah">
                    <?=form_error('kepala sekolah')?>
                  </div>
                  <div class="form-group <?=form_error('Operator sekolah') ? 'has-error' : null?>">
                    <label>Operator Sekolah *</label>
                    <input type="text" class="form-control" name="operatorsekolah" value="<?=set_value('operatorsekolah')?>" placeholder="Masukkan nama operator sekolah">
                    <?=form_error('operatorsekolah')?>
                  </div>
                  <div class="form-group <?=form_error('kurikulum') ? 'has-error' : null?>">
                    <label>Kurikulum *</label>
                    <input type="text" class="form-control" name="kurikulum" value="<?=set_value('kurikulum')?>" placeholder="Masukkan jenis kurikulum">
                    <?=form_error('kurikulum')?>
                  </div>
                  <div class="form-group <?=form_error('statuskepemilikan') ? 'has-error' : null?>">
                    <label>Status Kepemilikan *</label>
                    <input type="text" class="form-control" name="statuskepemilikan" value="<?=set_value('statuskepemilikan')?>" placeholder="Masukkan status kepemilikan">
                    <?=form_error('statuskepemilikan')?>
                  </div>
                  <div class="form-group <?=form_error('skpendirian') ? 'has-error' : null?>">
                    <label>SK Pendirian *</label>
                    <input type="text" class="form-control" name="skpendirian" value="<?=set_value('skpendirian')?>" placeholder="Masukkan SK pendirian">
                    <?=form_error('skpendirian')?>
                  </div>
                  <div class="form-group <?=form_error('tglskpendirian') ? 'has-error' : null?>">
                    <label>Tanggal SK Pendirian *</label>
                    <input type="date" class="form-control" name="tglskpendirian" value="<?=set_value('tglskpendirian')?>" placeholder="Masukkan tanggal SK pendirian">
                    <?=form_error('tglskpendirian')?>
                  </div>
                  <div class="form-group <?=form_error('skoperasional') ? 'has-error' : null?>">
                    <label>SK izin Operasional *</label>
                    <input type="text" class="form-control" name="skoperasional" value="<?=set_value('skoperasional')?>" placeholder="Masukkan SK operasional">
                    <?=form_error('skoperasional')?>
                  </div>
                  <div class="form-group <?=form_error('tglskoperasional') ? 'has-error' : null?>">
                    <label>Tanggal SK izin Operasional *</label>
                    <input type="date" class="form-control" name="tglskoperasional" value="<?=set_value('tgloperasional')?>" placeholder="Masukkan tanggal operasional">
                    <?=form_error('tglskoperasional')?>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ajukan Pendaftaran</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                  </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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

</body>
</html>
