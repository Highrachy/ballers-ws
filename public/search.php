<?php 
require_once('includes/header.php');
require_once('includes/db.php');

$mysqli = db_connection();
$search_view = 'includes/search-invalid.php';
?>

<section class="search-page-form row">
    <div class="col-lg-2 col-12"></div>
    <div class="col-lg-8 col-12">
        <?php require_once('includes/dynamic-select-form.php'); ?>
    </div>
    <div class="col-lg-2 col-12"></div>
</section>

<?php
if (isset($_GET["index-form-search"])) {
    $state_id = $mysqli->real_escape_string($_GET['state']);
    $area_id = $mysqli->real_escape_string($_GET['area']);
    $house_type = $mysqli->real_escape_string($_GET['type']);

    $sql_query = "SELECT houses.type, houses.price, area.area_name, states.state_name, AVG(price) as average_price, MIN(price) as minimum_price, MAX(price) as maximum_price FROM houses INNER JOIN area INNER JOIN states WHERE houses.area_id = '$area_id' AND area.area_id = houses.area_id AND states.state_id = houses.state_id AND houses.type='$house_type'";
    $result = mysqli_query($mysqli,$sql_query);
    $no_of_results = $result->num_rows;
        
    if ($no_of_results > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $state = $row['state_name'];
        $area = $row['area_name'];
        $type = $row['type'];
        $avg_price = number_format($row['average_price']);
        $min_price = number_format($row['minimum_price']);
        $max_price = number_format($row['maximum_price']);
        $search_view = 'includes/search-valid.php';
    } else {
        $search_view = 'includes/search-invalid.php';
    }

    db_query_error($sql_query);
}


?>

<?php require_once($search_view); ?>

<?php require_once('includes/footer.php'); ?>
