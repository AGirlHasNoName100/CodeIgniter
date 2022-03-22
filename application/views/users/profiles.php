<div class="container">
<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/profiles')?>

<div class="form-group">
      <input type="hidden" class="form-control" value="<?php  ?>" name="id">
    </div>
<div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <div class="row">
    <div class="col">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
  </div>
  <div class="col">
    <div class="form-group"> 
      <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
  </div>
    <div class="col">
    <div class="form-group"> 
      <input type="text" class="form-control" placeholder="Position" name="position">
    </div>
  </div>
  </div>
  <div class="form-group"> 
      <input type="text" class="form-control" placeholder="Salary Per Month" name="salary">
    </div>
  <div class="form-group">
  <strong> <label for="exampleFormControlTextarea1">About Yourself</label></strong>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
  </div>
  <div class="form-group">
<label >Qualifications</label>
  <input type="text" class="form-control" placeholder=" Eg FirstAid, Special Needs" name="qualification"> 
</div>
<div class="form-group">
<label >Years of Experience</label>
  <input type="text" class="form-control" placeholder=" Specifiy Years eg. 4 years" name="experience"> 
</div>
<div><br>
<button type="submit" class="btn btn-primary">Create</button>
</div>
<?php echo form_close()?>
</div>
