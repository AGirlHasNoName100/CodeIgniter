<body onload='document.form1.text1.focus()'>
<div class="container">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Register</a></li>
            <li><a href="#timeline" data-toggle="tab">Create Profile</a></li>
        </ul>
        <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <?php echo validation_errors(); ?>
                <form method="post"  action="<?php echo base_url(); ?>users/register">
                <h2 class="text-center"><?= $title; ?></h2>
                <label style="color: red;">Required fields marked *</label>
                <div class="form-group">
                    <label>MGK ID</label><label style="color: red;">*</label>
                    <input type="text" class="form-control" name="id" placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Full Name</label><label style="color: red;">*</label>
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Phone Number</label><label style="color: red;">*</label>
                            <input type="text" class="form-control" name="phone" placeholder="eg, 07..."  >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email</label><label style="color: red;">*</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" onblur="checkEmail(this.value);">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label><label style="color: red;">*</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="pass">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label><label style="color: red;">*</label>
                    <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password" id="confirmpass" onblur="confirmPass(this.value);">
                </div>
                <a class="btn btn-primary" href="#">click <b>Create Profile</b> to continue</a>
            </div>

            <div class="tab-pane inactive" id="timeline">
                <h3 style="text-align:center;">Create Profile</h3>
                <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username*" name="username">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Position*" name="position">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Salary Per Month*" name="salary">
                </div>
                <div class="form-group">
                    <strong> <label for="exampleFormControlTextarea1">About Yourself</label></strong><label style="color: red;">*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
                </div>
                <div class="form-group">
                    <label>Qualifications</label><label style="color: red;">*</label>
                    <input type="text" class="form-control" placeholder=" Eg FirstAid, Special Needs" name="qualification">
                </div>
                <div class="form-group">
                    <label>Years of Experience</label><label style="color: red;">*</label>
                    <input type="text" class="form-control" placeholder=" Specifiy Years eg. 4 years" name="experience">
                </div>
                <button type="submit" onclick="phonenumber(document.form1.text1)" class="btn btn-primary btn-block">Finish Registration</button>
            
</form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function checkEmail(str)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(str))
    alert("Please enter a valid email address");
}

function confirmPass() {
    var pass = document.getElementById("pass").value
    var confPass = document.getElementById("confirmpass").value
    if(pass != confPass) {
        alert('Passwords dont match !');
    
    }
}
</script>
<script>
function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  }
</script>
