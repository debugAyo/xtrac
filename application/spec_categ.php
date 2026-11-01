<?php

require_once "../link/connect.php";
$category_id = $_POST["category_id"];

$result = mysqli_query($conn,"SELECT * FROM inc_category WHERE id='$category_id'");
while($row = mysqli_fetch_array($result)) {
$categ = $row['cat_name'];

?>
<?php
}
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM inc_speciality where category_id = '$category_id' ORDER BY spec_name ASC");

?>


<?php
 while($row = mysqli_fetch_array($result)) {
 

?>
<option value="<?php echo $row["id"];?>"><?php echo $row["spec_name"];?></option>
<?php

}
?>

