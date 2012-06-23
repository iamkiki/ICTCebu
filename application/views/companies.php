<div class="row-fluid">
<div class="span3">
  <?php $this->load->view('sidebar'); ?>
</div><!--/span-->
<div class="span9">
          <div class="row-fluid">
                <div class="n-legend d-inline f-left">Companies</div>
                <div class="btn-group d-inline f-left m-left10 m-bottom5 m-top3">
                  <button class="btn btn-danger">All Categories</button>
                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                        <li><a href="/companies">All Categories</a></li>
                        <li><a href="/companies/sort/1">BPO/ Call Centers</a></li>
                        <li><a href="/companies/sort/2">Web/ Mobile Development</a></li>
                        <li><a href="/companies/sort/3">Software Applications</a></li>
                        <li><a href="/companies/sort/4">Hardware/ Peripherals</a></li>
                    	<li><a href="/companies/sort/5">Others</a></li>
                  </ul>
                </div>
                <hr>
          </div>
  <div class="row-fluid">
  				<?php if(count($a_companies) > 0) { ?>
                <ul class="thumbnails">
                		<?php foreach($a_companies as $o_company){ ?>
                        <li class="span2">
                          <div class="thumbnail">
                                <img src="<?php echo $o_company->logo ? '/uploads/'.$o_company->logo : '/img/160x120.gif'; ?>" alt="" style="min-height: 110px;">
                                <div class="caption">
                                  <h5><?php echo $o_company->name; ?></h5>
                                  <p style="font-size: 10px;"> <?php
                                        switch($o_company->category){
                                        case 1: echo 'BPO/ Call Centers'; break;
                                        case 2: echo 'Web/ Mobile Development'; break;
                                        case 3: echo 'Software Applications'; break;
                                        case 4: echo 'Hardware/ Peripherals'; break;
                                        case 5: echo 'Others'; break;
                                        }
                                    ?></p>
                                  <p><a class="btn" href="/companies/profile/<?php echo $o_company->id; ?>">View Profile &raquo;</a></p>
                                </div>
                          </div>
                        </li>
                        <?php } ?>
                  </ul>
                  <?php } else { ?>
                  		<div class="alert"><strong>Oops!</strong> No Companies under this category yet.</div>
                  <?php } ?>
  </div><!--/row-->
</div><!--/span-->
</div><!--/row-->

<?php echo isset($s_pagination) ? $s_pagination: ''; ?>
      
