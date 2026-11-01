<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Communications Reporting</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Communication" onchange="this.form.submit()">
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

<label for "objectiv" class="w3-text-grey">Project's Objectives</label>

<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";

$result = mysqli_query($conn,"SELECT * FROM projects WHERE id='$proj_id'");
while($row = mysqli_fetch_array($result)) {
	
	/*$start_time = $row['start'];
	$end_time = $row['end'];*/

?>
<textarea cols="4" rows="3" name="projobject" readonly><?php echo $row["objectives"]?></textarea>

<?php

}
?>

</p>
<label for "objectiv" class="w3-text-grey">Project's Scope</label>
<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";

$result = mysqli_query($conn,"SELECT * FROM projects WHERE id='$proj_id'");
while($row = mysqli_fetch_array($result)) {
	
	/*$start_time = $row['start'];
	$end_time = $row['end'];*/

?>

<textarea cols="4" rows="3" name="projscope" readonly><?php echo $row["scope"]?></textarea>

<?php

}
?>

<p>
<select class="body-parag w3-text-grey" id="task" name="task">
<option value="">Select Task</option>
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
<label for "actual-date" class="w3-text-grey">Meeting Date</label>
<input type="date" class="date w3-text-grey" name="meet_date" placeholder="Meeting Date">

<label for "meet-theme" class="w3-text-grey">Meeting Theme</label>
<input type="text" class="date w3-text-grey" name="meet_theme" placeholder="Meeting Theme">

<p>
<select class="body-parag w3-text-grey" id="meet_plat" name="meet_plat">
<option value="">Select Meeting Platform</option>
<option value="">Physical</option>
<option value="">Virtual</option>
</select>
</p>
<label for="attendees" class="w3-text-grey">Attendees</label>
<textarea col="4" rows="2" name="attendee"></textarea>

<label for="attendees" class="w3-text-grey">Issues Discussed or Raised</label>
<textarea col="4" rows="2" name="attendee"></textarea>
<label for="attendees" class="w3-text-grey">Decisions / Recommendations</label>
<textarea col="4" rows="2" name="attendee"></textarea>
<label for="attendees" class="w3-text-grey">Attach Correspondence</label>
<input type="file" name="env_scan" class="file">
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

<script>
$(document).ready(function() {
$('#subtask').on('change', function() {
var subtask_id = this.value;
$.ajax({
url: "../application/subtask_categ.php",
type: "POST",
data: {
subtask_id: subtask_id
},
cache: false,
success: function(result){
$("#task-boq-spec").html(result);

}

});
}); 
});
</script>