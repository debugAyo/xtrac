<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];

$result = mysqli_query($conn,"SELECT * FROM consum_spec_categ WHERE id='$speciality_id'");
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
$result = mysqli_query($conn,"SELECT * FROM consum_adv_spec_categ WHERE spec_categ_id = '$speciality_id'");
?>

<?php
while($row = mysqli_fetch_array($result)) {
?>

<option value="<?php echo $row["id"];?>"><?php echo $row["type"];?></option>
<?php
}
?>