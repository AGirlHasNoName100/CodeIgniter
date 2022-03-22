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
  <title>MotherGoose Ke | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .jqstooltip {
      position: absolute;
      left: 0px;
      top: 0px;
      visibility: hidden;
      background: rgb(0, 0, 0) transparent;
      background-color: rgba(0, 0, 0, 0.6);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
      -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
      color: white;
      font: 10px arial, san serif;
      text-align: left;
      white-space: nowrap;
      padding: 5px;
      border: 1px solid white;
      box-sizing: content-box;
      z-index: 10000;
    }

    .jqsfield {
      color: white;
      font: 10px arial, san serif;
      text-align: left;
    }
  </style>
  <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script>
  <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=adminlte.io&amp;callback=_gfp_s_&amp;client=ca-pub-6272584992356792&amp;cookie=ID%3Df130aaa4169dd042%3AT%3D1585207084%3AS%3DALNI_MaBviT27nwE8gGqSi0R7PS1Xq3JnA&amp;crv=1"></script>
  <script src="https://pagead2.googlesyndication.com/pagead/js/r20200319/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script>
  <link rel="preload" href="https://adservice.google.co.ke/adsid/integrator.js?domain=adminlte.io" as="script">
  <script type="text/javascript" src="https://adservice.google.co.ke/adsid/integrator.js?domain=adminlte.io"></script>
  <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=adminlte.io" as="script">
  <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=adminlte.io"></script>
</head>

<body class="skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
  <div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MotherGoose Ke</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
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
                  <?php echo $username; ?>-Admin
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
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
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
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo  $username; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="<?php echo base_url(); ?>users/index">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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
              <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> MotherGoose Charts</a></li>
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
              <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Bookings</a></li>
              <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Tasks</a></li>
              <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>users/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/calendar">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li>
            <a href="pages/mailbox/mailbox.html">
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
              <li><a href="<?php echo base_url(); ?>users/admin"><i class="fa fa-circle-o"></i> Profile</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
<div class="content-wrapper" style="min-height: 901.2px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Employee Management
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Examples</a></li>
                    <li class="active">Employee Management</li>
                </ol>
            </section>
 <!-- Main content -->
 <div class="container">
   <div id="menu">

   </div>
   <div class="row justify-content-center">
     <h3>Edit User</h3>

     <?php foreach ($single_emp as $post) : ?>

       <?php //if(isset($_GET['edit'])){if(isset($_GET['id'])){  $id = $_GET['id'];  echo 'set';}}
        ?>
       <form method="post" action="<?php echo base_url(); ?>users/edit">
       <?php if(isset($_POST['edit'])){
         if(isset($_POST['id'])){ 
            $id = $_POST['id']; 
           // echo 'set'; ?>
       <div class="form-group">
           <label for="exampleInputEmail1">Employee ID</label>
           <input type="text" class="form-control" id="exampleInputEmail1" name="id" value="<?php echo $id; ?>">
         </div>
         <?php }}?>
         <div class="form-group">
           <label for="exampleInputEmail1">First Name</label>
           <input type="text" class="form-control" id="exampleInputEmail1" name="fname" value="<?php $post->FirstName; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Last Name</label>
           <input type="text" class="form-control" id="exampleInputEmail1" name="lname" value="<?php $post->LastName; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Date of Birth</label>
           <input type="date" class="form-control" id="exampleInputEmail1" name="dob" value="<?php $post->dateofbirth; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Email Address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php $post->email; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Home Address</label>
           <input type="text" class="form-control" id="exampleInputEmail1" name="address" value="<?php $post->Address; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Phone Number</label>
           <input type="text" class="form-control" id="phonenumber" name="phone" value="<?php $post->phone; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Position</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="position" value="<?php $post->position; ?>">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Role</label>
           <input type="text" class="form-control" id="exampleInputEmail1" name="role" value="<?php $post->role; ?>">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
     <?php endforeach; ?>
   </div>
 </div>
 <!-- /.row -->
 <!-- /.content -->
 <footer class="main-footer">
       <strong>Copyright © 2014-2019 <a href="https://adminlte.io">MotherGoose Ke</a>.</strong> All rights
      reserved.
    </footer>
  <!-- jQuery 3 -->
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
  <script src="<?php echo base_url(); ?>/assets/js/daterangepicker.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>/assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
  <script src="./ad.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.slimscroll.min.js"></script>

  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20200319/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-6272584992356792" style="display: none;"></iframe>

</html>