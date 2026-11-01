<?php

$dev_id = isset($_POST['dev_id']) ? $_POST['dev_id'] : '';

include '../link/connect.php';

if (!$dev_id) {
    echo '<br><p style="margin-left: 40px">Device ID is missing</p>';
    include 'comment.php';
    exit();
}

$sql = "SELECT * FROM additem WHERE devid='$dev_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo '<br><p style="margin-left: 40px"> This <b>Item </b>Does Not Exist Here</p>';
    include 'comment.php';
    exit();
}

$myrow = mysqli_fetch_array($result);
$categ = $myrow['category'];

$forms = array(
    'IT Infrastructure'          => '../store/sto_update_form.php',
    'Consumables'                => '../store/sto_consum_update_form.php',
    'Vehicles'                   => '../store/sto_auto_update_form.php',
    'Buildings'                  => '../store/sto_build_update_form.php',
    'Electronics Appliances'     => '../store/sto_elect_update_form.php',
    'Furniture'                  => '../store/sto_furn_update_form.php',
    'Plant and Equipment'        => '../store/sto_plant_update_form.php',
    'Lands'                      => '../store/sto_land_update_form.php',
);

if (isset($forms[$categ]) && file_exists($forms[$categ])) {
    include $forms[$categ];
} else {
    echo '<br><p style="margin-left: 40px">Update form for category <b>' . htmlspecialchars($categ) . '</b> is not available</p>';
    include 'comment.php';
}

?>
