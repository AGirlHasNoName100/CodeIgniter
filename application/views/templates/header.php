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

      <img src="<?php echo base_url(); ?>images/logo.jfif" width="100" height="100" alt="img" class="fh5co_logo_width" />
 
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-toggle="tooltip" title="" data-original-title="View profiles" href="<?php echo base_url(); ?>posts/trial">Go To Profiles</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" title="" data-original-title="Admin login only"  href="<?php echo base_url(); ?>posts/loginadmin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-toggle="tooltip" title="" data-original-title="Register and Create Profile" href="<?php echo base_url(); ?>users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-toggle="tooltip" title="" data-original-title="Employee login only" href="<?php echo base_url(); ?>users/login">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-12 col-md-3 fh5co_padding_menu">
      
    </div>
    <div class="rowfirstrow">
      <div class="firstrowtitle">
        <h1>THE MOTHERGOOSE KENYA CBO</h1>
        <h5>For Professional and Quality Child Services</h5>
      </div>
    </div>
    <div class="container">
      <?php if ($this->session->flashdata('user_registered')) : ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . ' </p>'; ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('profile_created')) : ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('profile_created') . ' </p>'; ?>
      <?php endif; ?>
      <div class="container">
        <?php if ($this->session->flashdata('user_loggedin')) : ?>
          <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . ' </p>'; ?>
        <?php endif; ?>
        <div class="container">
          <?php if ($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('logged_out')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('logged_out') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('booked')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('booked') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('payment_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('payment_failed') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('paid')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('paid') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('registration_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('registration_failed') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('comment_sent')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('comment_sent') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('comment_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('comment_failed') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('User_unavailable')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('User_unavailable') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('User_available')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('User_available') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('user_available')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_available') . ' </p>'; ?>
          <?php endif; ?>
          <?php if ($this->session->flashdata('feedback_sent')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('feedback_sent') . ' </p>'; ?>
          <?php endif; ?>