<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Admin | Dashboard</title>

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

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url() ?>assets/dist/img/sl_round.png" alt="AdminLTELogo" height="300" width="300">
  </div>

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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->

        <!-- GRAFIK -->

        <!-- Main row -->
        <div class="row">
          <div class="col-md-8">
            <!-- AREA CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">List Admin Sekolah</h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    <a href="<?= site_url('users/tambahadmin')?>"><input type="button" class="btn btn-block btn-default btn-sm" value="Tambah Admin"></a>
                    </li>
                  </ul>
                </div>
                
            </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered">
                        <tr>
                        <th style="width: 10px">No</th>
                        <th style=>NUPTK</th>
                        <th style=>Nama</th>
                        <th style=>Username</th>
                        <th style=>Status Pegawai</th>
                        <th style=>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                        foreach ($superadmin as $su) { ?>
                        <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$su['nuptk']?></td>
                        <td><?=$su['nama']?></td>
                        <td><?=$su['username']?></td>
                        <td><?= $retVal = ($su['id_status']) == 1 ? "GTY" :
                                $retVal = ($su['id_status']) == 2 ? "PTY" : 
                                $retVal = ($su['id_status']) == 3 ? "PTTY" : "GTTY"; ?></td>
                        <td class="text-center"> 
                          <form action="<?=site_url('users/del_admin')?>" method="POST">
                          <button class="btn btn-primary btn-sm"><i class="fa fa-pen"></i> Update
                          </button>  
                          <input type="hidden" name="id_identitas" value="<?=$su['id_identitas']?>">
                          <button onclick="return confirm ('Apakah Anda yakin?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus
                          </button>
                      </form>
                    </td>
                  </tr>
                  <?php  
                  }  
                  ?>
                    </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
                </div>
            <!-- /.card -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">List User</h3>

                
            </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>NUPTK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Status Pegawai</th>
                            <th>Aksi</th>
                      </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($usergtk as $u) { ?>
                        <tr>
                          <td><?=$no++?>.</td>
                          <td><?=$u['nuptk']?></td>
                          <td><?=$u['nama']?></td>
                          <td><?=$u['username']?></td>
                          <td><?= $retVal = ($u['id_status']) == 1 ? "GTY" :
                                  $retVal = ($u['id_status']) == 2 ? "PTY" : 
                                  $retVal = ($u['id_status']) == 3 ? "PTTY" : "GTTY"; ?></td>
                          <td class="text-center"> 
                            <form action="<?=site_url('users/del_useradm')?>" method="POST">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pen"></i> Update
                            </button>  
                            <input type="hidden" name="id_identitas" value="<?=$u['id_identitas']?>">
                            <button onclick="return confirm ('Apakah Anda yakin?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus
                            </button>
                            </form>
                          </td>
                        </tr>
                        <?php  
                        }  
                        ?>   
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
                </div>
            </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-4">
            

            <!-- DONUT CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Statistik Pengguna</h3>

              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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



<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */


    

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Admin Sekolah',
          'User',
      ],
      datasets: [
        {
          data: [300,700],
          backgroundColor : ['#f56954', '#00a65a'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>


</body>
</html>
