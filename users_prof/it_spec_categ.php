<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$stmt = mysqli_prepare($conn, "SELECT * FROM it_categ WHERE id=?");
mysqli_stmt_bind_param($stmt, 's', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

if ($categ == 'Hardware Assets') {
$opt = 'Select Hardware Type';
}
if ($categ == 'Software Assets') {
$opt = 'Select Software Type';
}
if ($categ == 'Network Assets') {

$opt = 'Select Network Type';
}
if ($categ == 'Data Assets') {
$opt = 'Select Data Type';
}
if ($categ == 'Security Assets') {
$opt = 'Select Security Type';
}
if ($categ == 'User Assets') {

$opt = 'Select User Type';
}

if ($categ == 'Physical Assets') {

$opt = 'Select Physical Type';
}

?>
<option><?php echo $opt?></option>
<?php
}
?>
<?php
$stmt = mysqli_prepare($conn, "SELECT * FROM it_spec_categ where category_id = ? ORDER BY spec_list ASC");
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

