<div class="row-fluid">
<div class="span3">
  <?php $this->load->view('sidebar'); ?>
</div><!--/span-->
<div class="span9">
                <legend>Contact</legend>
                <form class="form-horizontal">
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
                                <label class="control-label" for="textarea">Message</label>
                                <div class="controls">
                                  <textarea class="input-xlarge" id="textarea" rows="12"></textarea>
                                </div>
                          </div>
                          <div class="form-actions">
                                <button type="submit" class="btn btn-danger">Submit</button>
                                <button class="btn">Cancel</button>
                          </div>
                        </fieldset>
                  </form>
        </div><!--/span-->
</div><!--/row-->