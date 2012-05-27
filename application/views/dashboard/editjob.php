<div class="span8 alert alert-success success hidden">
    <a class="close" data-dismiss="alert">×</a>
    <!-- <strong>Success!</strong> First Job Listing is FREE. -->
    <strong>One More Step!</strong> Please check your email to proceed with the payment, upon completion it will take at most 24 hours for your listing to be viewed publicly. Thank You!<p></p>
    You can view and update your job listings here. <a href="/" style="color:green"><strong>Click me!</strong></a>
     
</div>
<div class="alert alert-error hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Oh snap!</strong> Something went wrong.
</div>
<input type="hidden" id="job_id" value="<?php echo $o_job->id; ?>">
<form id="form_post" class="form-horizontal edit-form" method="post" enctype="multipart/form-data">
    <fieldset>
      <div class="control-group title">
            <label class="control-label" for="title">Job Position<span class="red">*</span></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="title" id="title" value="<?php echo $o_job->title; ?>">
              <p class="help-inline e_title red hidden">Job Position is required.</p>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="location">Location</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="location" id="location" value="<?php echo $o_job->location; ?>">
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="category">Category<span class="red">*</span></label>
            <div class="controls">
              <select id="category" name="category">
                    <option value="1" <?php echo $o_job->category == 1 ? 'selected': ''; ?>>BPO/ Call Centers</option>
                    <option value="2" <?php echo $o_job->category == 2 ? 'selected': ''; ?>>Web/ Mobile Development</option>
                    <option value="3" <?php echo $o_job->category == 3 ? 'selected': ''; ?>>Software Applications</option>
                    <option value="4" <?php echo $o_job->category == 4 ? 'selected': ''; ?>>Hardware/ Peripherals</option>
                    <option value="5" <?php echo $o_job->category == 5 ? 'selected': ''; ?>>Others</option>
              </select>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="experience">Experience</label>
            <div class="controls">
              <select id="experience" class="span1" name="experience">
                    <option value="0" <?php echo $o_job->experience == 0 ? 'selected': ''; ?>>0</option>
                    <option value="1" <?php echo $o_job->experience == 1 ? 'selected': ''; ?>>1</option>
                    <option value="2" <?php echo $o_job->experience == 2 ? 'selected': ''; ?>>2</option>
                    <option value="3" <?php echo $o_job->experience == 3 ? 'selected': ''; ?>>3</option>
                    <option value="4" <?php echo $o_job->experience == 4 ? 'selected': ''; ?>>4</option>
                    <option value="5" <?php echo $o_job->experience == 5 ? 'selected': ''; ?>>5</option>
                    <option value="6" <?php echo $o_job->experience == 6 ? 'selected': ''; ?>>6</option>
                    <option value="7" <?php echo $o_job->experience == 7 ? 'selected': ''; ?>>7</option>
                    <option value="8" <?php echo $o_job->experience == 8 ? 'selected': ''; ?>>8</option>
                    <option value="9" <?php echo $o_job->experience == 9 ? 'selected': ''; ?>>9</option>
                    <option value="10" <?php echo $o_job->experience == 10 ? 'selected': ''; ?>>10</option>
              </select>
              <span class="help-inline">(0 for No Experience needed)</span>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="expiry">Expiry Date<span class="red">*</span></label>
            <div class="controls">
              <select id="expiry" class="span1" name="expiry">
                    <option value="1" <?php echo $o_job->expiry == 1 ? 'selected': ''; ?>>1</option>
                    <option value="2" <?php echo $o_job->expiry == 2 ? 'selected': ''; ?>>2</option>
                    <option value="3" <?php echo $o_job->expiry == 3 ? 'selected': ''; ?>>3</option>
                    <option value="4" <?php echo $o_job->expiry == 4 ? 'selected': ''; ?>>4</option>
                    <option value="5" <?php echo $o_job->expiry == 5 ? 'selected': ''; ?>>5</option>
                    <option value="6" <?php echo $o_job->expiry == 6 ? 'selected': ''; ?>>6</option>
                    <option value="12" <?php echo $o_job->expiry == 7 ? 'selected': ''; ?>>12</option>
              </select>
              <span class="help-inline">month(s) = 30 days/month</span>
            </div>
      </div>
      <div class="control-group email">
            <label class="control-label" for="email">Email<span class="red">*</span></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email" value="<?php echo $o_job->email; ?>">
              <span class="help-inline">Applications will be forwarded to this Email.</span>
              <span class="help-block e_email red hidden">Invalid email address.</span>
            </div>
      </div>
      <div class="control-group requirements">
            <label class="control-label" for="requirements">Requirements</label>
            <div class="controls">
              <textarea class="input-xlarge" name="requirements" id="requirements" rows="5"><?php echo $o_job->requirements; ?></textarea>
              <?php echo display_ckeditor($ckeditor['ckeditor']); ?>
            </div>
      </div>
      <div class="control-group">
              <p></p>
              <span class="red">*</span> Required Fields
              <p></p>
      </div>
      <div class="form-actions">
            <button type="submit" class="btn btn-danger">Submit</button>
            <button class="btn cancel_btn">Cancel</button>
      </div>
    </fieldset>
</form>
