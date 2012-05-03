<?php
    $s_uri = $this->uri->segment(1);
?>
<div class="row-fluid min600">
    <div class="space"></div>
    <div class="span2">
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="<?php echo $s_uri == '' ? 'active' : ''; ?>"><a href="/"><i class="icon-home"></i>Home</a></li>
              <li class="<?php echo $s_uri == 'editprofile' ? 'active' : ''; ?>"><a href="/editprofile"><i class="icon-edit"></i>Edit Profile</a></li>
              <li class="<?php echo $s_uri == 'logo' ? 'active' : ''; ?>"><a href="/logo"><i class="icon-picture"></i>Company Logo</a></li>
              <li class="<?php echo $s_uri == 'account' ? 'active' : ''; ?>"><a href="/account"><i class="icon-user"></i>Account Settings</a></li>
<!--               <li class="<?//php echo $s_uri == 'listings' ? 'active' : ''; ?>"><a href="/listings"><i class="icon-list-alt"></i>Job Listings</a></li> -->
              <li class="<?php echo $s_uri == 'post' ? 'active' : ''; ?>"><a href="/post"><i class="icon-plus"></i>Post Job</a></li>
            </ul>
          </div> <!-- /tabbable -->
    </div>
    <div class="span9">
        <div class="tab-content">
            <?php
                switch($s_uri){
                    case 'editprofile'  : $this->load->view('dashboard/editprofile.php', $a_data); break;
                    case 'logo'         : $this->load->view('dashboard/logo.php'); break;
                    case 'account'      : $this->load->view('dashboard/account.php'); break;
                    /* case 'listings'     : $this->load->view('dashboard/listings.php'); break; */
                    case 'post'         : $this->load->view('dashboard/postjob.php', $a_data); break;
                    default:
            ?>
                <h4>You have <?php echo $a_user->views > 1 ? $a_user->views.' profile views': $a_user->views.' profile view'; ?> since <?php echo date('F d, Y', strtotime($a_user->date_added)); ?></h4>
                <p></p>
				<table class="table table-striped table-bordered table-condensed">
				        <thead>
				          <tr>
				            <th colspan="6">Job Listings</th>
				          </tr>
				          <tr>
				                <th>Date</th>
				                <th>Expiry Date</th>
				                <th>Position</th>
				                <th>Experience</th>
				                <th>Applications</th>
				                <th>Manage</th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Web Developer</td>
				                <td>1 yr</td>
				                <td>None</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Technical Support Specialist</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Java Developer</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Web Developer</td>
				                <td>1 yr</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Technical Support Specialist</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Java Developer</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Web Developer</td>
				                <td>1 yr</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Technical Support Specialist</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>Java Developer</td>
				                <td>2 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				          <tr>
				                <td>April 1</td>
				                <td>April 30</td>
				                <td>PHP Developer</td>
				                <td>3 yrs</td>
				                <td>1</td>
				                <td><a href="#"><i class="icon-pencil"></i>Edit Job</a></td>
				          </tr>
				        </tbody>
				</table>
				<div class="pagination f-right">
				  <ul>
				        <li><a href="#">&larr;</a></li>
				        <li class="active">
				          <a href="#">1</a>
				        </li>
				        <li><a href="#">2</a></li>
				        <li><a href="#">3</a></li>
				        <li><a href="#">&rarr;</a></li>
				  </ul>
				</div>
             <?php } ?>
        </div>
    </div><!--/span-->
</div><!--/row-->
