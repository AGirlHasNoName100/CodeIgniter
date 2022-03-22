

  <div class="row">
    <div class="col-12 col-md-3 fh5co_padding_menu">
      <img src="images/logo.jfif" width="100" height="100" alt="img" style="left:350px; position:absolute;" />
    </div>
    <div class="rowfirstrow">
      <div class="firstrowtitle">
        <h1>THE MOTHERGOOSE KENYA CBO</h1>
        <h5>For Professional and Quality Child Services</h5>
      </div>
    </div>
  </div><br>
  <!-- <a href='http://www.freevisitorcounters.com'>more on freevisitorcounters.com</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=9efe4d67933e0a0553d8eb4e65964c42f849499b'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/641779/t/2"></script>-->
  <div class="card" style="border-radius: 10px;">
    <div class="col-md-6">
      <div class="row" style="margin-top:40px;">
        <div class="col-md-6">
          <?php
          if (isset($_GET["submit"])) {
            if (isset($_GET["id"])) {
              $id = $_GET["id"];
  
              $sql = "UPDATE profilerecords SET views = views + 1 WHERE username = '$id'"; 
              if ($conn->query($sql) === TRUE) {
               // echo "Profile Info added successfully";
              //  echo $counter;
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              //echo 'Set';
              $query = "SELECT * FROM profilerecords  WHERE username='$id'";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($result)) { ?>
                <img src="uploads/<?php echo  $row['image']; ?>" alt=" " style="width:200px;height: 200px;" />
                <h1> <?php echo $row['username']; ?></h1>
                <p><a href="#"><i style="color: gold;" class="fa fa-certificate"></i></a> <?php echo $row['position']; ?></p>
                <p style="text-align: left;"><?php echo $row['about']; ?></p>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method=post>
                  <input type="hidden" name="id2" value="<?php echo  $row["username"]; ?>" />
                  <input type="hidden" name="counter" value="<?php $row["likes"]; ?>" ; />
                  <input class="btn" type="submit" name="button" value="<?php $row["likes"]; ?>Likes">

                </form>
        </div>
      </div>
      <form method="get" action="requestform.php">
        <input type="hidden" name="id" value="<?php echo  $row["username"]; ?>" />
        <input type="submit" class="btn" name="submit3" value="Book" />
      </form>
      <!--   <form method="get" action="reviewtry.php">
      <input type="hidden" name="id" value="<?php echo  $row["username"]; ?>" /> 
        <input type="submit" class="btn" name="submit4" value="Leave A Review" />
      </form>-->
      <form method="get" action="reviewtry.php">
        <input name="user" type="hidden" value="<?php echo $row['username'];
                                              }                                           
                                           
                                        }
                                          }                                       
          
                                                ?>" />
        <input type="submit" data-toggle="modal" data-target="#myModal" class="btn" name="submit2" value="Check Availability" />
        <?php
      if (isset($_GET["submit2"])) {
        if (isset($_GET["user"])) {
          $id1 = $_GET["user"];
          echo 'setset';
      ?>
        
       
      </form>
     
    </div>
  </div>
  <div class="row">
    <div class="col-sm-7">
      <hr />
      <div class="review-block">
        <?php
          $ratinguery = "SELECT ratingId, username, name, ratingNumber, title, comments, created, modified FROM user_rating WHERE username='$id1'";
          $ratingResult = mysqli_query($conn, $ratinguery) or die("database error:" . mysqli_error($conn));
          while ($rating = mysqli_fetch_assoc($ratingResult)) {
            $date = date_create($rating['created']);
            $reviewDate = date_format($date, "M d, Y");
        ?>
          <div class="row">
            <div class="col-sm-3">
              <img src="image/profile.png" class="img-rounded">
              <div class="review-block-name">By <a href="#">phpzag</a></div>
              <div class="review-block-date"><?php echo $reviewDate; ?></div>
            </div>
            <div class="col-sm-9">
              <div class="review-block-rate">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if ($i <= $rating['ratingNumber']) {
                    $ratingClass = "btn-warning";
                  }
                ?>
                  <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                <?php } ?>
              </div>
              <div class="review-block-title"><?php echo $rating['title']; ?></div>
              <div class="review-block-description"><?php echo $rating['comments']; ?></div>
            </div>
          </div>
          <hr />
    <?php }
        }
      }
      $conn->close(); ?>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script>
            var dateToday = new Date(); //creating new date obj. used to disable dates before today used in minDate: dateToday
              $(function() {

                $( "#datepicker" ).datepicker({
                    minDate: dateToday,     
                        dateFormat : 'yy-mm-dd',
                    beforeShowDay: checkAvailability

                    });

                $( "#datepicker1" ).datepicker({
                        minDate: dateToday,
                        dateFormat : 'yy-mm-dd',
                    beforeShowDay: checkAvailability        
                    });

              })
              /******************THE json array returned by php is used here*****/
                  var $disabledDates = <?php echo $json_array; ?>

                function checkAvailability(mydate){
                var $return=true;
                var $returnclass ="available";
                $checkdate = $.datepicker.formatDate('yy-mm-dd', mydate);
                for(var i = 0; i < $disabledDates.length; i++)
                    {    
                       if($disabledDates[i] == $checkdate)
                          {
                        $return = false;
                        $returnclass= "unavailable";
                        }
                    }
                return [$return,$returnclass];
                }

              </script> 
  <script>
    $('.form-control').each(function() {
      floatedLabel($(this));
    });

    $('.form-control').on('input', function() {
      floatedLabel($(this));
    });

    function floatedLabel(input) {
      var $field = input.closest('.form-group');
      if (input.val()) {
        $field.addClass('input-not-empty');
      } else {
        $field.removeClass('input-not-empty');
      }
    }
  </script>
  <script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
      dd = '0' + dd
    }
    if (mm < 10) {
      mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datepicker").setAttribute("min", today);
  </script>
</body>

</html>