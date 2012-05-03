<div class="row-fluid">
  <div class="span3">
      <div class="well sidebar-nav">
                      <a href="#" class="thumbnail">
                            <?php $s_image = '/img/260x180.gif';
                            if($a_user->logo != '') {
                                $a_pathinfo = pathinfo( $a_user->logo );
                                $s_image = '/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
                            } ?>
                            <img src="<?php echo $s_image; ?>" alt="">
                      </a>
                      <p></p>
                      <ul class="nav nav-list social-links">
                              <?php if($a_user->facebook){ ?>
                              <a target="_blank" href="<?php echo 'http://'.$a_user->facebook; ?>"><li>
                                  <button class="btn btn-inverse"><i class="facebook"></i> Our Facebook Page</button></li></a>
                              <?php } ?>
                              <?php if($a_user->twitter){ ?>
                              <a target="_blank" href="<?php echo 'http://'.$a_user->twitter; ?>"><li>
                                  <button class="btn btn-inverse"><i class="twitter"></i> Checkout our Tweets</button></li></a>
                              <?php } ?>
                              <?php if($a_user->linkedin){ ?>
                              <a target="_blank" href="<?php echo 'http://'.$a_user->linkedin; ?>"><li>
                                  <button class="btn btn-inverse"><i class="linkedin"></i> LinkedIn with Us</button></li></a>
                              <?php } ?>
                              <?php if($a_user->youtube){ ?>
                              <a target="_blank" href="<?php echo 'http://'.$a_user->youtube; ?>"><li>
                                  <button class="btn btn-inverse"><i class="youtube"></i> Stream our Videos</button></li></a>
                              <?php } ?>
                              <?php if($a_user->skype){ ?>
                              <li><button class="btn btn-inverse"><i class="skype"></i> <?php echo $a_user->skype; ?></button></li>
                              <?php } ?>
                      </ul>
      </div><!--/.well -->
    </div><!--/span-->
    <div class="span6">
                    <div class="n-legend d-inline f-left"><?php echo $a_user->name; ?></div>
                    <div class="fb-like"></div>
                    <hr>
                    <?php if($a_user->quote != '' ){ ?>
                    <blockquote>
                      <p><?php echo $a_user->quote; ?></p>
                      <small><?php echo $a_user->source ? $a_user->source: ''; ?></small>
                    </blockquote>
                    <?php } ?>
                    <dl class="dl-horizontal">
                            <dt>Category</dt>
                                    <dd><?php
                                     switch($a_user->category){
                                        case 1: echo 'BPO/ Call Centers'; break;
                                        case 2: echo 'Web/ Mobile Development'; break;
                                        case 3: echo 'Software Applications'; break;
                                        case 4: echo 'Hardware/ Peripherals'; break;
                                        case 5: echo 'Others'; break;
                                     }
                                    ?></dd>
                            <dt>Address</dt>
                                    <dd><strong><?php echo $a_user->name; ?></strong><br>
                                        <?php echo $a_user->address ? $a_user->address : ''; ?>
                                    </dd>
                            <dt>Website</dt>
                                   <dd><a href="#"><?php echo $a_user->website ? $a_user->website: 'None'; ?></a></dd>
                    </dl>
                    <p></p>	
                    <h4>Description/Services</h4>
                    <div><?php echo $a_user->description ? $a_user->description: ''; ?></div>	
      </div>             
     <div class="span3">
    <legend>Job Listings</legend>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="job.php">Programmer</a></li>
      <li><a href="job.php">Web Developer</a></li>
      <li><a href="job.php">Technical Support</a></li>
      <li><a href="job.php">Data Encoder</a></li>
                  <li><a href="job.php">Programmer</a></li>
      <li><a href="job.php">Web Developer</a></li>
      <li><a href="job.php">Technical Support</a></li>
      <li><a href="job.php">Data Encoder</a></li>
                  <li><a href="job.php">Technical Support</a></li>
      <li><a href="job.php">Data Encoder</a></li>
                 </ul>
    </div><!--/span-->
</div>
      