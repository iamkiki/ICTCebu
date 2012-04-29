<div class="span6 alert alert-success success hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Success!</strong> Your company information has been updated.
</div>
<div class="span6 alert alert-error hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Oh snap!</strong> Something went wrong.
</div>
<form id="form_editprofile" class="form-horizontal" method="POST">
        <fieldset>
          <input type="hidden" name="id" id="id" value="<?php echo $a_data->id; ?>">
          <div class="control-group company_name">
                <label class="control-label" for="name">Company Name<span class="red">*</span></label>
                <div class="controls">
                  <input type="text" class="input-xlarge" name="name" id="name" value="<?php echo $a_data->name; ?>">
                  <p class="help-block e_company_name red hidden">Company name is required.</p>
                </div>
          </div>
          <div class="control-group quote">
                <label class="control-label" for="description">Company Tagline/Quote</label>
                <div class="controls">
                  <textarea class="input-xlarge" name="quote" id="quote" rows="2"><?php echo $a_data->quote; ?></textarea>
                </div>
          </div>
          <div class="control-group source">
                <label class="control-label" for="source">Source</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" name="source" id="source" value="<?php echo $a_data->source; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="overview">Overview</label>
                <div class="controls">
                  <textarea class="input-xlarge" name="overview" id="overview" rows="4"><?php echo $a_data->overview; ?></textarea>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="address">Address</label>
                <div class="controls">
                  <textarea class="input-xlarge" name="address" id="address" rows="2"><?php echo $a_data->address; ?></textarea>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="city">City</label>
                <div class="controls">
                  <input type="text" class="input-medium" name="city" id="city" value="<?php echo $a_data->city; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="zip">Zip Code</label>
                <div class="controls">
                  <input type="text" class="input-small" name="zip" id="zip" value="<?php echo $a_data->zip; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="category">Category<span class="red">*</span></label>
                <div class="controls">
                  <select id="category" name="category">
                        <option value="1" <?php echo $a_data->category == 1 ? 'selected': ''; ?>>BPO/ Call Centers</option>
                        <option value="2" <?php echo $a_data->category == 2 ? 'selected': ''; ?>>Web/ Mobile Development</option>
                        <option value="3" <?php echo $a_data->category == 3 ? 'selected': ''; ?>>Software Applications</option>
                        <option value="4" <?php echo $a_data->category == 4 ? 'selected': ''; ?>>Hardware/ Peripherals</option>
                        <option value="5" <?php echo $a_data->category == 5 ? 'selected': ''; ?>>Others</option>
                  </select>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="skype">Skype</label>
                <div class="controls">
                  <input type="text" class="input-medium" name="skype" id="skype" value="<?php echo $a_data->skype; ?>">
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="website">Website</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" name="website" id="website" size="16" type="text" value="<?php echo $a_data->website; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="facebook">Facebook</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" name="facebook" id="facebook" size="16" type="text" value="<?php echo $a_data->facebook; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="twitter">Twitter</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" name="twitter" id="twitter" size="16" type="text" value="<?php echo $a_data->twitter; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="linkedin">LinkedIn</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" name="linkedin" id="linkedin" size="16" type="text" value="<?php echo $a_data->linkedin; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="youtube">Youtube</label>
                <div class="controls">
                  <div class="input-prepend">
                        <span class="add-on">http://</span><input class="span3" name="youtube" id="youtube" size="16" type="text" value="<?php echo $a_data->youtube; ?>">
                  </div>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="description">Services</label>
                <div class="controls">
                  <textarea class="input-xlarge" name="description" id="description" rows="5"><?php echo $a_data->description; ?></textarea>
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