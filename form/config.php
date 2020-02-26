<?php

//check if environment is local or prod
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
    //db connection
    $dbHost = "localhost";
    $dbName = "ballers_new";
    $dbUser = "root";
    $dbPass = "";
    $mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$mysqli) {
        echo "did  not connect";
        echo "Error: Unable to connect to db" . PHP_EOL;
        exit;
    } else {
        //connected to db
        echo "connected to db";
    }
} else {
    //code for production db connection here
    
    
    if($mysqli){
        echo "connected to prod db";
    } else {
        echo "Error: Unable to connect to db" . PHP_EOL;
    }
}