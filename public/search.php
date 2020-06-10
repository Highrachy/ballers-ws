<?php
require_once('includes/header.php');
require_once('includes/db.php');

$mysqli = db_connection();
$search_view = 'includes/search-invalid.php';
?>

<?php
if (isset($_GET["index-form-search"])) {
    $state_id = $mysqli->real_escape_string($_GET['state']);
    $area_id = $mysqli->real_escape_string($_GET['area']);
    $house_type = $mysqli->real_escape_string($_GET['type']);

    $sql_query = "SELECT houses.type, houses.price, area.area_name, area.latitude, area.longitude, states.state_name, AVG(price) as average_price, MIN(price) as minimum_price, MAX(price) as maximum_price FROM houses INNER JOIN area INNER JOIN states WHERE houses.area_id = '$area_id' AND area.area_id = houses.area_id AND states.state_id = houses.state_id AND houses.type='$house_type'";
    $result = mysqli_query($mysqli,$sql_query);
    $no_of_results = $result->num_rows;
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (empty($_GET['state']) || empty($_GET['area']) || empty($_GET['type'])) {
        $search_view = 'includes/search-invalid.php';
    } elseif (is_null($row['type']) || is_null($row['area_name']) || is_null($row['state_name'])) {
        $search_view = 'includes/search-invalid.php';
    } elseif ($no_of_results > 0) {
        $state = $row['state_name'];
        $area = $row['area_name'];
        $type = $row['type'];
        $avg_price = number_format($row['average_price']);
        $min_price = number_format($row['minimum_price']);
        $max_price = number_format($row['maximum_price']);
        $search_view = 'includes/search-valid.php';
        $latitude = $row['latitude'];
        $longitude = $row['longitude'];
    }
    db_query_error($sql_query);
}
?>

<section class="search-page-form">
    <div class="row">
        <div class="col-lg-2 col-12"></div>
        <div class="col-lg-8 col-12">
            <?php require_once('includes/dynamic-select-form.php'); ?>
        </div>
        <div class="col-lg-2 col-12"></div>
    </div>
</section>

<div class="search-page-wrapper" id="wrapper">
    <!-- sidemap -->
    <div id="sidemap-wrapper">
        <div class="sidemap-nav" id="sidemap-nav"></div>
    </div>
    <!-- /#sidemap-wrapper -->

    <?php require_once($search_view); ?>
</div>
<?php require_once('includes/footer.php'); ?>
