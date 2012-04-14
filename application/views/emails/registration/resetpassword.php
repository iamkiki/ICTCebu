Dear <?php echo $s_name; ?>,


Here is your temporary password: <?php echo $s_password; ?>
</br>
Please click on the link below to log in.
<a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/access'; ?>"><?php echo 'http://'.$_SERVER['SERVER_NAME'].'/access'; ?></a>


Thanks!
