<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="row-fluid">
    <div class="hidden-phone">
    <div class="span12 unit-black">
        <div class="f-left">
            <a href="#" class="thumbnail">
                <?php $s_image = '/img/260x180.gif';
                if($a_user->logo != '') {
                    $a_pathinfo = pathinfo( $a_user->logo );
                    $s_image = '/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
                } ?>
                <img src="<?php echo $s_image; ?>" alt="">
            </a>
        </div>
        <div class="f-left">
            <div class="company-title"><?php echo $a_user->name; ?></div>
            <div class="category-title">
            <?php
                    switch($a_user->category){
                    case 1: echo 'BPO/ Call Centers'; break;
                    case 2: echo 'Web/ Mobile Development'; break;
                    case 3: echo 'Software Applications'; break;
                    case 4: echo 'Hardware/ Peripherals'; break;
                    case 5: echo 'Others'; break;
                    }
                ?>
            <?php echo $a_user->address ? ' | '.$a_user->address.', ' : ' | '; ?>
            <?php echo $a_user->city ? $a_user->city : ''; ?>
            <br>
            <?php echo $a_user->website ? '<a href="http://'.$a_user->website.'" target="_blank">'.$a_user->website.'</a><br>': ''; ?>
                <div class="linkedshare">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                    <script type="IN/Share" data-url="http://www.ictcebu.com" data-counter="right"></script>
                </div>
                <div class="fb-like" data-href="http://www.ictcebu.com" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-action="recommend"></div>
            </div>
            <div class="social-links">
                    <?php if($a_user->facebook){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->facebook; ?>">
                    <i class="facebook"></i></a>
                    <?php } ?>
                    <?php if($a_user->google){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->google; ?>">
                    <i class="google"></i></a>
                    <?php } ?>
                    <?php if($a_user->twitter){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->twitter; ?>">
                    <i class="twitter"></i></a>
                    <?php } ?>
                    <?php if($a_user->linkedin){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->linkedin; ?>">
                    <i class="linkedin"></i></a>
                    <?php } ?>
                    <?php if($a_user->youtube){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->youtube; ?>">
                    <i class="youtube"></i></a>
                    <?php } ?>
            </div>
            <a href="#contact" class="f-left" style="margin: 10px 20px;"><button class="btn btn-warning"><i class="icon-envelope icon-white"></i> Contact Company</button></a>
        </div>
    </div>
    </div>
    <div class="visible-phone">
    <div>
        <div>
            <a href="#" class="thumbnail">
                <?php $s_image = '/img/260x180.gif';
                if($a_user->logo != '') {
                    $a_pathinfo = pathinfo( $a_user->logo );
                    $s_image = '/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
                } ?>
                <img src="<?php echo $s_image; ?>" alt="">
            </a>
        </div>
        <div>
            <div class="company-title"><?php echo $a_user->name; ?></div>
            <div class="category-title">
            <?php
                    switch($a_user->category){
                    case 1: echo 'BPO/ Call Centers'; break;
                    case 2: echo 'Web/ Mobile Development'; break;
                    case 3: echo 'Software Applications'; break;
                    case 4: echo 'Hardware/ Peripherals'; break;
                    case 5: echo 'Others'; break;
                    }
                ?>
            <?php echo $a_user->address ? ' | '.$a_user->address.', ' : ' | '; ?>
            <?php echo $a_user->city ? $a_user->city : ''; ?>
            <br>
            <?php echo $a_user->website ? '<a href="#">'.$a_user->website.'</a><br>': ''; ?>
                <div class="linkedshare">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                    <script type="IN/Share" data-url="http://www.ictcebu.com" data-counter="right"></script>
                </div>
                <div class="fb-like" data-href="http://www.ictcebu.com" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-action="recommend"></div>
            </div>
            <div class="social-links">
                    <?php if($a_user->facebook){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->facebook; ?>">
                    <i class="facebook"></i></a>
                    <?php } ?>
                    <?php if($a_user->google){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->google; ?>">
                    <i class="google"></i></a>
                    <?php } ?>
                    <?php if($a_user->twitter){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->twitter; ?>">
                    <i class="twitter"></i></a>
                    <?php } ?>
                    <?php if($a_user->linkedin){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->linkedin; ?>">
                    <i class="linkedin"></i></a>
                    <?php } ?>
                    <?php if($a_user->youtube){ ?>
                    <a target="_blank" href="<?php echo 'http://'.$a_user->youtube; ?>">
                    <i class="youtube"></i></a>
                    <?php } ?>
            </div>
            <a href="#contact" class="f-left" style="margin: 10px 20px;"><button class="btn btn-warning"><i class="icon-envelope icon-white"></i> Contact Company</button></a>
        </div>
    </div>
    </div>
</div>
<div style="height:20px;"></div>
<div class="row-fluid">
 <div class="span8">
        <div class="clearfix"></div>
        <!-- <div class="fb-like"></div> -->
        <div class="company-details">Overview</div>
        <hr>
        <div class="unit"><?php echo $a_user->description ? $a_user->description: ''; ?></div>
        <div class="unit-down">&nbsp;</div>
        <div class="company-details">Services</div>
        <hr>
        <div class="unit"><?php echo $a_user->services ? $a_user->services: ''; ?></div>
        <div class="unit-down">&nbsp;</div>
        <div class="space"></div>
        <div id="contact" class="company-details">Contact Company</div>
        <hr>
         <form class="form-horizontal unit">
             <div class="alert alert-success success hidden">
                <a class="close" data-dismiss="alert">×</a>
                <strong>Thank You!</strong> We will get back to you as soon as we can.
            </div>
            <fieldset>
                <input type="hidden" class="input-xlarge" id="hdn_id" value="<?php echo $a_user->id; ?>">
                <div class="control-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="name">
                    </div>
                </div>
                <div class="control-group email">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="email">
                        <span class="help-inline hidden">Invalid email address.</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea">Message</label>
                    <div class="controls">
                        <textarea class="input-xlarge" id="message" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger" id="contact_company">Submit</button>
                    <button class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
        <div class="unit-down">&nbsp;</div>
    </div><!--/span-->
     <div class="span3" style="margin-top: 57px;">
        <?php if(count($a_jobs) > 0){ ?>
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Company Job Openings</li>
                <?php $i_ctr = 0; 
                foreach($a_jobs as $o_job){ 
                    if($i_ctr < 20 ) { ?>
                        <li><a href="/jobs/view/<?php echo $o_job->id; ?>"><?php echo $o_job->title; ?></a></li>
                <?php }
                $i_ctr++;
                } ?>
            </ul>
        </div>
        <?php } else { ?>
            <a href="#" class="thumbnail" style="margin: -25px -20px 0 20px;">
                    <img src="/img/long-ad.png" alt="">
            </a>
        <?php } ?>
    </div><!--/span-->    
</div>