<div class="alert alert-success success hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Success!</strong> Your company information is now updated.
</div>
<div class="alert alert-error hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Oh snap!</strong> Something went wrong.
</div>
<form class="form-horizontal register-form" method="post" enctype="multipart/form-data">
        <fieldset>
          <div class="control-group company_name">
                <label class="control-label" for="company_name">Company Name<span class="red">*</span></label>
                <div class="controls">
                  <input type="text" class="input-xlarge" id="company_name" value="<?php echo $a_data->name; ?>">
                  <p class="help-block e_company_name red hidden">Company name is required.</p>
                </div>
          </div>
          <div class="control-group quote">
                <label class="control-label" for="description">Company Tagline/Quote</label>
                <div class="controls">
                  <textarea class="input-xlarge" id="quote" rows="2"><?php echo $a_data->quote; ?></textarea>
                </div>
          </div>
          <div class="control-group source">
                <label class="control-label" for="source">Source</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" id="source" value="<?php echo $a_data->source; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="address">Address</label>
                <div class="controls">
                  <textarea class="input-xlarge" id="description" rows="2"><?php echo $a_data->address; ?></textarea>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="city">City</label>
                <div class="controls">
                  <input type="text" class="input-medium" id="city" value="<?php echo $a_data->city; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="zip">Zip Code</label>
                <div class="controls">
                  <input type="text" class="input-small" id="zip" value="<?php echo $a_data->zip; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="category">Category<span class="red">*</span></label>
                <div class="controls">
                  <select id="category">
                        <option value="1">BPO/ Call Centers</option>
                        <option value="2">Web/ Mobile Development</option>
                        <option value="3">Software Applications</option>
                        <option value="4">Hardware/ Peripherals</option>
                        <option value="5">Others</option>
                  </select>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="skype">Skype</label>
                <div class="controls">
                  <input type="text" class="input-medium" id="skype" value="<?php echo $a_data->skype; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">Website</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" id="website" size="16" type="text" value="<?php echo $a_data->website; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">Facebook</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" id="facebook" size="16" type="text" value="<?php echo $a_data->facebook; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">Twitter</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" id="twitter" size="16" type="text" value="<?php echo $a_data->twitter; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">LinkedIn</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" id="linkedin" size="16" type="text" value="<?php echo $a_data->linkedin; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">Youtube</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" id="youtube" size="16" type="text" value="<?php echo $a_data->youtube; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="description">Description/ Services</label>
                <div class="controls">
                  <textarea class="input-xlarge" id="description" rows="5"><?php echo $a_data->description; ?></textarea>
                </div>
          </div>
          <div class="control-group">
                  <p></p>
                  <span class="red">*</span> Required Fields
                  <p></p>
          </div>
          <div class="form-actions">
                <button type="submit" class="btn btn-danger register_btn">Submit</button>
                <button class="btn cancel_btn">Cancel</button>
          </div>
        </fieldset>
  </form>