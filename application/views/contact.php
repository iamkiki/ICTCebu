<div class="row-fluid min600">
<div class="span3">
  <?php $this->load->view('sidebar'); ?>
</div><!--/span-->
<div class="span9">
                <legend>Contact</legend>
                <div class="alert alert-success success hidden">
                    <a class="close" data-dismiss="alert">×</a>
                    <strong>Thank You!</strong> We will get back to you as soon as we can.
                </div>
                <form class="form-horizontal">
                        <fieldset>
                          <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                  <input type="text" class="input-xlarge" id="name">
                                </div>
                          </div>
                          <div class="control-group email">
                                <label class="control-label" for="email">Email Address</label>
                                <div class="controls">
                                  <input type="text" class="input-xlarge" id="email">
                                  <span class="help-inline hidden">Invalid email address.</span>
                                </div>
                          </div>
                          <div class="control-group">
                                <label class="control-label" for="textarea">Message</label>
                                <div class="controls">
                                  <textarea class="input-xlarge" id="message" rows="12"></textarea>
                                </div>
                          </div>
                          <div class="form-actions">
                                <button type="submit" class="btn btn-danger contact_btn">Submit</button>
                                <button class="btn">Cancel</button>
                          </div>
                        </fieldset>
                  </form>
        </div><!--/span-->
</div><!--/row-->