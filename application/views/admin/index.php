
 <?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$position = ($this->session->userdata['logged_in']['position']);
$likes = ($this->session->userdata['logged_in']['likes']);
$views = ($this->session->userdata['logged_in']['views']);
$bookings = ($this->session->userdata['logged_in']['bookings']);
$experience = ($this->session->userdata['logged_in']['experience']);
$qualifications = ($this->session->userdata['logged_in']['qualifications']);
$email = ($this->session->userdata['logged_in']['email']);
$image = ($this->session->userdata['logged_in']['image']);
$about = ($this->session->userdata['logged_in']['about']);
//$salary = ($this->session->userdata['logged_in']['amount']);
$phone = ($this->session->userdata['logged_in']['phone']);
} else {
header("location: login");
}
?>
<html style="height: auto; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MotherGoose Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/analytics.js">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mixins/glyphicons.less">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mixins/alerts.less">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- fullCalendar -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.print.min.css" media="print">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href=" http://ionicons.com/">
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%; cursor: auto;">
<div class="wrapper" style="height: auto; min-height: 100%;">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MOTHERGOOSE KE</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('uploads/' . $image); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('uploads/' . $image); ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo $username; ?> - <?php echo $position; ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/logout">Logout</a>
        </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('uploads/' . $image); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url(); ?>users/index">
            <i class="fa fa-dashboard"></i> <span>DashBoard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="charts/chartjs.html"><i class="fa fa-circle-o"></i> My Charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>My Activity</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forms/general.html"><i class="fa fa-circle-o"></i> Bookings</a></li>
            <li><a href="forms/advanced.html"><i class="fa fa-circle-o"></i> Tasks</a></li>
            <li><a href="forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="active">
          <a href="<?php echo base_url(); ?>users/calendar">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo base_url(); ?>users/data">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="menu">
            <li><a href="<?php echo base_url(); ?>users/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>My Mail</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>My Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
        <!-- Content Wrapper. Contains page content -->
       

      <?php if ($this->session->flashdata('employee_edited')) : ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('employee_edited') . ' </p>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('edit_failed')) : ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('edit_failed') . ' </p>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('employee_added')) : ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('employee_added') . ' </p>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('add_failed')) : ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('add_failed') . ' </p>'; ?>
      <?php endif; ?>
      
        <!-- /.content-wrapper -->
      
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="height: auto !important; min-height: 969.8px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content" style="height: auto !important; min-height: 0px !important;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>

                <p>Total Bookings</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom" style="cursor: move;">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right ui-sortable-handle">
                <li class="active"><a href="#revenue-chart" data-toggle="tab" aria-expanded="true">Area</a></li>
                <li class=""><a href="#sales-chart" data-toggle="tab" aria-expanded="false">Donut</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="704.8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.8px;">
                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="261.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                    </text>
                    <path fill="none" stroke="#aaaaaa" d="M61.71875,261.375H679.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="202.28125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan>
                    </text>
                    <path fill="none" stroke="#aaaaaa" d="M61.71875,202.28125H679.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="143.1875" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan>
                    </text>
                    <path fill="none" stroke="#aaaaaa" d="M61.71875,143.1875H679.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84.09375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan>
                    </text>
                    <path fill="none" stroke="#aaaaaa" d="M61.71875,84.09375H679.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan>
                    </text>
                    <path fill="none" stroke="#aaaaaa" d="M61.71875,25H679.8" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="566.3974863304982" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                    </text><text x="291.527817436209" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                      <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                    </text>
                    <path fill="#74a5c2" stroke="none" d="M61.71875,219.36328333333333C78.99198055893075,219.87542916666666,113.53844167679222,222.9374703125,130.81167223572297,221.41186666666667C148.08490279465371,219.88626302083333,182.63136391251518,209.42817083333333,199.90459447144593,207.15845416666667C216.99007252430135,204.91340833333334,251.16102863001214,205.1679796875,268.24650668286756,203.35281666666668C285.331984735723,201.53765364583336,319.50294084143377,195.18290659722226,336.5884188942892,192.63715000000002C353.8616494532199,190.0634180555556,388.4081105710814,182.76750885416666,405.68134113001213,182.8748625C422.9545716889429,182.98221614583335,457.50103280680435,204.4652861111111,474.7742633657351,193.49597916666667C491.85974141859054,182.64590381944444,526.0306975243013,102.06621622928179,543.1161755771568,95.59733333333335C560.0139011239369,89.19953706261512,593.809352217497,135.31303052884616,610.7070777642771,142.02926250000002C627.9803083232077,148.89474407051284,662.5267694410693,147.95045625,679.8,149.92418750000002L679.8,261.375L61.71875,261.375Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                    <path fill="none" stroke="#3c8dbc" d="M61.71875,219.36328333333333C78.99198055893075,219.87542916666666,113.53844167679222,222.9374703125,130.81167223572297,221.41186666666667C148.08490279465371,219.88626302083333,182.63136391251518,209.42817083333333,199.90459447144593,207.15845416666667C216.99007252430135,204.91340833333334,251.16102863001214,205.1679796875,268.24650668286756,203.35281666666668C285.331984735723,201.53765364583336,319.50294084143377,195.18290659722226,336.5884188942892,192.63715000000002C353.8616494532199,190.0634180555556,388.4081105710814,182.76750885416666,405.68134113001213,182.8748625C422.9545716889429,182.98221614583335,457.50103280680435,204.4652861111111,474.7742633657351,193.49597916666667C491.85974141859054,182.64590381944444,526.0306975243013,102.06621622928179,543.1161755771568,95.59733333333335C560.0139011239369,89.19953706261512,593.809352217497,135.31303052884616,610.7070777642771,142.02926250000002C627.9803083232077,148.89474407051284,662.5267694410693,147.95045625,679.8,149.92418750000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    <circle cx="61.71875" cy="219.36328333333333" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="130.81167223572297" cy="221.41186666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="199.90459447144593" cy="207.15845416666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="268.24650668286756" cy="203.35281666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="336.5884188942892" cy="192.63715000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="405.68134113001213" cy="182.8748625" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="474.7742633657351" cy="193.49597916666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="543.1161755771568" cy="95.59733333333335" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="610.7070777642771" cy="142.02926250000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="679.8" cy="149.92418750000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <path fill="#eaf3f6" stroke="none" d="M61.71875,240.36914166666668C78.99198055893075,240.148525,113.53844167679222,241.69875104166667,130.81167223572297,239.486675C148.08490279465371,237.2745989583333,182.63136391251518,223.65191805555554,199.90459447144593,222.67253333333332C216.99007252430135,221.70379409722221,251.16102863001214,233.56351145833332,268.24650668286756,231.69417916666666C285.331984735723,229.824846875,319.50294084143377,209.58188993055555,336.5884188942892,207.717875C353.8616494532199,205.8333763888889,388.4081105710814,214.74018229166668,405.68134113001213,216.700125C422.9545716889429,218.66006770833334,457.50103280680435,232.70899861111113,474.7742633657351,223.3974166666667C491.85974141859054,214.18704756944447,526.0306975243013,148.42262946017496,543.1161755771568,142.61232083333334C560.0139011239369,136.86586175184163,593.809352217497,170.70152835393773,610.7070777642771,177.17034583333333C627.9803083232077,183.78291481227106,662.5267694410693,190.49598645833333,679.8,194.93786666666665L679.8,261.375L61.71875,261.375Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                    <path fill="none" stroke="#a0d0e0" d="M61.71875,240.36914166666668C78.99198055893075,240.148525,113.53844167679222,241.69875104166667,130.81167223572297,239.486675C148.08490279465371,237.2745989583333,182.63136391251518,223.65191805555554,199.90459447144593,222.67253333333332C216.99007252430135,221.70379409722221,251.16102863001214,233.56351145833332,268.24650668286756,231.69417916666666C285.331984735723,229.824846875,319.50294084143377,209.58188993055555,336.5884188942892,207.717875C353.8616494532199,205.8333763888889,388.4081105710814,214.74018229166668,405.68134113001213,216.700125C422.9545716889429,218.66006770833334,457.50103280680435,232.70899861111113,474.7742633657351,223.3974166666667C491.85974141859054,214.18704756944447,526.0306975243013,148.42262946017496,543.1161755771568,142.61232083333334C560.0139011239369,136.86586175184163,593.809352217497,170.70152835393773,610.7070777642771,177.17034583333333C627.9803083232077,183.78291481227106,662.5267694410693,190.49598645833333,679.8,194.93786666666665" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    <circle cx="61.71875" cy="240.36914166666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="130.81167223572297" cy="239.486675" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="199.90459447144593" cy="222.67253333333332" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="268.24650668286756" cy="231.69417916666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="336.5884188942892" cy="207.717875" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="405.68134113001213" cy="216.700125" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="474.7742633657351" cy="223.3974166666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="543.1161755771568" cy="142.61232083333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="610.7070777642771" cy="177.17034583333333" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="679.8" cy="194.93786666666665" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  </svg>
                  <div class="morris-hover morris-default-style" style="left: 618.75px; top: 110px; display: none;">
                    <div class="morris-hover-row-label">2013 Q2</div>
                    <div class="morris-hover-point" style="color: #a0d0e0">
                      Item 1:
                      8,432
                    </div>
                    <div class="morris-hover-point" style="color: #3c8dbc">
                      Item 2:
                      5,713
                    </div>
                  </div>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="734.8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                    <path fill="none" stroke="#3c8dbc" d="M367.4,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,455.62775519497706,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                    <path fill="#3c8dbc" stroke="#ffffff" d="M367.4,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,458.46364732624414,181.4248826052307L495.0151459070204,194.03833029452744A135,135,0,0,1,367.4,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    <path fill="none" stroke="#f56954" d="M455.62775519497706,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,283.6848462783141,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                    <path fill="#f56954" stroke="#ffffff" d="M458.46364732624414,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,280.99400205154564,107.40757544301087L241.82726941747114,88.10097469226493A140,140,0,0,1,499.74163279246557,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    <path fill="none" stroke="#00a65a" d="M283.6848462783141,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,367.3706784690488,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                    <path fill="#00a65a" stroke="#ffffff" d="M280.99400205154564,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,367.3697359912682,246.3333285794739L367.35758849987417,284.9999933380171A135,135,0,0,1,246.3120097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="367.4" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1,0,0,1,0,0)">
                      <tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan>
                    </text><text x="367.4" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1,0,0,1,0,0)">
                      <tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan>
                    </text>
                  </svg></div>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->

            <!-- Chat box -->
            <div class="box box-success">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Chat</h3>

                <div class="box-tools pull-right" data-toggle="tooltip" title="" data-original-title="Status">
                  <div class="btn-group" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                  </div>
                </div>
              </div>
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                <div class="box-body chat" id="chat-box" style="overflow: hidden; width: auto; height: 250px;">
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                        Mike Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                    <div class="attachment">
                      <h4>Attachments:</h4>

                      <p class="filename">
                        Theme-thumbnail-image.jpg
                      </p>

                      <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                      </div>
                    </div>
                    <!-- /.attachment -->
                  </div>
                  <!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                        Alexander Pierce
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div>
                  <!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                        Susan Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div>
                  <!-- /.item -->
                </div>
                <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px;"></div>
                <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
              </div>
              <!-- /.chat -->
              <div class="box-footer">
                <div class="input-group">
                  <input class="form-control" placeholder="Type message...">

                  <div class="input-group-btn">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box (chat box) -->

            <!-- TO DO List -->
            <div class="box box-primary">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">To Do List</h3>

                <div class="box-tools pull-right">
                  <ul class="pagination pagination-sm inline">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list ui-sortable">
                  <li>
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <input type="checkbox" value="">
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="">
                    <span class="text">Make the theme responsive</span>
                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="">
                    <span class="text">Let theme shine like a star</span>
                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="">
                    <span class="text">Let theme shine like a star</span>
                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="">
                    <span class="text">Check your messages and notifications</span>
                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <input type="checkbox" value="">
                    <span class="text">Let theme shine like a star</span>
                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.box -->

            <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="#" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>
                  <div>
                    <ul class="wysihtml5-toolbar" style="">
                      <li class="dropdown">
                        <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">

                          <span class="glyphicon glyphicon-font"></span>

                          <span class="current-font">Normal text</span>
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
                          <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
                        </ul>
                      </li>
                      <li>
                        <div class="btn-group">
                          <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                          <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
                          <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>

                          <a class="btn  btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>

                        </div>
                      </li>
                      <li>
                        <a class="btn  btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">

                          <span class="glyphicon glyphicon-quote"></span>

                        </a>
                      </li>
                      <li>
                        <div class="btn-group">
                          <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-list"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-th-list"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-indent-right"></span>

                          </a>
                          <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">

                            <span class="glyphicon glyphicon-indent-left"></span>

                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Insert link</h3>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
                                  </label>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">

                          <span class="glyphicon glyphicon-share"></span>

                        </a>
                      </li>
                      <li>
                        <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Insert image</h3>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                                <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">

                          <span class="glyphicon glyphicon-picture"></span>

                        </a>
                      </li>
                    </ul><textarea class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Message"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: inline-block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(221, 221, 221); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 125px;"></iframe>
                  </div>
                </form>
              </div>
              <div class="box-footer clearfix">
                <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                  <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable ui-sortable">

            <!-- Map box -->
            
            <!-- solid sales graph -->
            <div class="box box-solid bg-teal-gradient">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-th"></i>

                <h3 class="box-title">Sales Graph</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="box-body border-radius-none">
                <div class="chart" id="line-chart" style="height: 250px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="684.8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.025px; top: -0.8px;">
                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="40.609375" y="213.78125" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                      <tspan dy="3.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,213.78125H659.8" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40.609375" y="166.5859375" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                      <tspan dy="3.1953125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,166.5859375H659.8" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40.609375" y="119.390625" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                      <tspan dy="3.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,119.390625H659.8" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40.609375" y="72.1953125" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                      <tspan dy="3.1953125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,72.1953125H659.8" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40.609375" y="25" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                      <tspan dy="3.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,25H659.8" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="548.4873822904009" y="226.28125" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,5.6094)">
                      <tspan dy="3.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                    </text><text x="278.68328903402187" y="226.28125" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,5.6094)">
                      <tspan dy="3.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                    </text>
                    <path fill="none" stroke="#efefef" d="M53.109375,188.616709375C70.06427703523693,188.352415625,103.97408110571081,190.209551171875,120.92898314094774,187.559534375C137.88388517618466,184.909517578125,171.79368924665854,168.58985562670765,188.74859128189547,167.416575C205.51920090370592,166.25604742358263,239.06042014732682,180.463719140625,255.83102976913727,178.2243015625C272.60163939094775,175.984883984375,306.1428586345686,151.73428187542694,322.9134682563791,149.50123437500002C339.868370291616,147.24364789105195,373.7781743620899,157.913798828125,390.7330763973268,160.261765625C407.68797843256374,162.609732421875,441.5977825030376,179.44003218066942,458.55268453827455,168.28496875000002C475.32329416008497,157.25115600879442,508.8645134037059,78.4668785501554,525.6351230255164,71.5062609375C542.2214402339002,64.6221336282804,575.3940746506682,105.15649281850962,591.9803918590521,112.9059890625C608.9352938942891,120.82769633413463,642.845097964763,128.869803515625,659.8,134.191075" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    <circle cx="53.109375" cy="188.616709375" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="120.92898314094774" cy="187.559534375" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="188.74859128189547" cy="167.416575" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="255.83102976913727" cy="178.2243015625" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="322.9134682563791" cy="149.50123437500002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="390.7330763973268" cy="160.261765625" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="458.55268453827455" cy="168.28496875000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="525.6351230255164" cy="71.5062609375" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="591.9803918590521" cy="112.9059890625" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                    <circle cx="659.8" cy="134.191075" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  </svg>
                  <div class="morris-hover morris-default-style" style="left: 325.341px; top: 4px; display: none;">
                    <div class="morris-hover-row-label">2012 Q4</div>
                    <div class="morris-hover-point" style="color: #efefef">
                      Item 1:
                      15,073
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer no-border">
                <div class="row">
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                    <div class="knob-label">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                    <div class="knob-label">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-xs-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                    <div class="knob-label">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-calendar"></i>

                <h3 class="box-title">Calendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="#">Add new event</a></li>
                      <li><a href="#">Clear events</a></li>
                      <li class="divider"></li>
                      <li><a href="#">View calendar</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%">
                  <div class="datepicker datepicker-inline">
                    <div class="datepicker-days" style="">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                          </tr>
                          <tr>
                            <th class="prev">«</th>
                            <th colspan="5" class="datepicker-switch">March 2020</th>
                            <th class="next">»</th>
                          </tr>
                          <tr>
                            <th class="dow">Su</th>
                            <th class="dow">Mo</th>
                            <th class="dow">Tu</th>
                            <th class="dow">We</th>
                            <th class="dow">Th</th>
                            <th class="dow">Fr</th>
                            <th class="dow">Sa</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="old day" data-date="1582416000000">23</td>
                            <td class="old day" data-date="1582502400000">24</td>
                            <td class="old day" data-date="1582588800000">25</td>
                            <td class="old day" data-date="1582675200000">26</td>
                            <td class="old day" data-date="1582761600000">27</td>
                            <td class="old day" data-date="1582848000000">28</td>
                            <td class="old day" data-date="1582934400000">29</td>
                          </tr>
                          <tr>
                            <td class="day" data-date="1583020800000">1</td>
                            <td class="day" data-date="1583107200000">2</td>
                            <td class="day" data-date="1583193600000">3</td>
                            <td class="day" data-date="1583280000000">4</td>
                            <td class="day" data-date="1583366400000">5</td>
                            <td class="day" data-date="1583452800000">6</td>
                            <td class="day" data-date="1583539200000">7</td>
                          </tr>
                          <tr>
                            <td class="day" data-date="1583625600000">8</td>
                            <td class="day" data-date="1583712000000">9</td>
                            <td class="day" data-date="1583798400000">10</td>
                            <td class="day" data-date="1583884800000">11</td>
                            <td class="day" data-date="1583971200000">12</td>
                            <td class="day" data-date="1584057600000">13</td>
                            <td class="day" data-date="1584144000000">14</td>
                          </tr>
                          <tr>
                            <td class="day" data-date="1584230400000">15</td>
                            <td class="day" data-date="1584316800000">16</td>
                            <td class="day" data-date="1584403200000">17</td>
                            <td class="day" data-date="1584489600000">18</td>
                            <td class="day" data-date="1584576000000">19</td>
                            <td class="day" data-date="1584662400000">20</td>
                            <td class="day" data-date="1584748800000">21</td>
                          </tr>
                          <tr>
                            <td class="day" data-date="1584835200000">22</td>
                            <td class="day" data-date="1584921600000">23</td>
                            <td class="day" data-date="1585008000000">24</td>
                            <td class="day" data-date="1585094400000">25</td>
                            <td class="day" data-date="1585180800000">26</td>
                            <td class="day" data-date="1585267200000">27</td>
                            <td class="day" data-date="1585353600000">28</td>
                          </tr>
                          <tr>
                            <td class="day" data-date="1585440000000">29</td>
                            <td class="day" data-date="1585526400000">30</td>
                            <td class="day" data-date="1585612800000">31</td>
                            <td class="new day" data-date="1585699200000">1</td>
                            <td class="new day" data-date="1585785600000">2</td>
                            <td class="new day" data-date="1585872000000">3</td>
                            <td class="new day" data-date="1585958400000">4</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="7" class="today" style="display: none;">Today</th>
                          </tr>
                          <tr>
                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="datepicker-months" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                          </tr>
                          <tr>
                            <th class="prev">«</th>
                            <th colspan="5" class="datepicker-switch">2020</th>
                            <th class="next">»</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month focused">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="7" class="today" style="display: none;">Today</th>
                          </tr>
                          <tr>
                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="datepicker-years" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                          </tr>
                          <tr>
                            <th class="prev">«</th>
                            <th colspan="5" class="datepicker-switch">2020-2029</th>
                            <th class="next">»</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span class="year old">2019</span><span class="year focused">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="7" class="today" style="display: none;">Today</th>
                          </tr>
                          <tr>
                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="datepicker-decades" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                          </tr>
                          <tr>
                            <th class="prev">«</th>
                            <th colspan="5" class="datepicker-switch">2000-2090</th>
                            <th class="next">»</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="7" class="today" style="display: none;">Today</th>
                          </tr>
                          <tr>
                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="datepicker-centuries" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                          </tr>
                          <tr>
                            <th class="prev">«</th>
                            <th colspan="5" class="datepicker-switch">2000-2900</th>
                            <th class="next">»</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="7" class="today" style="display: none;">Today</th>
                          </tr>
                          <tr>
                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-black">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Progress bars -->
                    <div class="clearfix">
                      <span class="pull-left">Task #1</span>
                      <small class="pull-right">90%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                    </div>

                    <div class="clearfix">
                      <span class="pull-left">Task #2</span>
                      <small class="pull-right">70%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="clearfix">
                      <span class="pull-left">Task #3</span>
                      <small class="pull-right">60%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                    </div>

                    <div class="clearfix">
                      <span class="pull-left">Task #4</span>
                      <small class="pull-right">40%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.box -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

        <div>
          <div class="row docs-premium-template">           
            
        <div style="padding-bottom: 15px; max-width: 100%; overflow: hidden; height: auto !important;">
          <script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-6272584992356792" data-ad-slot="5657143564" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:1200px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:1200px;background-color:transparent;"><iframe width="1200" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 1200px; height: 280px; overflow: visible;"></iframe></ins></ins></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.13
            </div>
            <strong>Copyright © 2014-2019 <a href="https://adminlte.io">MotherGoose Ke</a>.</strong> All rights
            reserved.
        </footer>
      
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <script>
        jQuery(document).ready(function($) {
            $cf = $('#phonenumber');
            $cf.blur(function(e) {
                phone = $(this).val();
                phone = phone.replace(/[^0-9]/g, '');
                if (phone.length != 10) {
                    alert('Phone number must be 10 digits.');
                    $('#phonenumber').val('');
                    $('#phonenumber').focus();
                }
            });
        });
    </script>
    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>/assets/js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="bower_components/raphael/raphael.min.js"></script>
  <script src="bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>/assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
  <script src="./ad.js"></script>
  <!-- fullCalendar -->
<script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>


</body>

</html>
    