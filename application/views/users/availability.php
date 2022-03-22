<html>

<head>
    <title>MotherGoose HomePage</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/content.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styletrial.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>
    <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
        iframe {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts/trial">Go To Profiles</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts/loginadmin">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-12 col-md-3 fh5co_padding_menu">
            <img src="<?php echo base_url(); ?>images/logo.jfif" width="100" height="100" alt="img" class="fh5co_logo_width" />
        </div>
        <div class="rowfirstrow">
            <div class="firstrowtitle">
                <h1>THE MOTHERGOOSE KENYA CBO</h1>
                <h5>For Professional and Quality Child Services</h5>
            </div>
        </div>
        <div class="container">
            <?php if ($this->session->flashdata('User_unavailable')) : ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('User_unavailable') . ' </p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('User_available')) : ?>
                <?php echo '<p class="alert alert-success">' . $this->session->flashdata('User_available') . ' </p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('user_available')) : ?>
                <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_available') . ' </p>'; ?>
            <?php endif; ?>

            <body style="background-image:url('../images/paint.png');background-size:contain;">
                <div class="container-scroller" style="background-color: white;">
                    <div class="container-fluid page-body-wrapper full-page-wrapper">
                        <div class="row w-100">
                            <div class="col-lg-12 mx-auto">
                                <br>
                                <form method="post" action="<?php echo base_url() ?>users/book/<?php echo  $this->uri->segment(3); ?>">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <h2 class="text-center"><?= $title; ?></h2><br>
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo  $this->uri->segment(3); ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" name="start" id="startDate" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date" name="end" id="endDate" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" onclick="validateForm()">Check Availability</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            <script>
                function validateForm() {

                    var startDate = document.getElementById("startDate").value;
                    var endDate = document.getElementById("endDate").value;
                    var x = new Date(startDate);
                    var y = new Date(endDate);

                    if (x > y) {
                        alert("Start date must be less than end date!");
                        document.getElementById("endDate").value = "";
                        return false;
                    }
                }
            </script>
<script>  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("startDate").setAttribute("min", today);</script>
    <script>  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("endDate").setAttribute("min", today);</script>


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
</body>

</html>