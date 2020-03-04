<?php
// Determine whether we're working on a local server
// or on the real server:
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
	$is_local_environment = TRUE;
	$configs = require('env-sample.php');
} else {
	$is_local_environment = FALSE;
	$configs = require('env.php');
}

// Define all constants from env here:
define('SITE_NAME','Ballers');
define('SMTP_EMAIL',  $configs['smtp_email']);
define('SMTP_PASSWORD',$configs['smtp_password']);
