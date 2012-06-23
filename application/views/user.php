<?php
    $s_uri = $this->uri->segment(1);
    $i_segments = $this->uri->total_segments();
?>  
<div class="row-fluid min600 unit1">
    <div class="space"></div>
    <div class="span2">
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="<?php echo $s_uri == '' ? 'active' : ''; ?>"><a href="/"><i class="icon-home"></i>Home</a></li>
              <li class="<?php echo $s_uri == 'editprofile' ? 'active' : ''; ?>"><a href="/editprofile"><i class="icon-edit"></i>Edit Profile</a></li>
              <li class="<?php echo $s_uri == 'logo' ? 'active' : ''; ?>"><a href="/logo"><i class="icon-picture"></i>Logo</a></li>
              <li class="<?php echo $s_uri == 'account' ? 'active' : ''; ?>"><a href="/account"><i class="icon-user"></i>Account</a></li>
<!--               <li class="<?//php echo $s_uri == 'listings' ? 'active' : ''; ?>"><a href="/listings"><i class="icon-list-alt"></i>Job Listings</a></li> -->
              <li class="<?php echo $s_uri == 'jobs' ? 'active' : ''; ?>"><a href="/jobs/post"><i class="icon-plus"></i><?php echo $i_segments > 2 ? 'Edit': 'Post'; ?> Job</a></li>
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
                    case 'jobs'         : 
                        if($i_segments > 2){
                            $this->load->view('dashboard/editjob.php', $a_data); break;
                        } else {
                            $this->load->view('dashboard/postjob.php', $a_data); break;
                        }
                        
                    default:
            ?>
                <h4>You have <?php echo $a_user->views > 1 ? $a_user->views.' profile views': $a_user->views.' profile view'; ?> from other users since <?php echo date('F d, Y', strtotime($a_user->date_added)); ?></h4>
                <p></p>
				<table class="table table-striped table-bordered table-condensed">
				        <thead>
				          <tr>
				            <th colspan="6"> <?php echo count($a_jobs) > 0 ? 'Job Listings  <span class="red" style="font-size: 11px; float:right;">Legend: <i class="icon-pencil"></i>Edit <i class="icon-play-circle"></i>View</span>': 'No Job Listings'; ?></th>
				          </tr>
				          <?php if(count($a_jobs) > 0){ ?>
				          <tr>
				                <th>Date</th>
				                <th>Expiry Date</th>
				                <th>Position</th>
				                <th>Experience</th>
				                <th>Applications</th>
				                <th>Manage</th>
				          </tr>
				          <?php } ?>
				        </thead>
				        <tbody> 
				        <?php if(count($a_jobs) > 0){
				        foreach($a_jobs as $o_job){ ?>
				          <tr>
				                <td><?php echo date('F j, Y', strtotime($o_job->date_added)); ?></td>
				                <td><?php echo date('F j, Y', strtotime($o_job->expiry_date)); ?></td>
				                <td><?php echo $o_job->title; ?></td>
				                <td style="text-align:center;"><?php echo $o_job->experience; ?></td>
				                <td style="text-align:center;">None</td>
				                <td style="text-align:center;">
                                                    <a href="/jobs/edit/<?php echo $o_job->id; ?>"><i class="icon-pencil"></i></a>
                                                    <a href="/jobs/view/<?php echo $o_job->id; ?>" style="padding-left:5px;"><i class="icon-play-circle"></i></a>
                                                </td>
				          </tr>
				        <?php } } ?>
				        </tbody>
				</table>
				<?php echo isset($s_pagination) ? $s_pagination: ''; ?>
             <?php } ?>
        </div>
    </div><!--/span-->
</div><!--/row-->
<div class="unit1-down">&nbsp;</div>