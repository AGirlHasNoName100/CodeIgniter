<?php
if (isset($this->session->userdata['logged_in'])) {
  $code = ($this->session->userdata['logged_in']['employeecode']);
  $username = ($this->session->userdata['logged_in']['username']);
  $position = ($this->session->userdata['logged_in']['position']);
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>
  <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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

    #data tr {
      display: none;
    }
    span
{
    font-weight:bold;
}

.san{
    height: 26px;
    width: 250px;
    border: 1px solid #9E9E9E;
    padding: 5px;
    border-radius: 5px;
    margin: 10px;

}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><i class="fa fa-bars"></i>

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
                      <p style="text-align: center;"> <?php echo $likes; ?></p>
                      <a href="#">Likes</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <p style="text-align: center;"> <?php echo $views; ?></p>
                      <a href="#">Views</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <p style="text-align: center;"> <?php echo $bookings; ?></p>
                      <a href="#">Bookings</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
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
            <img src="<?php echo base_url('uploads/' . $image); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo  $username; ?></p>
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
          <li class="header">User Management</li>
          <li>
            <a href="<?php echo base_url(); ?>users/management">
              <i class="fa fa-users"></i> <span>User Management</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/data">
              <i class="fa fa-table"></i> <span>DataTables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <!-- <li>
            <a href="<?php echo base_url(); ?>users/visitor">
              <i class="fa fa-envelope"></i> <span>Audience Overview</span>
            </a>
          </li> -->
          <li class="header">Personal</li>
          <li>
            <a href="<?php echo base_url(); ?>users/chart">
              <i class="fa fa-signal"></i>
              <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/calendar2">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/admin/<?php echo $code;?>">
              <i class="fa fa-user"></i> <span>Profile</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper" style="height: auto !important; min-height: 969.8px;">
      <section class="content" style="height: auto !important; min-height: 0px !important;">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">MotherGoose Data Tables</h3>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <h3 class="box-title">MotherGoose Employee Details Tables</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Add New Employee
            </button>
            <br>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content col-md-10" style="height: 800px; text-align: left; margin-bottom: 10px;">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Details Below</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body justify-content-center">
                    <?php echo form_open('users/add') ?>
                    <div class="row col-md-10">
                      <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" class="form-control" name="id" placeholder="Employee ID" required>
                      </div>
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" max="2002-12-31" name="dob" required>
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" onblur="checkEmail(this.value)" placeholder="Email Address" required>
                      </div>
                      <div class="form-group">
                        <label>Home Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Home Address" required>
                      </div>
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="txtPhone" name="phone" placeholder="Phone Number" required>
                        <span id="spnPhoneStatus"></span>
                      </div>
                      <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Position" required>
                      </div>
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" name="role" placeholder="Role" required>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              </div>
              <div class="row" id="row">
                <div class="col-sm-12">
                  <table id="data" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">First Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Last Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">Home Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 134.8px;">Phone Number</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Email Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Age</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Position</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Edit</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                      foreach ($result as $post) { ?>
                        <tr>
                          <td align="center"><?php echo $count; ?></td>
                          <td align="center"><?php echo $post->employeecode; ?></td>
                          <td align="center"><?php echo $post->FirstName; ?></td>
                          <td align="center"><?php echo $post->LastName; ?></td>
                          <td align="center"><?php echo $post->Address; ?></td>
                          <td align="center"><?php echo $post->phone; ?></td>
                          <td align="center"><?php echo $post->email; ?></td>
                          <td align="center"><?php echo $post->dateofbirth; ?></td>
                          <td align="center"><?php echo $post->position; ?></td>
                          <td align="center">
                            <a class="btn btn-primary" href="<?php echo site_url('users/edit'); ?>/<?php echo $post->employeecode; ?>">Edit</a> </td>
                          <td> <a  class="delete" data-confirm="Are you sure to delete this item?" href="<?php echo site_url('users/delete'); ?>/<?php echo $post->employeecode; ?>">Delete</a>
                          </td>
                        </tr>
                      <?php $count++;
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">First Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Last Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">Home Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 134.8px;">Phone Number</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Email Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Age</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Position</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Edit</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>

            <h3 class="box-title" id='bookings'>MotherGoose Bookings Table</h3>
            <div id="nav" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-12">
                  <table id="datatable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Start Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">End Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Status</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                      foreach ($viewers as $view) : ?>
                        <tr>
                          <td align="center"> <?php echo $count; ?> </td>
                          <td align="center"> <?php echo $view->full_name; ?></td>
                          <td align="center"> <?php echo $view->employeeid_fk; ?></td>
                          <td align="center"> <?php echo $view->startdate; ?></td>
                          <td align="center"> <?php echo $view->enddate; ?></td>

                          <?php //foreach ($progress as $post) : ?>
                          <?php
                            $start = $view->startdate;;
                            $end = $view->enddate;;
                            $start = strtotime($start);
                            $end = strtotime($end);
                            if (!$end || !$start) {
                              throw new Exception('Invalid dates.');
                            } else if ($start > $end) {
                              throw new Exception('Start date is larger than end date.');
                            }
                            $diff = $end - $start;
                            $current = time();
                            $cdiff = $current - $start;
                            if ($cdiff > $diff) {
                              $percentage = 1.0;
                            } else if ($current < $start) {
                              $percentage = 0.0;
                            } else {
                              $percentage = $cdiff / $diff;
                            }
                         // endforeach;
                          ?>
                          <td align="center" ><?php
                                              if ($percentage == 0) {
                                                echo ' <label class="btn btn-danger">Pending</label>';
                                              } else if ($percentage > 0 && $percentage < 1) {
                                                echo ' <label class="btn btn-warning">In Progress</label>';
                                              } else  if ($percentage == 1) {
                                                echo ' <label class="btn btn-success">Complete</label>';
                                              }
                                              ?>
                                              </td>
                        </tr>
                      <?php $count++;
                      endforeach;
                      ?>
                    </tbody>
                    <tfoot>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Start Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">End Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Status</th>
                       
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              
            </div>
            <h3 class="box-title">MotherGoose Invoices Table</h3>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-12">
                  <table id="invoices" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Code</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Full Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">National ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Start Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">End Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                      foreach ($invoices as $invoice) : ?>
                        <tr>
                          <td align="center"> <?php echo $count; ?> </td>
                          <td align="center"> <?php echo $invoice->customercode; ?></td>
                          <td align="center"> <?php echo $invoice->full_name; ?></td>
                          <td align="center"> <?php echo $invoice->National_ID; ?></td>
                          <td align="center"> <?php echo $invoice->email; ?></td>
                          <td align="center"> <?php echo $invoice->address; ?></td>
                          <td align="center"> <?php echo $invoice->phone; ?></td>
                          <td align="center"> <?php echo $invoice->startdate; ?></td>
                          <td align="center"> <?php echo $invoice->enddate; ?></td>

                          <?php // echo $view->name; 
                          ?>
                          <td align="center">
                            <a href="<?php echo site_url('users/invoice'); ?>/<?php echo $invoice->customercode; ?>" class="btn btn-primary">View Invoice</a>
                          </td>
                        </tr>
                      <?php $count++;
                      endforeach;
                      ?>
                    </tbody>
                    <tfoot>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Code</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Full Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">National ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Start Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">End Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">View</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="row">
             
            </div>
          </div>

          <!-- /.box-body -->
        </div>
      </section>
    </div>
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
  var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $('#txtPhone').blur(function(e) {
        if (validatePhone('txtPhone')) {
            $('#spnPhoneStatus').html('Valid Mobil Number');
            $('#spnPhoneStatus').css('color', 'green');
        }
        else {
            $('#spnPhoneStatus').html('Invalid Mobile Number');
            $('#spnPhoneStatus').css('color', 'red');
        }
    });
});

function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /[1-9]{1}[0-9]{9}/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}
});//]]> 

</script>
    <script>
      $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging': true,
          'lengthChange': false,
          'searching': false,
          'ordering': true,
          'info': true,
          'autoWidth': false
        })
      })
    </script>
    <script>
      $(document).ready(function() {
        $('#data').after('<div id="nav"></div>');
        var rowsShown = 5;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal / rowsShown;
        for (i = 0; i < numPages; i++) {
          var pageNum = i + 1;
          $('#nav').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
        }
        $('#data tbody tr').hide();
        $('#data tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');
        $('#nav a').bind('click', function() {

          $('#nav a').removeClass('active');
          $(this).addClass('active');
          var currPage = $(this).attr('rel');
          var startItem = currPage * rowsShown;
          var endItem = startItem + rowsShown;
          $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
          css('display', 'table-row').animate({
            opacity: 1
          }, 300);
        });
      });
    </script>
     <script>
      $(document).ready(function() {
        $('#datatable').after('<div id="row"></div>');
        var rowsShown = 5;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal / rowsShown;
        for (i = 0; i < numPages; i++) {
          var pageNum = i + 1;
          $('#row').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
        }
        $('#data tbody tr').hide();
        $('#data tbody tr').slice(0, rowsShown).show();
        $('#row a:first').addClass('active');
        $('#row a').bind('click', function() {

          $('#row a').removeClass('active');
          $(this).addClass('active');
          var currPage = $(this).attr('rel');
          var startItem = currPage * rowsShown;
          var endItem = startItem + rowsShown;
          $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
          css('display', 'table-row').animate({
            opacity: 1
          }, 300);
        });
      });
    </script>
<script type="text/javascript">
  function checkEmail(str) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(str))
      alert("Please enter a valid email address");
  }</script>
</body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20200319/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-6272584992356792" style="display: none;"></iframe>

</html>