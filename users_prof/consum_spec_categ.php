<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$stmt = mysqli_prepare($conn, "SELECT * FROM consum_categ WHERE id=?");
mysqli_stmt_bind_param($stmt, 's', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

if ($categ == 'Office Supplies') {
$opt = 'Select Office Supplies Type';
}
if ($categ == 'IT Consumables') {
$opt = 'Select IT Consumables Type';
}
if ($categ == 'Cleaning Supplies') {

$opt = 'Select Cleaning Supplies Type';
}
if ($categ == 'Facilities Maintenance Supplies') {
$opt = 'Select Facilities Maintenance Supplies Type';
}
if ($categ == 'Breakroom Supplies') {
$opt = 'Select Breakroom Supplies Type';
}
if ($categ == 'Promotional Materials') {

$opt = 'Select Promotional Materials Type';
}

if ($categ == 'Event Supplies') {
$opt = 'Select Event Supplies Type';
}
if ($categ == 'Specialized Consumables') {

$opt = 'Select Specialized Consumable Type';
}


?>
<option><?php echo $opt?></option>
<?php
}
?>
<?php
$stmt = mysqli_prepare($conn, "SELECT * FROM consum_spec_categ where category_id = ? ORDER BY spec_list ASC");
mysqli_stmt_bind_param($stmt, 's', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>

<option value="<?php echo $row["id"];?>"><?php echo $row["spec_list"];?></option>
<?php

}
?>

