<div class="span9">
        <div class="alert alert-success success hidden">
            <a class="close" data-dismiss="alert">×</a>
            <strong>One More Step!</strong> Please check your email to verify your account.
        </div>
        <div class="alert alert-error hidden">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Oh snap!</strong> The email address is already registered.
        </div>
        <form class="form-horizontal edit-form" method="post" enctype="multipart/form-data">
                <fieldset>
                  <div class="control-group company_name">
                        <label class="control-label" for="company_name">Job Position<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="company_name">
                          <p class="help-block e_company_name red hidden">Job Position is required.</p>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="address">Objectives</label>
                        <div class="controls">
                          <textarea class="input-xlarge" id="description" rows="3"></textarea>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="address">Location</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="location">
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="zip">Experience</label>
                        <div class="controls">
                          <input type="text" class="input-small" id="zip">
                          <span class="help-inline">0 - 10 yrs (0 for No Experience needed)</span>
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
                        <label class="control-label" for="city">Expiry Date<span class="red">*</span></label>
                        <div class="controls">
                          <select id="category" class="span1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="5">6</option>
                                <option value="5">12</option>
                          </select>
                          <span class="help-inline">months</span>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="address">Email<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="location">
                          <span class="help-inline">Applications will be forwarded to this Email.</span>
                        </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label" for="address">Requirements<span class="red">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="location"><p></p>
                          <input type="text" class="input-xlarge" id="location"><p></p>
                          <input type="text" class="input-xlarge" id="location"><p></p>
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
</div><!--/span-->