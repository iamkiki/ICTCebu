<?php 
$s_segment = $this->uri->segment(1); 
$s_segment = $s_segment != 'companies' && $s_segment != 'jobs' ? 'companies': $s_segment;
$i_category = $this->uri->segment(3);
?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
      <li class="nav-header">Browse Categories</li>
      <li <?php echo $i_category == 1 ? 'class="active"': ''; ?>><a href="/<?php echo $s_segment; ?>/sort/1">BPO/ Call Centers</a></li>
      <li <?php echo $i_category == 2 ? 'class="active"': ''; ?>><a href="/<?php echo $s_segment; ?>/sort/2">Web/ Mobile Development</a></li>
      <li <?php echo $i_category == 3 ? 'class="active"': ''; ?>><a href="/<?php echo $s_segment; ?>/sort/3">Software Applications</a></li>
      <li <?php echo $i_category == 4 ? 'class="active"': ''; ?>><a href="/<?php echo $s_segment; ?>/sort/4">Hardware/ Peripherals</a></li>
      <li <?php echo $i_category == 5 ? 'class="active"': ''; ?>><a href="/<?php echo $s_segment; ?>/sort/5">Others</a></li>

      <li class="nav-header">Hot Jobs</li>
      <?php foreach($a_hot_jobs as $o_job){ ?>
      	<li><a href="/jobs/view/<?php echo $o_job->id; ?>"><?php echo $o_job->title; ?></a></li>
      <?php } ?>
    </ul>
</div><!--/.well -->