<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$result = mysqli_query($conn,"SELECT * FROM elec_categ WHERE id='$category_id'");
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

if ($categ == 'Consumer Electronics') {
$opt = 'Select Consumer Electronics Type';
}
if ($categ == 'Home Appliances') {
$opt = 'Select Home Appliances Type';
}
if ($categ == 'Industrial and Specialized Equipment') {

$opt = 'Select Industrial Equipment Type';
}

if ($categ == 'Educational Devices') {
$opt = 'Select Educational Devices Type';
}
if ($categ == 'Emerging Technologies') {
$opt = 'Select Emerging Technologies Type';
}
if ($categ == 'Energy Management') {

$opt = 'Select Energy Management Type';
}
?>
<option><?php echo $opt?></option>
<?php
}
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM elec_spec_categ where category_id = '$category_id' ORDER BY spec_name ASC");

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>

<option value="<?php echo $row["id"];?>"><?php echo $row["spec_name"];?></option>
<?php

}
?>

