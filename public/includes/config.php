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

// CONSTANTS
define('SITE_NAME','Ballers');

// DATABASE
define('DB_HOST',$configs['db_host']);
define('DB_NAME',$configs['db_name']);
define('DB_USER',$configs['db_user']);
define('DB_PASS',$configs['db_pass']);

// SMTP FOR SENDING EMAILS
define('SEND_EMAIL_TO',  $configs['send_email_to']);
define('SEND_EMAIL_CC',  $configs['send_email_cc']);
define('SMTP_EMAIL',  $configs['smtp_email']);
define('SMTP_PASSWORD',$configs['smtp_password']);

// API key
define('MAP_API_KEY', $configs['map_api_key']);
