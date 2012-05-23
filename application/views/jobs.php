<div class="row-fluid">
<div class="span3">
  <?php $this->load->view('sidebar'); ?>
</div><!--/span-->
<div class="span8">
          <div class="row-fluid">
                <div class="n-legend d-inline f-left">Jobs</div>
                <div class="btn-group d-inline f-left m-left10 m-bottom5 m-top3">
                  <button class="btn btn-danger">All Categories</button>
                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                        <li><a href="#">All Categories</a></li>
                        <li><a href="#">BPO/ Call Centers</a></li>
                        <li><a href="#">Web/ Mobile Development</a></li>
                        <li><a href="#">Software Applications</a></li>
                        <li><a href="#">Hardware/ Peripherals</a></li>
                    <li><a href="#">Others</a></li>
                  </ul>
                </div>
                <hr>
          </div>
  <div class="row-fluid well">
                <table class="table">
                		<?php if(count($a_jobs) > 0){ ?>
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
                                    <tr>
                                        <td><?php echo date('F j, Y', strtotime($o_job->date_added)); ?></td>
                                        <td><?php echo $o_job->title; ?></td>
                                        <td><?php echo $o_job->experience; ?></td>
                                        <td><?php echo $o_job->company; ?></td>
                                        <td><?php echo $o_job->location ? $o_job->location: 'Cebu City'; ?></td>
                                    </tr>
                           <?php } } else { ?>
                           		<tr>No job listings yet.</tr>
                           <?php } ?>
                        </tbody>
                </table>
      <?php echo isset($s_pagination) ? $s_pagination: ''; ?>
  </div><!--/row-->
</div><!--/span-->
</div><!--/row-->

     