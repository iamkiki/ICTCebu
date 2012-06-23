<div class="row-fluid">
<div class="span8">
        <legend>Register Company for Free</legend>
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
                  <div class="control-group company_name">
                        <label class="control-label" for="company_name">Company Name<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="company_name">
                          <p class="help-block e_company_name red hidden">Company name is required.</p>
                        </div>
                  </div>
                  <div class="control-group email">
                        <label class="control-label" for="email">Email Address<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="email">
                          <p class="help-block e_email red hidden">Email address is invalid.</p>
                        </div>
                  </div>
                  <div class="control-group password">
                        <label class="control-label" for="password">Password<span class="red">*</span></label>
                        <div class="controls">
                          <input type="password" class="input-medium" id="password">
                          <p class="help-block e_password">Must be atleast 6 characters</p>
                        </div>
                  </div>
                  <div class="control-group confirm_password">
                        <label class="control-label" for="confirm_password">Confirm Password<span class="red">*</span></label>
                        <div class="controls">
                          <input type="password" class="input-medium" id="confirm_password">
                          <p class="help-block e_confirm_password red hidden">Must match password.</p>
                        </div>
                  </div>
                  <div class="control-group person">
                        <label class="control-label" for="person">Contact Person<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="person">
                          <p class="help-block e_person red hidden">Contact Person is required.</p>
                        </div>
                  </div>
                  <div class="control-group contact">
                        <label class="control-label" for="contact">Contact Number<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-medium" id="contact">
                          <p class="help-block e_contact red hidden">Contact Number is invalid.</p>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                          <textarea class="input-xlarge" id="description" rows="2"></textarea>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="city">City</label>
                        <div class="controls">
                          <input type="text" class="input-medium" id="city">
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="zip">Zip Code</label>
                        <div class="controls">
                          <input type="text" class="input-small" id="zip">
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
                        <label class="control-label" for="website">Website</label>
                        <div class="controls">
                          <div class="input-prepend">
                                <span class="add-on">http://</span><input class="span3" id="website" size="16" type="text">
                          </div>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="description">Description/ Services</label>
                        <div class="controls">
                          <textarea class="input-xlarge" id="description" rows="5"></textarea>
                        </div>
                  </div>
                  <div class="control-group agree">
                          <p></p>
                          <span class="red">*</span> Required Fields
                          <p></p><p></p>
                          <label class="checkbox">
                                <input type="checkbox" id="agree" value="1">
                                I Agree with the Terms and Agreements of ictCebu.com <a href="#">Privacy Policy</a>
                                <p class="help-block e_agree red hidden">You must agree with the terms and agreement in order to continue.</p>
                          </label>
                  </div>
                  <div class="form-actions">
                        <button type="submit" class="btn btn-danger register_btn">Submit</button>
                        <button class="btn cancel_btn">Cancel</button>
                  </div>
                </fieldset>
          </form>
</div><!--/span-->
<div class="span4">
    <form class="well form-horizontal login">
              <div class="n-legend">Have an account? Login</div>
              <input type="text" class="input-xlarge" id="txt_email" placeholder="Email">
              <p></p>
              <input type="password" class="input-xlarge" id="txt_password" placeholder="Password">
              <p>
                <p class="help-block e_login red hidden"></p>
              <p>
              <button type="submit" class="btn btn-danger login_btn">Login</button>
              <button type="submit" class="btn forgot_btn">Forgot Password</button>
    </form>
    <form class="well form-horizontal forgot_pass hidden">
              <div class="n-legend">Forgot Password?</div>
              <input type="text" class="input-xlarge" id="rs_email" placeholder="Email">
              <p>
                  <p class="help-block e_reset red hidden"></p>
              <p>
              <button type="submit" class="btn btn-danger reset_btn">Submit</button>
              <button type="submit" class="btn">Cancel</button>
              <div class="alert alert-success reset hidden">
                <a class="close" data-dismiss="alert">×</a>
                Please check your email for your new password.
            </div>
    </form>
    <blockquote>
      <h3>Some Website Overview</h3>
      <p>Cupcake ipsum dolor sit amet lemon drops. Marzipan topping topping. Muffin tootsie roll sweet wafer wafer danish jelly beans. Halvah I love candy I love tart oat cake ice cream macaroon. Sesame snaps gummi bears tart. Chocolate cake ice cream dessert chocolate cake cake bonbon topping gingerbread. Jelly-o fruitcake gingerbread chocolate apple pie I love ice cream applicake. Lemon drops icing I love I love liquorice danish pastry. Brownie caramels caramels I love dessert lemon drops powder. I love pudding oat cake sweet roll.</p>
    </blockquote>
</div><!--/span-->
</div> 