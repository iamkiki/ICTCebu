<?php 
$s_segment = $this->uri->segment(1); 
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
      <li><a href="/job">Programmer</a></li>
      <li><a href="/job">Web Developer</a></li>
      <li><a href="/job">Technical Support</a></li>
      <li><a href="/job">Data Encoder</a></li>
      <li><a href="/job">Programmer</a></li>
      <li><a href="/job">Web Developer</a></li>
      <li><a href="/job">Technical Support</a></li>
      <li><a href="/job">Data Encoder</a></li>
      <li><a href="/job">Technical Support</a></li>
      <li><a href="/job">Data Encoder</a></li>
    </ul>
</div><!--/.well -->