<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Ongoing Interventions</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Ongoing Intervention Form" onchange="this.form.submit()">
<input type="hidden" name="status" value="Ongoing" onchange="this.form.submit()">
<?php
//if (isset ($_POST['submit']) )  {
$proj_id = $_POST['proj_id'];
//}

include '../link/connect.php';

$sql ="SELECT * FROM projects WHERE id = '$proj_id'";

$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result) ) {



?>
<input type="hidden" name="proj_id" class="date" value="<?php echo $row['projectid'];?>"  readonly>
<label for="intervention" style="font-size:14px; margin-top:-2%">INTERVENTION PROGRAMME</label>
<input type="text" name="interv" class="date" value="<?php echo $row['interv_prog'];?>"  readonly>
<label for="interv-prog" style="font-size:14px; margin-top:-2%">SPECIFIC PROGRAMME</label>
<input type="text" name="interv_pro" class="date" value="<?php echo $row['projtitle'];?>"  readonly>
<label for="capacity" style="font-size:14px; margin-top:-2%">CAPACITY OF THE INTERVENTION</label>
<input type="text" name="descript" class="date" value="<?php echo $row['description'];?>" readonly>
<label for="objectives" style="font-size:14px; margin-top:-2%">OBJECTIVES OF THE PROGRAMME</label>
<textarea cols="4" rows="2" name="obj_interv" readonly><?php echo $row['objectives'];?></textarea>
<label for "geolocation" style="font-size:14px; margin-top:-2%">GEOLOCATION</label>
<input type="text" name="geo_locat" class="date" value="<?php echo $row['latitude'] .','. $row['longitude'];?>" readonly>
<label for "address" style="font-size:14px; margin-top:-2%">ADDRESS</label>
<input type="text" name="address" class="date" value="<?php echo $row['projlocation'];?>" readonly>
<label for "curr-situation" style="font-size:14px; margin-top:-2%">CURRENT STATUS OF THE INTERVENTION</label>
<textarea name="cur_situat" placeholder="Brief Update on the Current Status of the Intervention Programme "></textarea>
<label for "percent-complete" style="font-size:14px; margin-top:-2%">STATE INTERVENTION'S PERCENTAGE COMPLETION</label>
<input type="number" name="pcnt_complete" class="date" placeholder="What is the intervention's percentage completion">
<label for "challenges" style="font-size:14px; margin-top:-2%">CONTINGENCIES (if applicable)</label>
<textarea cols="4" rows="3" name="proj_chall" placeholder="State in brief, the challenges millitating against programme delivery"></textarea>
<label for "comments" style="font-size:14px; margin-top:-2%">COMMENTS / RECOMMENDATIONS</label>
<textarea cols="4" rows="3" name="recommd" placeholder="Kindly comment your observations or recommend a solution that can facilitate programme delivery "></textarea>
<label for "pic-evidence" style="font-size:14px; margin-top:-2%">PICTORIAL REPORT OF THE INTERVENTION MILESTONE</label>
<input type="file" class="file" name="evidence">
<label for "date-of-report" style="font-size:14px; margin-top:-2%">REPORTING DATE</label>
<input type="date" name="date_report" class="date">
<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
</form>
<?php

}

?>
</div>
<div class="w3-quarter">
</div>
</div>
<script>
$(document).ready(function() {
$('#intervention').on('change', function() {
var intervention_id = this.value;
$.ajax({
url: "../application/intervention_categ.php",
type: "POST",
data: {
intervention_id: intervention_id
},
cache: false,
success: function(result){
$("#intervention-prog").html(result);

}

});
}); 
});
</script>

<script>
$(document).ready(function() {
$('#subintervention').on('change', function() {
var subintervention_id = this.value;
$.ajax({
url: "../application/subintervention_categ.php",
type: "POST",
data: {
subintervention_id: subintervention_id
},
cache: false,
success: function(result){
$("#intervention-boq-spec").html(result);

}

});
}); 
});
</script>