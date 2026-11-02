<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$stmt = mysqli_prepare($conn, "SELECT * FROM arms_categ WHERE id=?");
mysqli_stmt_bind_param($stmt, 'i', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];
/*
if ($categ == 'Admission Processing') {
$opt = 'Select Admission Type';
}
if ($categ == 'Visa Processing') {
$opt = 'Select Visa Type';
}
if ($categ == 'International Examinations') {

$opt = 'Select Examination Type';
}*/
?>

<?php
}
?>
<?php
$stmt = mysqli_prepare($conn, "SELECT * FROM arms_spec_categ where category_id = ? ORDER BY spec_list ASC");
mysqli_stmt_bind_param($stmt, 'i', $category_id);
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

