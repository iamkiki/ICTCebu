Dear <?php echo $s_name; ?>,

Thank you for registering at ICTCebu.com
Please click on the following link to verify your account.

<?php echo sprintf('<a href="%s">%s</a>','http://'.$_SERVER['SERVER_NAME'].'/access/verify/'.$i_uid.'/'.$s_hash, 'http://'.$_SERVER['SERVER_NAME'].'/access/verify/'.$i_uid.'/'.$s_hash); ?>