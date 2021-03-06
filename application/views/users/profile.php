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
  <title>My Account | Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
  <!-- owlcarousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/_all-skins.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>
  <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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
  <style>
    /* carousel */
    #quote-carousel {
      padding: 0 10px 30px 10px;
      margin-top: 30px;
    }

    /* Control buttons  */
    #quote-carousel .carousel-control {
      background: none;
      color: #222;
      font-size: 2.3em;
      text-shadow: none;
      margin-top: 30px;
    }

    /* Previous button  */
    #quote-carousel .carousel-control.left {
      left: -12px;
    }

    /* Next button  */
    #quote-carousel .carousel-control.right {
      right: -12px !important;
    }

    /* Changes the position of the indicators */
    #quote-carousel .carousel-indicators {
      right: 50%;
      top: auto;
      bottom: 0px;
      margin-right: -19px;
    }

    /* Changes the color of the indicators */
    #quote-carousel .carousel-indicators li {
      background: #c0c0c0;
    }

    #quote-carousel .carousel-indicators .active {
      background: #333333;
    }

    #quote-carousel img {
      width: 250px;
      height: 100px
    }

    /* End carousel */

    .item blockquote {
      border-left: none;
      margin: 0;
    }

    .item blockquote img {
      margin-bottom: 10px;
    }

    .item blockquote p:before {
      content: "\f10d";
      font-family: 'Fontawesome';
      float: left;
      margin-right: 10px;
    }



    /**
  MEDIA QUERIES
*/

    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
      #quote-carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
      }

    }

    /* Small devices (tablets, up to 768px) */
    @media (max-width: 768px) {

      /* Make the indicators larger for easier clicking with fingers/thumb on mobile */

      #quote-carousel .carousel-indicators {
        bottom: -20px !important;
      }

      #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
      }

      #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
      }
    }
  </style>
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%; cursor: auto;">
  <div class="wrapper" style="height: auto; min-height: 100%;">
    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
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
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('uploads/' . $image); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $username; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src=" <?php echo base_url('uploads/' . $image); ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $username; ?> - <?php echo $position; ?>
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
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
            <a href="<?php echo base_url(); ?>users/index2/<?php echo $code; ?>">
              <i class="fa fa-user"></i> <span>My Account</span>
            </a>
          </li>
          <li class="header">Personal</li>
          <li>
            <a href="<?php echo base_url(); ?>users/calendar">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/profile/<?php echo $code; ?>">
              <i class="fa fa-user"></i> <span>Profile</span>
            </a>
          </li>
          <li class="header">Work Progress</li>
          <li>
            <a href="<?php echo base_url(); ?>users/activity/<?php echo $code; ?>">
              <i class="fa fa-user"></i> <span>Activity</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 901.2px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          User Profile
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">User profile</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <br>
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('uploads/' . $image); ?>" alt="User profile picture">

                <h3 class="profile-username text-center"><?php echo $username; ?></h3>

                <p class="text-muted text-center"><?php echo $position; ?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Bookings</b> <a class="pull-right"><?php echo $bookings; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Views</b> <a class="pull-right"><?php echo $views; ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Qualifications</strong>

                <p class="text-muted">
                  <?php echo $qualifications; ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Experience</strong>

                <p class="text-muted"><?php echo $experience; ?></p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> More</strong>

                <p><?php echo $about; ?></p>
                <a href="<?php echo base_url(); ?>users/editprofile2/<?php echo $code; ?>" class="btn btn-primary">Edit Profile</a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

          <div  class="col-md-9" style="background-color: white;">
          <h3 style="text-align: center;"><b><u> Your Testimonials!</u></b></h3>
            <div class='col-md-offset-2 col-md-8'>
              
                  <?php $count = 1;
                  foreach ($viewers as $view) { ?>
                    <!-- Quote 1 -->
                    <div class="item active">
                      <blockquote>
                        <div class="row">
                          <div class="col-sm-3 text-center">
                            <img class="img-circle" src="<?php echo base_url()?>/uploads/avatar.png" style="width: 100px;height:80px;">
                            <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                          </div>
                          <div class="col-sm-9">
                            <p><?php echo $view->comment; ?></p>
                            <small style="text-align: right;">From:<?php echo $view->Name; ?></small><br>
                            <small style="text-align: right;">Date:<?php echo $view->date; ?></small>
                          </div>
                        </div>
                      </blockquote>
                    </div><hr>
                  <?php $count++;
                  }  ?>
                </div>

              </div>
            </div>
            <!-- /.post -->
          
        <!-- /.tab-pane -->

        <!-- /.col -->

        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright ?? 2014-2019 <a href="https://adminlte.io">MotherGoose Ke</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <script>
    // When the DOM is ready, run this function
    $(document).ready(function() {
      //Set the carousel options
      $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
      });
    });
  </script>
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
  <script src="<?php echo base_url(); ?>/assets/js/popper.js"></script>
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