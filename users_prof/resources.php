<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Resource Allocation Reporting</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Resources" onchange="this.form.submit()">
<select class="body-parag w3-text-grey" name="proj_id" id="proj_id"onchange="this.form.submit()">
<option value="">Select Project ID</option>
<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM projects");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["projectid"];?></option>
<?php

}
?>
</select>
</form>
<script>
$(document).ready(function() {
  $('#proj_id').change(function() {
    $('#myForm').submit();
  });
});
</script>
</p>

<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM projects WHERE id='$proj_id'");
while($row = mysqli_fetch_array($result)) {

?>
<input type="text" name="projid" class="w3-text-grey" value="<?php echo $row['projectid']; ?>" readonly>
<?php

}
?>

<p>
<select class="body-parag w3-text-grey" id="task" name="task">
<option value="">Select Tasks</option>
<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";

$result = mysqli_query($conn,"SELECT * FROM projschedules WHERE projectid='$proj_id'");
while($row = mysqli_fetch_array($result)) {
	
	/*$start_time = $row['start'];
	$end_time = $row['end'];*/

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["tasks"]?></option>
<?php

}
?>
</select>
</p>
<p><label for="start-date" class="w3-text-grey">Default Start Date</label>
<select class="body-parag w3-text-grey" id="start-timeline" name="startime">
</select></p>
<p for "human_allocation" class="w3-grey w3-padding-large">Personnel Allocation</p>
<p>
<select class="body-parag w3-text-grey" id="pers" name="pers[]" multiple>
<option value="">Select Personnel(s)</option>
<option></option>
<?php
$proj_id=$_POST['proj_id'];

require_once "../link/connect.php";
/*$result = mysqli_query($conn,"SELECT * FROM projpersonnel WHERE projectid='$proj_id'");*/
$result = mysqli_query($conn,"SELECT * FROM projects WHERE id='$proj_id'");
while($row = mysqli_fetch_array($result)) {
	
$projid=$row['projectid'];

}

?>

<?php

require_once "../link/connect.php";
/*$result = mysqli_query($conn,"SELECT * FROM projpersonnel WHERE projectid='$proj_id'");*/
$result = mysqli_query($conn,"SELECT * FROM projpersonnel WHERE projectid='$projid'");
while($row = mysqli_fetch_array($result)) {
	
	/*$start_time = $row['start'];
	$end_time = $row['end'];*/
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"]?></option>
<?php

}
?>
</select>
</p>
<label for "human_allocation">Start Date</label>
<input type="date" name="startdate" class="date w3-text-grey" >
<label for "end_date">End Date</label>
<input type="date" name="endate" class="date w3-text-grey" >
<label for "human_allocation">Hours per day</label>
<input type="number" name="man_hour" class="date w3-text-grey" >
<p class="w3-grey w3-padding-large">Material / Equipment Allocation</p>
<textarea col="4" row="3" name="mat_allocate"></textarea>

<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
</form>

</div>
<div class="w3-quarter">
</div>
</div>
	   <script>
$(document).ready(function() {
$('#task').on('change', function() {
var task_id = this.value;
$.ajax({
url: "../application/task_categ.php",
type: "POST",
data: {
task_id: task_id
},
cache: false,
success: function(result){
$("#start-timeline").html(result);

}

});
}); 
});
</script>