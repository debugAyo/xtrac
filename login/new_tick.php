
<div class="w3-row-padding">
<div class="w3-threequarter w3-border w3-padding-large">
<p class="s4-btn">Support Services</p>

<form action="auth_new_tick.php" method="POST"><br />

<select class="body-parag w3-text-grey" id="category-dropdown" name="tick_name">
<option value="">Select Registration Type</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select>

<p><label for="specialization"></label>
<select class="body-parag w3-text-grey" id="speciality-dropdown" name="int_service">
</select></p>
                     

<label for="adv_spec"></label>
<select class="body-parag w3-text-grey" id="adv-spec-dropdown" name="adv_spec">
</select>
<p></p>
<label for="specialization"></label>
<input type="hidden" class="body-parag" name="cal_name" placeholder="Name" value="<?php echo $fname;?>" readonly>
<input type="hidden" class="body-parag" name="cal_phone" placeholder="Phone No" value="<?php echo $calphone;?>" readonly >
<input type="hidden" class="body-parag" name="cal_address" placeholder="Address" value="<?php echo $caladdress;?>" readonly>
<input type="hidden" class="body-parag" name="cal_email" placeholder="E-mail Address" value="<?php echo $calemail;?>" readonly>



<label><h4>Date Called</h4></label>
<input type="text" id="datepicker" class="" name="open_dt" value="<?php echo date('Y-m-d H:i:s') ; ?>">

<label><h4>Brief Description of Fault or Service on Request</h4></label>
<textarea rows="5" class="" name="desc" cols="20" placeholder="Incident Description"></textarea>
<p>
<select size="1" class="" name="impct" >
<option>Select Impact Level</option>
<option>Critical</option>
<option>Bearable</option>
<option>Minimal</option>
</select></p>
<p>
<select size="1" class="" name="prior" >
<option>Select Priority Level</option>
<option>1 - High</option>
<option>3 - Low</option>
<option>2 - Medium</option>
</select></p>
<p>
<select class="" size="1" name="stat" >
	<option>Select Status</option>
	<option>Awaiting Response</option>
	<option>Being Resolved</option>
	<option>Closed</option>
	<option>Escalated</option>
	<option>Open</option>
	<option>On Hold</option>
	<option>Resolved</option>
	</select></p>

<label for=""></label>

 <p><center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></p></form>
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

</body>
</html>