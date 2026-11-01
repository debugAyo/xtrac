<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Asset Category</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()">
<p>
<select class="body-parag w3-text-grey" name="list" id="ass_categ" onchange="this.form.submit()">
<option value="">Select Asset Category</option>
<?php
//$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM asset_category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['categ'];?>"><?php echo $row["categ"];?></option>
<?php

}
?>
</select>
</p>
</form>
<script>
$(document).ready(function() {
  $('#proj_id').change(function() {
    $('#myForm').submit();
  });
});
</script>
</div>
<div class="w3-quarter">
</div>
</div>