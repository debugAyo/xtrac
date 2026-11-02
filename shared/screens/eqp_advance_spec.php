<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];

$stmt = mysqli_prepare($conn, "SELECT * FROM eqp_spec_categ WHERE id=?");
mysqli_stmt_bind_param($stmt, 's', $speciality_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
$categ = $row['category_id'];
/*
if ($categ == '1') {
$opt = 'Select School';
}
if ($categ == '2') {
$opt = 'Select Country Visa';
}
if ($categ == '3') {

$opt = 'Select Examination State';
}*/
?>


<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];
$stmt = mysqli_prepare($conn, "SELECT * FROM eqp_adv_spec_categ WHERE spec_categ_id = ?");
mysqli_stmt_bind_param($stmt, 's', $speciality_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

<?php
while($row = mysqli_fetch_array($result)) {
?>

<option value="<?php echo $row["id"];?>"><?php echo $row["type"];?></option>
<?php
}
?>