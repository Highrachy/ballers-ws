<?php
require_once('config.php');

function db_connection() {
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$mysqli) {
        die("Error: Unable to connect to db" . PHP_EOL);
    }
    return $mysqli;
}
