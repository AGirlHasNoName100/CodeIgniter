<div class="container">
  <br>
  <h3><?= $title ?></h3>
  <br>
</div>
<h5 class="card-header">Popular</h5>
  <div class="col-sm-12">
    <div class="card ">
      <div class="card-block">
        <div class="row" id="draggablePanelList">
          <div class="col-lg-12 col-xl-6">
          <?php
$count = 1;
foreach ($posts as $post) : ?>
            <div class="card-sub ">
              <br>
              <img class="card-img-top img-fluid" src="<?php echo base_url('uploads/' . $post['image']); ?>" alt="Card image cap" style="width:200; height:200;">
              <div class="card-block flex-row flex-wrapt">
                <h4 class="card-title"><?php echo  $post['username']; ?></h4>
               
                <p class="card-text"><?php echo $post['likes']; ?> Likes <?php echo  $post['views']; ?> Views<br><?php echo  $post['about']; ?></p>
              
                <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=<?php echo  $post['phone']; ?>">Message</a>
                <!-- Button trigger modal -->
                <a    class="btn btn-primary" data-target="#manual-ajax"  href="<?php echo base_url()?>posts/viewprofile/<?php echo  $post['employeecode']; ?>" >
                  View Profile
</a>
              </div>
            </div>
            <?php endforeach; 
      $count++?>
          </div>
        </div> 
      </div>
    </div>
                
      </div>

     
      