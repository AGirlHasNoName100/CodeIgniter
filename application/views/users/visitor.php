<?php
if (isset($this->session->userdata['logged_in'])) {
  $code = ($this->session->userdata['logged_in']['employeecode']);
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
<html  style="height: auto; min-height: 100%;">
    <head>
        <meta charset="UTF-8">
        <title>Codeigniter Vistor Tracking System</title>
        
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
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
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/exporting.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.tsv-0.96.min.js"></script>
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
            <a href="<?php echo base_url(); ?>users/data">
              <i class="fa fa-table"></i> <span>DataTables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>users/visitor">
              <i class="fa fa-envelope"></i> <span>Audience Overview</span>
            </a>
          </li>
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
    <div class="content-wrapper" style="height: auto !important; min-height: 969.8px;">
      <section class="content" style="height: auto !important; min-height: 0px !important;">
        <div>
            <div style="font-size: 30px;font-weight: bold; color: #129FEA;">Visits statistics</div>
            <script type="text/javascript">
                $(function () {
                    var chart;
                    $(document).ready(function () {
                        Highcharts.setOptions({
                            colors: ['#32353A']
                        });
                        chart = new Highcharts.Chart({
                            chart: {
                                renderTo: 'container',
                                type: 'column',
                                margin: [50, 30, 80, 60]
                            },
                            title: {
                                text: 'Visits Today: <?php echo date('d-m-Y'); ?>'
                            },
                            xAxis: {
                                categories: [
<?php
$i = 1;
$count = count($chart_data_today);
foreach ($chart_data_today as $data) {
    if ($i == $count) {
        echo "'" . $data->hour . "'";
    } else {
        echo "'" . $data->hour . "',";
    }
    $i++;
}
?>
                                ],
                                labels: {
                                    rotation: -45,
                                    align: 'right',
                                    style: {
                                        fontSize: '9px',
                                        fontFamily: 'Tahoma, Verdana, sans-serif'
                                    }
                                }
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Visits'
                                }
                            },
                            legend: {
                                enabled: false
                            },
                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.x + '</b><br/>' +
                                            'Visits: ' + Highcharts.numberFormat(this.y, 0);
                                }
                            },
                            series: [{
                                    name: 'Visits',
                                    data: [
<?php
$i = 1;
$count = count($chart_data_today);
foreach ($chart_data_today as $data) {
    if ($i == $count) {
        echo $data->visits;
    } else {
        echo $data->visits . ",";
    }
    $i++;
}
?>
                                    ],
                                    dataLabels: {
                                        enabled: false,
                                        rotation: 0,
                                        color: '#F07E01',
                                        align: 'right',
                                        x: -3,
                                        y: 20,
                                        formatter: function () {
                                            return this.y;
                                        },
                                        style: {
                                            fontSize: '11px',
                                            fontFamily: 'Verdana, sans-serif'
                                        }
                                    },
                                    pointWidth: 20
                                }]
                        });
                    });
                });
            </script>
            <div id="container" style="min-width: 300px; height: 180px; margin: 0 auto"></div>
        </div>
        <div class="clear"> </div>
        <div>
            <div>
                <div>
                    <h4>Today</h4> <?php echo $visits_today; ?> Visits
                </div>
                <div>
                    <h4>Last week</h4> <?php echo $visits_last_week; ?> Visits
                </div>
            </div>
        </div>
        <div class="clear"> </div>
        <div>
            <div><span style="font-size: 30px;font-weight: bold; color: #129FEA;">Check Visits statistics</span>
                <div style="float: right;margin: -4px 20px 0 5px;">
                    <form id="select_month_year" style="margin: 0;padding: 0;" method="post">
                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
                        <?php echo $this->site_config->generate_months() . '  ' . $this->site_config->generate_years(); ?>
                        <input type="button" name="submit" id="chart_submit_btn" value="Get Data"/>
                    </form>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    var chart;
                    $(document).ready(function () {
                        Highcharts.setOptions({
                            colors: ['#32353A']
                        });
                        chart = new Highcharts.Chart({
                            chart: {
                                renderTo: 'month_year_container',
                                type: 'column',
                                margin: [50, 30, 80, 60]
                            },
                            title: {
                                text: 'Visits'
                            },
                            xAxis: {
                                categories: [
<?php
$i = 1;
$count = count($chart_data_curr_month);
foreach ($chart_data_curr_month as $data) {
    if ($i == $count) {
        echo "'" . $data->day . "'";
    } else {
        echo "'" . $data->day . "',";
    }
    $i++;
}
?>
                                ],
                                labels: {
                                    rotation: -45,
                                    align: 'right',
                                    style: {
                                        fontSize: '9px',
                                        fontFamily: 'Tahoma, Verdana, sans-serif'
                                    }
                                }
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Visits'
                                }
                            },
                            legend: {
                                enabled: false
                            },
                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.x + '</b><br/>' +
                                            'Visits: ' + Highcharts.numberFormat(this.y, 0);
                                }
                            },
                            series: [{
                                    name: 'Visits',
                                    data: [
<?php
$i = 1;
$count = count($chart_data_curr_month);
foreach ($chart_data_curr_month as $data) {
    if ($i == $count) {
        echo $data->visits;
    } else {
        echo $data->visits . ",";
    }
    $i++;
}
?>
                                    ],
                                    dataLabels: {
                                        enabled: false,
                                        rotation: 0,
                                        color: '#F07E01',
                                        align: 'right',
                                        x: -3,
                                        y: 20,
                                        formatter: function () {
                                            return this.y;
                                        },
                                        style: {
                                            fontSize: '11px',
                                            fontFamily: 'Verdana, sans-serif'
                                        }
                                    },
                                    pointWidth: 20
                                }]
                        });
                    });
                });
            </script>
            <script type="text/javascript">
                $("#chart_submit_btn").click(function (e) {
                    // get the token value
                    var cct = $("input[name=csrf_token_name]").val();
                    //reset #container
                    $('#month_year_container').html('');
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/get_chart_data", //The url where the server req would we made.
                        //async: false,
                        type: "POST", //The type which you want to use: GET/POST
                        data: $('#select_month_year').serialize(), //The variables which are going.
                        dataType: "html", //Return data type (what we expect).
                        csrf_token_name: cct,
                        success: function (response) {
                            if (response.toLowerCase().indexOf("no data found") >= 0) {
                                $('#month_year_container').html(response);
                            } else {
                                //build the chart
                                var tsv = response.split(/n/g);
                                var count = tsv.length - 1;
                                var cats_val = new Array();
                                var visits_val = new Array();
                                for (i = 0; i < count; i++) {
                                    var line = tsv[i].split(/t/);
                                    var line_data = line.toString().split(",");
                                    var date = line_data[0];
                                    var visits = line_data[1];
                                    cats_val[i] = date;
                                    visits_val[i] = parseInt(visits);
                                }
                                var _categories = cats_val;
                                var _data = visits_val;
                                var chart;
                                $(document).ready(function () {
                                    Highcharts.setOptions({
                                        colors: ['#32353A']
                                    });
                                    chart = new Highcharts.Chart({
                                        chart: {
                                            renderTo: 'month_year_container',
                                            type: 'column',
                                            margin: [50, 30, 80, 60]
                                        },
                                        title: {
                                            text: 'Visits'
                                        },
                                        xAxis: {
                                            categories: _categories,
                                            labels: {
                                                rotation: -45,
                                                align: 'right',
                                                style: {
                                                    fontSize: '9px',
                                                    fontFamily: 'Tahoma, Verdana, sans-serif'
                                                }
                                            }
                                        },
                                        yAxis: {
                                            min: 0,
                                            title: {
                                                text: 'Visits'
                                            }
                                        },
                                        legend: {
                                            enabled: false
                                        },
                                        tooltip: {
                                            formatter: function () {
                                                return '<b>' + this.x + '</b><br/>' +
                                                        'Visits: ' + Highcharts.numberFormat(this.y, 0);
                                            }
                                        },
                                        series: [{
                                                name: 'Visits',
                                                data: _data,
                                                dataLabels: {
                                                    enabled: false,
                                                    rotation: 0,
                                                    color: '#F07E01',
                                                    align: 'right',
                                                    x: -3,
                                                    y: 20,
                                                    formatter: function () {
                                                        return this.y;
                                                    },
                                                    style: {
                                                        fontSize: '11px',
                                                        fontFamily: 'Verdana, sans-serif'
                                                    }
                                                },
                                                pointWidth: 20
                                            }]
                                    });
                                });
                            }
                        }
                    });
                });
            </script>
            <div id="month_year_container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
        </div>
      </section>
    </div>
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

    </body>
</html>