<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$result = mysqli_query($conn,"SELECT * FROM auto_categ WHERE id='$category_id'");
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

if ($categ == 'Passenger Vehicles') {
$opt = 'Select Passenger Vehicles Type';
}
if ($categ == 'SUVs (Sport Utility Vehicles)') {
$opt = 'Select SUVs Type';
}
if ($categ == 'Trucks') {

$opt = 'Select Trucks Type';
}

if ($categ == 'Vans') {
$opt = 'Select Vans Type';
}
if ($categ == 'Motorcycles') {
$opt = 'Select Motorcycles Type';
}
if ($categ == 'Electric and Hybrid Vehicles') {

$opt = 'Select Electric and Hybrid Vehicles Type';
}

if ($categ == 'Specialty Vehicles') {
$opt = 'Select Specialty Vehicles Type';
}
if ($categ == 'Commercial Vehicles') {

$opt = 'Select Commercial Vehicles Type';
}
?>
<option><?php echo $opt?></option>
<?php
}
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM auto_spec_categ where category_id = '$category_id' ORDER BY spec_name ASC");

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>

<option value="<?php echo $row["id"];?>"><?php echo $row["spec_name"];?></option>
<?php

}
?>

