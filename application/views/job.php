<div id="fb-root"></div>
<div class="row-fluid">
    <div class="span11 unit-black">
        <div class="f-left">
            <a href="#" class="thumbnail">
                <?php $s_image = '/img/260x180.gif';
                if($o_company->logo != '') {
                    $a_pathinfo = pathinfo( $o_company->logo );
                    $s_image = '/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
                } ?>
                <img src="<?php echo $s_image; ?>" alt="">
            </a>
        </div>
        <div class="f-left">
            <div class="job-title"><?php echo $o_job->title.'  '; ?><sup><span class="label label-important">2yrs</span></sup></div>
                <dl class="dl-horizontal">
                <dt>Company</dt>
                        <dd><a href="/companies/profile/<?php echo $o_job->company_id; ?>"><?php echo $o_company->name; ?></a></dd>
                <dt>Location</dt>
                        <dd><?php echo $o_job->location != '' ? $o_job->location: $o_company->address.', '.$o_company->city; ?></dd>
                <dt>Expiration</dt>
                        <dd>Accepting applications until <?php echo date('F j, Y', strtotime($o_job->expiry_date)); ?></dd>
                <dt>Category</dt>
                        <dd><?php
                            switch($o_job->category){
                                case 1: echo 'BPO/ Call Centers'; break;
                                case 2: echo 'Web/ Mobile Development'; break;
                                case 3: echo 'Software Applications'; break;
                                case 4: echo 'Hardware/ Peripherals'; break;
                                case 5: echo 'Others'; break;
                            }
                            ?></dd>
            </dl>
            <a href="#apply" class="f-left" style="margin-left: 63px;"><button class="btn btn-warning"><i class="icon-check icon-white"></i> Apply now</button></a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span3" style="margin-top: 35px;">
            <a href="#" class="thumbnail">
                    <img src="/img/long-ad.png" alt="">
            </a>
    </div><!--/span-->
    <div class="span8">
        <div class="clearfix"></div>
        <div class="company-details">Requirements</div>
        <hr>
        <div class="unit"><?php echo $o_job->requirements; ?></div>
        <div class="unit-down">&nbsp;</div>
        <div id="apply" class="company-details">Apply for this Job</div>
        <hr>
        <form class="form-horizontal unit">
                <fieldset>
                <div class="control-group">
                        <label class="control-label" for="input01">Name</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" id="input01">
                        </div>
                </div>
                <div class="control-group">
                        <label class="control-label" for="input02">Email Address</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" id="input02">
                        </div>
                </div>
                <div class="control-group">
                        <label class="control-label" for="textarea">Cover Letter</label>
                        <div class="controls">
                        <textarea class="input-xlarge" id="textarea" rows="8"></textarea>
                        </div>
                </div>
                <div class="control-group">
                        <label class="control-label" for="fileInput">Attach Resume</label>
                        <div class="controls">
                        <input class="input-file" id="fileInput" type="file">
                        </div>
                </div>
                <div class="form-actions">
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <button class="btn">Cancel</button>
                </div>
                </fieldset>
        </form>
        <div class="unit-down">&nbsp;</div>
    </div><!--/span-->
</div><!--/row-->