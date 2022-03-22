<!-- Search form (start) -->

<head>
  <style>
    body {
      background: white;
      margin-top: 20px;
    }

    .card-box {
      padding: 18px;
      border-radius: 3px;
      margin-bottom: 30px;
      background-color: white;
    }

    .thumb-lg {
      height: 88px;
      width: 88px;
    }

    .img-thumbnail {
      padding: .25rem;
      background-color: #fff;
      border: 1px solid #dee2e6;
      border-radius: .25rem;
      max-width: 100%;
      height: auto;
    }

    .text-pink {
      color: #ff679b !important;
    }

    .btn-rounded {
      border-radius: 2em;
    }

    .text-muted {
      color: #98a6ad !important;
    }

    h4 {
      line-height: 22px;
      font-size: 18px;
    }
    * {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column-cards {
  float: left;
  width: 200%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
#row {margin: 0 -5px;}

/* Clear floats after the columns */
#row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column-cards {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
  </style>
</head>
<br><br>
<div class="container" >
  <section class="content-header">
    <h3> Employee Profiles </h3>
    <div class="row " style="float: right;">
      <form method='post' action="<?= base_url() ?>posts/trial">
        <div class="form-group">    
          <input type='text'  class="md-form active-pink active-pink-2 mb-9 mt-0" placeholder="Try typing Full-time" class="form-control" name='search' value='<?= $search ?>'>
          <input type='submit' class="btn btn-primary" name='submit' value='Search'>
        </div>
      </form>
    </div>
  </section>
  <br>
  <!-- Posts List -->
  <?php
  $sno = $row + 1;
  foreach ($result as $data) {

    $content = substr($data['username'], 0, 180) . " ...";
    $sno = 1;
  ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="content">
      <div class="container">

        <!-- end row -->
        
          <div class="column-cards">
          <div class="col-lg-4">
            <div class="text-center card-box">
              <div class="member-card pt-2 pb-2" id="card">
                <div class="thumb-lg member-thumb mx-auto"><img src="<?php echo base_url('uploads/' . $data['image']); ?>" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                <br><br>
                <div class="">
                  <h4><?php echo  $data['username']; ?></h4>
                  <p class="text-muted">BabySitter <span>| </span><span><a href="<?php echo base_url() ?>posts/viewprofile/<?php echo  $data['employeecode']; ?>" class="text-pink">View Profile</a></span></p>
                </div>

                <a class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" href="https://api.whatsapp.com/send?phone=<?php echo  $data['phone']; ?>">Message</a>
                <div class="mt-4">
                  <div class="row">
                    <div class="col-4">
                      <div class="mt-3">
                        <h4><?php echo  $data['views']; ?></h4>
                        <p class="mb-0 text-muted">Views</p>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="mt-3">
                        <h4><?php echo  $data['bookings']; ?></h4>
                        <p class="mb-0 text-muted">Bookings</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- end col -->
        </div>
      </div>

    <hr>
    <?php

    $content;
    $sno++;
  }
  
  if (count($result) == 0) {
    echo "<tr>";
    echo "<td colspan='3'>No record found.</td>";
    echo "</tr>";
  }
    ?>



    <!-- Paginate -->
    <div>
      <ul class="pagination pagination-sm">
        <li class="page-item active"> <?= $pagination; ?></li>
      </ul>
    </div>
    </div>
</div>