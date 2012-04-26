<div class="span9">
      <div class="thumbnail">
        <?php $s_image = '/img/260x180.gif';
            if($a_user->logo != '') {
                $a_pathinfo = pathinfo( $a_user->logo );
                $s_image = '/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
            } ?>
        <img src="<?php echo $s_image; ?>" alt="">
      </div>
      <hr>
      <form id="form_logo" class="form-horizontal" method="POST" enctype="multipart/form-data" action="/companies/upload/<?php echo $a_user->id; ?>">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="logo">Company Logo</label>
            <div class="controls">
              <input class="input-file" name="logo" id="logo" type="file">
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-danger">Upload</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
</div>