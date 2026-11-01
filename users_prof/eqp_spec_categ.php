<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$result = mysqli_query($conn,"SELECT * FROM eqp_categ WHERE id='$category_id'");
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

if ($categ == 'Construction Equipment') {
$opt = 'Select Construction Equipment Type';
}
if ($categ == 'Agricultural Equipment') {
$opt = 'Select Agricultural Equipment Type';
}
if ($categ == 'Manufacturing Equipment') {

$opt = 'Select Manufacturing Equipment Type';
}

if ($categ == 'Mining Equipment') {
$opt = 'Select Mining Equipment Type';
}
if ($categ == 'Material Handling Equipment') {
$opt = 'Select Material Handling Equipment Type';
}
if ($categ == 'Facility Maintenance Equipment') {

$opt = 'Select Facility Maintenance Equipment Type';
}
if ($categ == 'Energy Production Equipment') {

$opt = 'Select Energy Production Equipment Type';
}

?>
<option><?php echo $opt?></option>
<?php
}
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM eqp_spec_categ where category_id = '$category_id' ORDER BY spec_list ASC");

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>

<option value="<?php echo $row["id"];?>"><?php echo $row["spec_list"];?></option>
<?php

}
?>

