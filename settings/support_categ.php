<div class="w3-row">
<div class="w3-threequarter w3-padding-large">
<form action="" method="POST"><button type="submit" class="login-btn w3-light-blue" name="list" value="Add Support Manager"><i class="fa fa-cog fa-spin"></i> Service Delivery Manager </button><button type="submit" class="login-btn w3-light-blue" name="list" value="Add Support Staff"><i class="fa fa-cog fa-spin"></i> Support Staff Allocation</button></form>
</div>
<div class="w3-quarter"></div>
</div>
<div class="w3-row-padding">
<div class="w3-threequarter w3-padding-large w3-border w3-white">
<h3 class="w3-text-light-green w3-hover-text-red">Service Delivery Manager Allocation</h3>
<form action="" method="post">
 <input type="hidden" name="list" value="Supports Category Form">  
  <p><label>Service Delivery Manager</label>     
<select class="body-parag w3-text-grey" id="sdm_name" name="sdm_name">
<option value="">Select Manager's Name</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM user_login WHERE access_prvlg='Admin'");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["fname"];?></option>
<?php

}
?>
</select>
</p>
 <p><label>Incident Categories</label>     
<select class="body-parag w3-text-grey" id="category-dropdown" name="tick_name">
<option value="">Select Incident Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM inc_category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row["id"];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select>
</p>

<p></p>
 <p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>

</form>
</div>
<div class="w3-quarter">
</div>
</div>

<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "../application/spec_categ.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#speciality-dropdown").html(result);
$('#adv-spec-dropdown').html('<option value="">Select Specialization</option>'); 
}
});
});    
$('#speciality-dropdown').on('change', function() {
var speciality_id = this.value;
$.ajax({
url: "../application/advance_spec.php",
type: "POST",
data: {
speciality_id: speciality_id
},
cache: false,
success: function(result){
$("#adv-spec-dropdown").html(result);
}
});
});
});
</script>