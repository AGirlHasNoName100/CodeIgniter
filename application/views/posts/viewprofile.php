<!-- Modal -->
<?php foreach ($single_emp as $post) : ?>

<div  id="manual-ajax"  tabindex="-1" role="dialog" data-remote="<?php echo base_url()?>posts/viewprofile/<?php echo  $post->employeecode; ?>" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
      </div>
      <div class="modal-body">
        <div class="image">
          <img src="<?php echo base_url('uploads/' . $post->image); ?>" alt="..." style="width:200; height:200;" >
        </div>
        <div class="content">
          <div class="author">
            <h4 class="title"><?php echo  $post->username; ?><br>
              <a href="#"><small><?php echo  $post->Email; ?></small></a>
            </h4>
          </div><br>
          <p class="description text-left">
            <?php echo  $post->about; ?>
          </p><br>
          <p class="description text-left">
            Experience:
            <?php echo  $post->experience; ?><br>
            Qualifications:
            <?php echo  $post->qualifications; ?><br>
            Salary Per Month:
            <?php echo  $post->amount; ?>
          </p><br>
               <a href="<?php echo base_url()?>users/book/<?php echo  $post->employeecode; ?>" class="btn btn-primary">Book</a> 
          
        </div>
        <hr>
        <div class="text-center">
          <div class="row">
            <div class="col-md-4">
              <h5><?php echo  $post->views; ?><br><small>Views</small></h5>
            </div>
            <div class="col-md-3">
              <h5><?php echo  $post->bookings; ?><br><small>Bookings</small></h5>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary btn-block" href="<?php echo base_url()?>posts/trial" data-dismiss="modal">Back</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Comments And Reviews          
              </h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="minimize" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool"data-toggle="tooltip" title="" data-original-title="remove" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <?php $count= 1;
                   foreach ($viewers as $view) { ?>
                   <div class="box-footer box-comments">
                       
              <div class="box-comment">
                <div class="comment-text">
                <?php echo $count;?> 
                      <span class="username">
                      <?php echo $view->Name;?>
                        <span class="text-muted pull-right"><?php echo $view->date;?></span>
                      </span><!-- /.username -->
                      <?php echo $view->comment;?><br>
                    Employee username:<?php echo $view->username;?>
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
                    <?php $count++; }  ?>
            </div>
              <h3 class="box-title">Add A Comment           
              </h3>
              <form method="post" action="<?php echo base_url()?>posts/viewprofile">
              <div class="form-group">  
              <label>Rate</label>
                  <input type="number" class="form-control" name="rate" placeholder="Please input rating 1-5" min="1" max="5" required>
 </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name="id" value="<?php echo  $post->employeecode; ?>" required>
              </div>    
              <div class="form-group">
                  <label>Customer Code</label>
                  <input type="text" class="form-control" name="code" placeholder="Please input your customercode on invoice" required>
              </div> 
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
              </div>   
              <div class="form-group">
              <label>Comment/ Review</label>
    <textarea class="form-control"  name="comment" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
             <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
  

<?php endforeach; ?>