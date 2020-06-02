<?php
require_once('config.php');

function db_connection() {
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$mysqli) {
        die("Error: Unable to connect to db" . PHP_EOL);
    }
    return $mysqli;
}

function db_query_error($sql_query) {
    $mysqli = db_connection();

    if (!$mysqli->query($sql_query)) {
        var_dump(http_response_code(500));
        echo("ERROR: Failed to query MySQL: " . $mysqli->error);
    }
      
    $mysqli -> close();
}
