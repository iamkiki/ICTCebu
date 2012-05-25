<div class="row-fluid">
    <div class="span3">
      <?php $this->load->view('sidebar'); ?>
    </div><!--/span-->
    <div class="span9">
      <div class="hero-unit">
        <h1>Offering you the BEST Companies and Jobs in the IT, BPO and Call Center Industry in Cebu - the ICT Hub of the Philippines.</h1>
        <p>"ICT" is used as a general term for all kinds of technologies which enables users to create, access and manipulate information. ICT is a combination of information technology and communications technology.</p>
        <p><a class="btn btn-danger btn-large" href="/about">Learn more &raquo;</a></p>
      </div>
      <div class="row-fluid">
                    <ul class="thumbnails">
                    		<?php foreach($a_companies as $o_company){ ?>
                            <li class="span2">
	                          <div class="thumbnail">
	                                <img src="<?php echo $o_company->logo ? '/uploads/'.$o_company->logo : '/img/160x120.gif'; ?>" alt="" style="min-height: 110px;">
	                                <div class="caption">
	                                  <h5><?php echo $o_company->name; ?></h5>
	                                  <p>I love pastry powder pudding apple pie bear claw donut carrot cake. </p>
	                                  <p><a class="btn" href="/companies/profile/<?php echo $o_company->id; ?>">View Profile &raquo;</a></p>
	                                </div>
	                          </div>
	                        </li>
	                        <?php } ?>
                      </ul>
      </div><!--/row-->
    </div><!--/span-->
  </div><!--/row-->
<div class="view-all-companies"><a class="btn btn-danger" href="/companies">View All Companies</a></div>
      
