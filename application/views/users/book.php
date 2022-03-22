
<div class="container">
  <h2><?= $title; ?></h2>
  <?php echo validation_errors(); ?>
  <label style="color: red;">Required fields marked *</label>
  <form role="form" method="POST" action="<?php echo base_url(); ?>users/book/<?php echo  $this->uri->segment(3); ?>">
    <div class="form-group">
      <input type="hidden" class="form-control" placeholder="Customer ID" id="code" name="customerid" required>
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" value="<?php echo  $this->uri->segment(3); ?>" name="id" required>
    </div>
    <div class="form-group">
      <label>Full Name</label><label style="color: red;">*</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Email Address</label><label style="color: red;">*</label>
          <input type="text" class="form-control" name="email" onblur="checkEmail(this.value)">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label>Home Address</label><label style="color: red;">*</label>
          <input type="text" class="form-control" name="address">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label>Phone Number</label><label style="color: red;">*</label>
          <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="eg, 07...">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Position</label><label style="color: red;">*</label>
          <input type="text" class="form-control" placeholder="FullTime/Aupair" name="position">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label>Salary Per Month</label><label style="color: red;">*</label>
          <input type="text" class="form-control" placeholder="From 10000" name="salary" onblur="checkSalary(this)">
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Start Date</label><label style="color: red;">*</label>
          <input type="date" class="form-control" id="startDate" name="start">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label>End Date</label><label style="color: red;">*</label>
          <input type="date" class="form-control" id="endDate" name="end">
        </div>
      </div>
      <br>
    </div>
    
    <button type="submit" name="book" class="btn btn-primary" onclick="validateForm()">Book</button>
  </form>
</div>
<script>
  ;
  (function() {
    var randomString = function(length) {

      var text = "";

      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < length; i++) {

        text += possible.charAt(Math.floor(Math.random() * possible.length));

      }

      return text;
    }

    // random string length
    var random = randomString(10);

    // insert random string to the field
    var elem = document.getElementById("code").value = random;

  })();
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
  document.getElementById("startDate").setAttribute("min", today);
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
  document.getElementById("endDate").setAttribute("min", today);
</script>

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
<script type="text/javascript">
  function checkEmail(str) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(str))
      alert("Please enter a valid email address");
  }

  function checkSalary(form) {
    var input = 0;
    input = form.value;
    if (input < 10000) {
      alert("Salary must be Ksh10,000 or more");
      form.focus();
    }
  }
</script>
