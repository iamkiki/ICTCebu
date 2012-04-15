<div class="span9">
        <div class="alert alert-success success hidden">
            <a class="close" data-dismiss="alert">×</a>
            <strong>One More Step!</strong> Please check your email to verify your account.
        </div>
        <div class="alert alert-error hidden">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Oh snap!</strong> The email address is already registered.
        </div>
        <form class="form-horizontal register-form" method="post" enctype="multipart/form-data">
                <fieldset>
                  <div class="control-group email">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="email" value="<?php echo $a_data->email; ?>">
                          <p class="help-block e_email red hidden">Email address is invalid.</p>
                        </div>
                  </div>
                  <div class="control-group person">
                        <label class="control-label" for="person">Contact Person</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="person" value="<?php echo $a_data->person; ?>">
                          <p class="help-block e_person red hidden">Contact Person is required.</p>
                        </div>
                  </div>
                  <div class="control-group contact">
                        <label class="control-label" for="contact">Contact Number</label>
                        <div class="controls">
                          <input type="text" class="input-medium" id="contact" value="<?php echo $a_data->contact; ?>">
                          <p class="help-block e_contact red hidden">Contact Number is invalid.</p>
                        </div>
                  </div>
                  <div class="control-group password">
                        <label class="control-label" for="password">Change Password</label>
                        <div class="controls">
                          <input type="password" class="input-medium" id="password">
                          <p class="help-block e_password red hidden">Must be atleast 6 characters</p>
                        </div>
                  </div>
                  <div class="control-group confirm_password">
                        <label class="control-label" for="confirm_password">Confirm Password</label>
                        <div class="controls">
                          <input type="password" class="input-medium" id="confirm_password">
                          <p class="help-block e_confirm_password red hidden">Must match password.</p>
                        </div>
                  </div>
                  <div class="form-actions">
                        <button type="submit" class="btn btn-danger register_btn">Submit</button>
                        <button class="btn cancel_btn">Cancel</button>
                  </div>
                </fieldset>
          </form>
</div><!--/span-->