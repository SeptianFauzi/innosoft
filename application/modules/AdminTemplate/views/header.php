<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
<!--Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css">

  <!-- Vallideta -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vallideta/css/validetta.css">
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/css/sweetalert2.min.css">
  <!-- jQuery 2.2.3 -->

  <!-- ./wrapper -->
  <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

  <!-- date-range-picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <!-- Validetta js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/vallideta/js/validetta.js"></script>
  <!-- sweetalert2 js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/sweetalert/js/sweetalert2.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo bg-blue" style="border-right:1px solid #282828">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini bg-blue"><b>R</b>PL</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg bg-blue"><b>Innosoft</b> Web</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top bg-blue">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu bg-blue">
          <ul class="nav navbar-nav bg-blue">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="user user-menu">
              <a href="javascript:" onclick="logout()" class="nav-link">
                <i class="fa fa-sign-out"></i>Keluar
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <small><?php echo date('Y') ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <<ul class="sidebar-menu">
        <li class="header">MENU DASHBOARD</li>
        <li>
        <a href="<?php echo base_url() ?>home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#" id="manajemendata">
            <i class="fa fa-table"></i> <span>Manajemen Data</span>
            <span class="pull-right-container">
              <i id="angleleft" class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-circle-o"></i> Data Admin</a></li>
            <li><a href="<?php echo base_url(); ?>user"><i class="fa fa-circle-o"></i> Data User</a></li>
            <li><a href="<?php echo base_url(); ?>pinjam"><i class="fa fa-circle-o"></i> Data Pinjam</a></li>
          </ul>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-tasks"></i> <span>Event</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>Adminevent"><i class="fa fa-circle-o"></i> Manajemen Event</a></li>
              <li><a href="<?php echo base_url(); ?>manajemen_event_materi"><i class="fa fa-circle-o"></i> Manajemen Event Materi</a></li>
              <li><a href="<?php echo base_url(); ?>pemateri"><i class="fa fa-circle-o"></i> Manajemen Pemateri</a></li>
              <li><a href="<?php echo base_url(); ?>Katagori"><i class="fa fa-circle-o"></i> Manajemen Katagori</a></li>
              <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Manajamen Sertifikat</a></li>
            </li>
            </ul>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i> <span> Artikel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>artikel_rpl"><i class="fa fa-circle-o"></i> Berita RPL</a></li>
                <li><a href="<?php echo base_url(); ?>artikel_ti"><i class="fa fa-circle-o"></i> Berita TI</a></li>
                <li><a href="<?php echo base_url(); ?>artikel_uika"><i class="fa fa-circle-o"></i> Berita UIKA</a></li>
                <li><a href="<?php echo base_url(); ?>artikel_event"><i class="fa fa-circle-o"></i> Berita Event</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-info"></i> <span>Lab Innosoft</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
                <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Fasilitas</a></li>
                <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Mata Kuliah</a></li>
                <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Manajemen Sertifikat</a></li>
              </ul>
            </li>
          <li><a href="<?php echo base_url(); ?>link"><i class="fa fa-link"></i>Kerjasama</a></li>
          <li><a href="<?php echo base_url(); ?>kontak"><i class="fa fa-inbox"></i>Kontak</a></li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i> <span>Bantuan</span>
            </a>
          </li>
        </li>
      </ul>
    </li>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
<script type="text/javascript">
  function logout(){
    swal({
      title : 'Yakin Mau Keluar',
      text : 'Silahkan Tekan Keluar',
      type : 'question',
      showCancelButton : true,
      cancelButtonText : 'tidak',
      confirmButtonText : '<i class="fa fa-sign-out"></i>Keluar'
    }).then(function(){
          window.location.href="<?php base_url(); ?>Adminlogin/logout"
    });
  }
  $('#manajemendata').click(function(event) {
    $('#angleleft').removeClass('fa-angle-left').addClass('fa-angle-down');
  });
</script>
