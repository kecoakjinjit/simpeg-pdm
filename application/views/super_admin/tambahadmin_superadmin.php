<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Admin | Tambah Admin</title>

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
            <h1 class="m-0">Tambah Admin Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Tambah Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- general form elements -->
            <div class="card card-lightblue">
              <div class="card-header">
                <h3 class="card-title">Pendaftaran Admin Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <?php // echo validation_errors() ?>
                <form action="" method="post">
                  <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                    <label>Nama *</label>
                    <input type="text" class="form-control" name="fullname" value="<?=set_value('fullname')?>" placeholder="Masukkan Nama">
                    <?=form_error('fullname')?>
                  </div>
                  <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                    <label>Email *</label>
                    <input type="email" class="form-control" name="email" value="<?=set_value('email')?>" placeholder="Masukkan Email">
                    <?=form_error('email')?>
                  </div>
                  <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                    <label>Username *</label>
                    <input type="text" class="form-control" name="username" value="<?=set_value('username')?>" placeholder="Masukkan Username">
                    <?=form_error('username')?>
                  </div>
                  <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                    <label>Kata Sandi *</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    <?=form_error('password')?>
                  </div>
                  <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                    <label>Konfirmasi Kata Sandi *</label>
                    <input type="password" class="form-control" name="passconf" placeholder="Masukkan Password Kembali">
                    <?=form_error('passconf')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>NUPTK *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Jenis Kelamin *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('tempatlahir') ? 'has-error' : null?>">
                    <label>Tempat lahir *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Tanggal Lahir *</label>
                    <input type="date" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>NIP *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Status Pegawai *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Jenis PTK *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Agama *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Alamat *</label>
                    <textarea class="form-control" rows="3" id="textarea" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK"></textarea>
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>RT *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>RW *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Dusun *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Desa *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Kecamatan *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Kode POS *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>No Telp *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>No Handphone *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Tugas Tambahan *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>SK CPNS *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Tanggal SK CPNS *</label>
                    <input type="date" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>SK Pangkat *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Tanggal Mulai Tugas (TMT) pangkat golongan *</label>
                    <input type="date" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Lembaga *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Pangkat *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Sumber gaji *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nama Ibu *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Status Kawin *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nama Suami/Istri *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Pekerjaan Suami/Istri *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Tanggal Mulai Tugas (TMT) PNS *</label>
                    <input type="date" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Lisensi Kepala Sekolah *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Diklat Pegawai *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Keahlian Braille *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Bahasa Isyarat *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>NPWP *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nama Pajak *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                    <label>Warga Negara *</label>
                    <select class="form-control" name="jeniskelamin" id="category" required>
                        <option value="">No Selected</option>
                    </select>
                    <?=form_error('jeniskelamin')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nama Bank *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>No Rekening Bank *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nama Rekening *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>NIK *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nomor KK *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Karis Karsu *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Lintang *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Bujur *</label>
                    <input type="number" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
                  </div>
                  <div class="form-group <?=form_error('nuptk') ? 'has-error' : null?>">
                    <label>Nuks *</label>
                    <input type="text" class="form-control" name="nuptk" value="<?=set_value('nuptk')?>" placeholder="Masukkan NUPTK">
                    <?=form_error('nuptk')?>
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
