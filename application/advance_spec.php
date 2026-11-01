<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];

$result = mysqli_query($conn,"SELECT * FROM inc_speciality WHERE id='$speciality_id'");
$row = mysqli_fetch_array($result);
$categ = $row['category_id'];

?>

<?php
require_once "../link/connect.php";
$speciality_id = $_POST["speciality_id"];
$result = mysqli_query($conn,"SELECT * FROM adv_speciality where speciality_id = '$speciality_id'");
?>

<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["adv_spec_name"];?></option>
<?php
}
?>