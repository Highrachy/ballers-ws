<?php
require_once('config.php');

function db_connection() {
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$mysqli) {
        die("Error: Unable to connect to db" . PHP_EOL);
    }

    return $mysqli;
}

function save_contacts_in_db($full_name, $email, $phone='') {
    $mysqli = db_connection();
    $full_name = $mysqli->real_escape_string($full_name);
    $email = $mysqli->real_escape_string($email);
    $phone = $mysqli->real_escape_string($phone);
    $sqlQuery = "INSERT INTO `visitors`(`fullName`, `email`, `phone`) VALUES ('$full_name','$email','$phone')";

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    }
}
