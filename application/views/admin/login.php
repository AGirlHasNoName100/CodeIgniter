<div class="container"><br>
<?php echo form_open('administrator/loginadmin');?>
<h2 class="text-center"><?= $title; ?></h2>
<div class="row justify-content">
<div class="col-md-4 col-md-offset-4">
<div class="form-group">
<label>Enter Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
</div>
<div class="form-group">
<label>Enter Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
</div>
<button type="submit" class="btn btn-primary btn-block">Login</button>
</div>
</div>
<?php echo form_close();?>
</div>