<?php
if (!session_start()) {
    session_start();
}

//Default TimeZone
date_default_timezone_set('Africa/Lagos');

// Determine whether we're working on a local server
// or on the real server:
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
    $local = $debug = true;
} else {
    $local = $debug = false;
}


$server_dir = realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
define('SERVER_DIR', $server_dir);

define('INC_DIR', SERVER_DIR.'inc/');
define('CLASS_DIR', SERVER_DIR.'class/');

//Class Autoloader
function my_autoloader($className)
{
    $className = strtolower($className);
    $path = CLASS_DIR."{$className}.class.php";

    if (file_exists($path)) {
        require_once($path);
    } else {
        die("The file {$className}.php could not be found.");
    }
}

spl_autoload_register('my_autoloader');
