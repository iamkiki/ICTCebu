<div class="alert alert-success success hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>One More Step!</strong> Please check your email to verify your account.
</div>
<div class="alert alert-error hidden">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Oh snap!</strong> The email address is already registered.
</div>
<form id="form_post" class="form-horizontal edit-form" method="post" enctype="multipart/form-data">
    <fieldset>
      <div class="control-group title">
            <label class="control-label" for="title">Job Position<span class="red">*</span></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="title" id="title">
              <p class="help-inline e_title red hidden">Job Position is required.</p>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="objectives">Objectives</label>
            <div class="controls">
              <textarea class="input-xlarge" name="objectives" id="objectives" rows="3"></textarea>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="location">Location</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="location" id="location">
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="category">Category<span class="red">*</span></label>
            <div class="controls">
              <select id="category" name="category">
                    <option value="1">BPO/ Call Centers</option>
                    <option value="2">Web/ Mobile Development</option>
                    <option value="3">Software Applications</option>
                    <option value="4">Hardware/ Peripherals</option>
                    <option value="5">Others</option>
              </select>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="experience">Experience</label>
            <div class="controls">
              <select id="experience" class="span1" name="experience">
                    <option value="1">0</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                    <option value="5">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">7</option>
                    <option value="5">8</option>
                    <option value="5">9</option>
                    <option value="5">10</option>
              </select>
              <span class="help-inline">(0 for No Experience needed)</span>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="expiry">Expiry Date<span class="red">*</span></label>
            <div class="controls">
              <select id="expiry" class="span1" name="expiry">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">12</option>
              </select>
              <span class="help-inline">month(s)</span>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="email">Email<span class="red">*</span></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email">
              <span class="help-inline">Applications will be forwarded to this Email.</span>
            </div>
      </div>
      <div class="control-group">
            <label class="control-label" for="requirements">Requirements<span class="red">*</span></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="requirements[]" id="requirements"><p></p>
              <input type="text" class="input-xlarge" name="requirements[]" id="requirements"><p></p>
              <input type="text" class="input-xlarge" name="requirements[]" id="requirements"><p></p>
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
