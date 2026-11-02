<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];

$stmt = mysqli_prepare($conn,"SELECT * FROM inc_speciality WHERE id=?");
mysqli_stmt_bind_param($stmt, 'i', $speciality_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
$categ = $row['category_id'];

?>

<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];
$stmt = mysqli_prepare($conn,"SELECT * FROM adv_speciality where speciality_id = ?");
mysqli_stmt_bind_param($stmt, 'i', $speciality_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["adv_spec_name"];?></option>
<?php
}
?>