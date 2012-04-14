<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Emailer
|--------------------------------------------------------------------------
|
*/
$config['protocol'] = 'smtp';
$config['smtp_host'] = "localhost";
$config['smtp_port'] = '25';
$config['charset'] = "utf-8";
$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';

/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = "ssl://smtp.googlemail.com";
$config['smtp_port'] = '465';
$config['smtp_user'] = 'jane.doe@nerubia.com';
$config['smtp_pass'] = 'passw0rt';
$config['charset'] = "utf-8";
$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';
*/
