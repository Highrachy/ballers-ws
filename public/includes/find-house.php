<?php
require_once('db.php');

function get_states() {
    $mysqli = db_connection();
    $sql_query = "SELECT * FROM `states`";
    $result = mysqli_query($mysqli,$sql_query);
    $json_response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $json_response[] = $row;
    }
    echo json_encode($json_response);
    db_query_error($sql_query);
}

function get_area_based_on_state_id($state_id) {
    $mysqli = db_connection();
    $state_id = $mysqli->real_escape_string($state_id);
    $sql_query = "SELECT * FROM `area` WHERE `state_id` = '$state_id'";
    $result = mysqli_query($mysqli,$sql_query);
    $json_response = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $json_response[] = $row;
    }
    echo json_encode($json_response);
    db_query_error($sql_query);
}

function get_houses_based_on_area_id($state_id, $area_id) {
    $mysqli = db_connection();
    $state_id = $mysqli->real_escape_string($state_id);
    $area_id = $mysqli->real_escape_string($area_id);
    $sql_query = "SELECT * FROM `house-type` WHERE `area_id` = '$area_id' AND `state_id` = '$state_id'";
    $result = mysqli_query($mysqli,$sql_query);
    $json_response = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $json_response[] = $row;
    }
    echo json_encode($json_response);
    db_query_error($sql_query);
}

if (!empty($_POST["load_state"])) {
    get_states();
} elseif (!empty($_POST["state_id"]) && empty($_POST["area_id"])) {
    get_area_based_on_state_id($_POST["state_id"]);
} elseif (!empty($_POST["state_id"]) && !empty($_POST["area_id"])) {
    get_houses_based_on_area_id($_POST["state_id"], $_POST["area_id"]);
} 
