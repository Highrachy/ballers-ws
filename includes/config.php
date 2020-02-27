<?php

//check if environment is local or prod
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
    $dbHost = "localhost";
    $dbName = "ballers_new";
    $dbUser = "root";
    $dbPass = "";
} else {
    //code for production db connection here
    
}

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$mysqli) {
    die("Error: Unable to connect to db" . PHP_EOL);
} else {
    // echo "connected to db";
}

