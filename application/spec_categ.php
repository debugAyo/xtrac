<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$stmt = mysqli_prepare($conn,"SELECT * FROM inc_category WHERE id=?");
mysqli_stmt_bind_param($stmt, 'i', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

?>
<?php
}
?>
<?php
$stmt = mysqli_prepare($conn,"SELECT * FROM inc_speciality where category_id = ? ORDER BY spec_name ASC");
mysqli_stmt_bind_param($stmt, 'i', $category_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>
<option value="<?php echo $row["id"];?>"><?php echo $row["spec_name"];?></option>
<?php

}
?>

