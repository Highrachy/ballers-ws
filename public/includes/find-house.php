<?php
require_once('db.php');

function get_states() {
    $mysqli = db_connection();
    $sqlQuery = "SELECT * FROM `states` WHERE 1";
    $result = mysqli_query($mysqli,$sqlQuery);
    echo "<option selected disabled>State</option>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<option value='".$row['state_id']."'>".$row['state_name']."</option>";
    }

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    }
}

function get_area_based_on_state_id($state_id) {
    $mysqli = db_connection();
    $state_id = $mysqli->real_escape_string($state_id);
    $sqlQuery = "SELECT * FROM `area` WHERE `state_id` = '$state_id'";
    $result = mysqli_query($mysqli,$sqlQuery);
    $noOfResults = $result->num_rows;

    if ($noOfResults > 0) {
        echo "<option selected disabled>Area</option>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<option value='".$row['area_id']."'>".$row['area_name']."</option>";
        }
    } else {
        echo "<option selected disabled>No Area Available</option>";
    }
    
    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    }
}

function get_houses_based_on_area_id($state_id, $area_id) {
    $mysqli = db_connection();
    $state_id = $mysqli->real_escape_string($state_id);
    $area_id = $mysqli->real_escape_string($area_id);
    $sqlQuery = "SELECT * FROM `house-type` WHERE `area_id` = '$area_id' AND `state_id` = '$state_id'";
    $result = mysqli_query($mysqli,$sqlQuery);
    $noOfResults = $result->num_rows;
    
    if ($noOfResults > 0) {
        echo "<option selected disabled>House Type</option>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<option value='".$row['price']."'>".$row['size']."</option>";
        }
    } else {
        echo "<option selected disabled>No House Available</option>";
    }

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    }
}

if (!empty($_POST["state_id"]) && empty($_POST["area_id"])) {
    get_area_based_on_state_id($_POST["state_id"]);
} elseif (!empty($_POST["state_id"]) && !empty($_POST["area_id"])) {
    get_houses_based_on_area_id($_POST["state_id"], $_POST["area_id"]);
} 
