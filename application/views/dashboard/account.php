<?php $a_user = $this->session->userdata('auth'); ?>
<legend><?php echo $a_user->name; ?></legend>
<div class="span6 alert alert-success success hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Success!</strong> Your account information has been updated.
</div>
<div class="span6 alert alert-error hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Oh snap!</strong> Something went wrong.
</div>
<form id="form_account" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <fieldset>
          <input type="hidden" name="id" id="id" value="<?php echo $a_data->id; ?>">
          <div class="control-group email">
                <label class="control-label" for="email">Email Address</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" name="email" id="email" value="<?php echo $a_data->email; ?>">
                  <p class="help-inline e_email red hidden">Email address is invalid.</p>
                </div>
          </div>
          <div class="control-group person">
                <label class="control-label" for="person">Contact Person</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" name="person" id="person" value="<?php echo $a_data->person; ?>">
                  <p class="help-inline e_person red hidden">Contact Person is required.</p>
                </div>
          </div>
          <div class="control-group contact">
                <label class="control-label" for="contact">Contact Number</label>
                <div class="controls">
                  <input type="text" class="input-medium" name="contact" id="contact" value="<?php echo $a_data->contact; ?>">
                  <p class="help-inline e_contact red hidden">Contact Number is invalid.</p>
                </div>
          </div>
          <div class="control-group password">
                <label class="control-label" for="password">Change Password</label>
                <div class="controls">
                  <input type="password" class="input-medium" name="password" id="password">
                  <p class="help-inline e_password red hidden">Must be atleast 6 characters</p>
                  <p class="help-block">Leave empty if you don't want to update password.</p>
                </div>
          </div>
          <div class="control-group confirm_password">
                <label class="control-label" for="confirm_password">Confirm Password</label>
                <div class="controls">
                  <input type="password" class="input-medium" id="confirm_password">
                  <p class="help-inline e_confirm_password red hidden">Must match password.</p>
                </div>
          </div>
          <div class="form-actions">
                <button type="submit" class="btn btn-danger">Submit</button>
                <button class="btn cancel_btn">Cancel</button>
          </div>
        </fieldset>
</form>