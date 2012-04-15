<?php
    $a_user = $this->session->userdata('auth');
    $s_uri = $this->uri->segment(1);
?>
<div class="row-fluid min600">
    <legend><?php echo $a_user->name; ?></legend>
    <div class="span2">
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="<?php echo $s_uri == '' ? 'active' : ''; ?>"><a href="/"><i class="icon-home"></i>Home</a></li>
              <li class="<?php echo $s_uri == 'editprofile' ? 'active' : ''; ?>"><a href="/editprofile"><i class="icon-edit"></i>Edit Profile</a></li>
              <li class="<?php echo $s_uri == 'logo' ? 'active' : ''; ?>"><a href="/logo"><i class="icon-picture"></i>Company Logo</a></li>
              <li class="<?php echo $s_uri == 'account' ? 'active' : ''; ?>"><a href="/account"><i class="icon-user"></i>Account Settings</a></li>
              <li class="<?php echo $s_uri == 'listings' ? 'active' : ''; ?>"><a href="/listings"><i class="icon-list-alt"></i>Job Listings</a></li>
              <li class="<?php echo $s_uri == 'post' ? 'active' : ''; ?>"><a href="/post"><i class="icon-plus"></i>Post Job</a></li>
            </ul>
          </div> <!-- /tabbable -->
    </div>
    <div class="span9">
        <div class="tab-content">
            <?php
                switch($s_uri){
                    case 'editprofile'  : $this->load->view('dashboard/editprofile.php'); break;
                    case 'logo'         : $this->load->view('dashboard/logo.php'); break;
                    case 'account'      : $this->load->view('dashboard/account.php'); break;
                    case 'listings'     : $this->load->view('dashboard/listings.php'); break;
                    case 'post'         : $this->load->view('dashboard/postjob.php'); break;
                    default:
            ?>
<!--                    <div class="span7">
                        <blockquote>
                          <p>Company Tagline or slogan here.</p>
                          <small>Company CEO</small>
                        </blockquote>
                        <dl class="dl-horizontal">
                                <dt>Overview</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                <dt>Category</dt>
                                        <dd>BPO/ Call Centers</dd>
                                <dt>Services</dt>
                                        <dd>Cupcake ipsum dolor sit amet lemon drops. Sesame snaps gummi bears tart. Chocolate cake ice cream dessert chocolate cake cake bonbon topping gingerbread. Jelly-o fruitcake gingerbread chocolate apple pie I love ice cream applicake. Lemon drops icing I love I love liquorice danish pastry. Brownie caramels caramels I love dessert lemon drops powder. I love pudding oat cake sweet roll.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        </dl>
                    </div>
                     <div class="span3">
                        <legend>Active Job Listings</legend>
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
                    </div>/span-->
             <?php } ?>
        </div>
    </div><!--/span-->
</div><!--/row-->
