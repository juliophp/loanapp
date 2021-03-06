<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/skin-green.min.css')); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/morris.js/morris.css')); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/jvectormap/jquery-jvectormap.css')); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(route('home')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>FS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo e(config('app.name', 'Laravel')); ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->universityname); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo e(Auth::user()->universityname); ?>

                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo e(route('uni.show', Auth::user()->id)); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                  <form id="logout-form" action="<?php echo e(route('uni.logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo e(Request::is('university') ? 'active' : ''); ?>">
          <a href="<?php echo e(route('uni.index')); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="<?php echo e(Request::is('university/students') ? 'active' : ''); ?>">
          <a href="<?php echo e(route('uni.students.index')); ?>">
            <i class="fa fa-files-o"></i>
            <span>Review Profile</span>
          </a>
        </li>

        <li class="<?php echo e(Request::is('university/students/reviewed') ? 'active' : ''); ?>">
          <a href="<?php echo e(route('uni.students.reviewed')); ?>">
            <i class="fa fa-file-o"></i>
            <span>Reviewed Profiles</span>
          </a>
        </li>

        <li class="<?php echo e(Request::is('university/university/*') ? 'active' : ''); ?>">
          <a href="<?php echo e(route('uni.show', Auth::user()->id)); ?>">
            <i class="fa fa-user"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
