<?php 
require_once('includes/header.php');
require_once('includes/db.php');

$mysqli = db_connection();
$search_view = 'includes/search-invalid.php';

if (isset($_GET["index-form-search"])) {
    $state_id = $mysqli->real_escape_string($_GET['state']);
    $area_id = $mysqli->real_escape_string($_GET['area']);
    $house_id = $mysqli->real_escape_string($_GET['type']);

    $sqlQuery = "SELECT * FROM `house-type` WHERE `house_id` = '$house_id' AND `area_id` = '$area_id' AND `state_id` = '$state_id'";
    $result = mysqli_query($mysqli,$sqlQuery);
    $noOfResults = $result->num_rows;
        
    if ($noOfResults > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $state = $row['state_name'];
        $area = $row['area_name'];
        $type = $row['type'];
        $price = number_format($row['price']);
        $search_view = 'includes/search-valid.php';
    } else {
        $search_view = 'includes/search-invalid.php';
    }

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    }
}

?>

<?php require_once($search_view); ?>

<?php require_once('includes/footer.php'); ?>
