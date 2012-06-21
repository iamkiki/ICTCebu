<div class="row-fluid">
<div class="span3">
  <?php $this->load->view('sidebar'); ?>
</div><!--/span-->
<div class="span9">
          <div class="row-fluid">
                <div class="n-legend d-inline f-left">Jobs</div>
                <div class="btn-group d-inline f-left m-left10 m-bottom5 m-top3">
                  <button class="btn btn-danger">All Categories</button>
                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                        <li><a href="/jobs">All Categories</a></li>
                        <li><a href="/jobs/sort/1">BPO/ Call Centers</a></li>
                        <li><a href="/jobs/sort/2">Web/ Mobile Development</a></li>
                        <li><a href="/jobs/sort/3">Software Applications</a></li>
                        <li><a href="/jobs/sort/4">Hardware/ Peripherals</a></li>
                    <li><a href="/jobs/sort/5">Others</a></li>
                  </ul>
                </div>
                <hr>
          </div>
  <?php if(count($a_jobs) > 0){ ?>
  <div class="unit">
                <table class="table">
                        <thead>
                          <tr>
                                <th>Date</th>
                                <th>Position</th>
                                <th>Experience</th>
                                <th>Company</th>
                                <th>Location</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($a_jobs as $o_job){ ?>
                                    <tr onclick="location.href = '/jobs/view/<?php echo $o_job->id; ?>';">
                                        <td><?php echo date('F j, Y', strtotime($o_job->date_added)); ?></td>
                                        <td><?php echo $o_job->title; ?></td>
                                        <td style="text-align: center;"><?php echo $o_job->experience; ?></td>
                                        <td><?php echo $o_job->company; ?></td>
                                        <td><?php echo $o_job->location ? $o_job->location: 'Cebu City'; ?></td>
                                    </tr>
                           <?php } ?>
                        </tbody>
                </table>
      <?php echo isset($s_pagination) ? $s_pagination: ''; ?>
  </div><!--/row-->
  <div class="unit-down">&nbsp;</div>
  <?php } else { ?>
		<div class="alert"><strong>Oops!</strong> No Listings under this category yet.</div>
  <?php } ?>
</div><!--/span-->
</div><!--/row-->

     