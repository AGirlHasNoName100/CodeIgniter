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
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <link rel="stylesheet" href=" http://ionicons.com/">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script>
  <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=adminlte.io&amp;callback=_gfp_s_&amp;client=ca-pub-6272584992356792&amp;cookie=ID%3Df130aaa4169dd042%3AT%3D1585207084%3AS%3DALNI_MaBviT27nwE8gGqSi0R7PS1Xq3JnA&amp;crv=1"></script>
  <script src="https://pagead2.googlesyndication.com/pagead/js/r20200319/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script>
  <link rel="preload" href="https://adservice.google.co.ke/adsid/integrator.js?domain=adminlte.io" as="script">
  <script type="text/javascript" src="https://adservice.google.co.ke/adsid/integrator.js?domain=adminlte.io"></script>
  <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=adminlte.io" as="script">
  <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=adminlte.io"></script>
<style>
  body{
    background-image:url('../images/paint.png');
    background-size:cover;
    
  }
  div{
    opacity:1.0;
  }
</style>
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
          <span class="sr-only"><i class="fa fa-reoder"></i>Toggle navigation</span>
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
            <p><?php echo $username; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?php echo base_url(); ?>users/index">
              <i class="fa fa-tachometer"></i> <span>DashBoard</span>
            </a>
          </li>
          <li class="header">User Management</li>
          <li>
            <a href="<?php echo base_url(); ?>users/management">
              <i class="fa fa-users"></i> <span>User Management</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/data/<?php echo $code;?>">
              <i class="fa fa-table"></i> <span>DataTables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <!-- <li>
            <a href="<?php echo base_url(); ?>users/visitor">
              <i class="fa fa-gears"></i> <span>Audience Overview</span>
            </a>
          </li> -->
           <li>
            <a href="<?php echo base_url(); ?>users/chart">
              <i class="fa fa-signal"></i>
              <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <li class="header">Personal</li>
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
    <!-- Content Wrapper. Contains page content -->

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
                <h3> <?php foreach ($books as $book) :
                        echo   $book->count;
                      endforeach; ?>
                </h3>
                <p>Total Bookings</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3> <?php foreach ($users as $user) :
                        echo   $user->count;
                      endforeach; ?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <h3>MotherGoose Revenue Charts</h3>
          <iframe src="<?php echo base_url(); ?>users/chart" class="col-md-4" style="height: 600px;"></iframe>
          <div class="col-md-6">
            <h3 class="box-title">MotherGoose Bookings Table</h3>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-12">
                  <a href="<?php echo base_url(); ?>users/data/#bookings" class="btn btn-primary">View More</a>
                  <table id="data" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Start Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">End Date</th>
                     
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
                        </tr>
                      <?php $count++;
                      endforeach;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="box-title">MotherGoose Invoices Table</h3>
            <div class="col-sm-12">
              <a href="<?php echo base_url(); ?>users/data/#invoices" class="btn btn-primary">View More</a>
              <table id="datatable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">S.NO</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Customer Code</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Full Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">National ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Email</th>


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
                    </tr>
                  <?php $count++;
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
                                 
           
          
          </div>
        </div>
      </section>
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
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="<?php echo base_url(); ?>/assets/js/daterangepicker.js"></script>

        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>/assets/js/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
        <script src="./ad.js"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>

        <script>
      $(document).ready(function() {
        $('#data').after('<div id="nav"></div>');
        var rowsShown = 5;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal / rowsShown;
        for (i = 0; i < numPages; i++) {
          var pageNum = i + 1;
        //  $('#nav').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
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
  
</body>

</html>