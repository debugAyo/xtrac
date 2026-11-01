<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Community Profiling</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Community Profiling Form" onchange="this.form.submit()">

<label for "comm-into" style="font-size:14px; margin-top:-2%">INTRODUCTION</label>
<textarea name="intro" placeholder="About the Community"></textarea>

<label for "comm-pop" style="font-size:14px; margin-top:-2%">POPULATION</label>
<input type="number" name="populat" class="date" placeholder="Population Count">
<label for "comm-pop" style="font-size:14px; margin-top:-2%">LOCATION</label>
<input type="text" name="location" class="date" placeholder="Latitude, Longitude">

<label for "comm-history" style="font-size:14px; margin-top:-2%">HISTORY</label>
<textarea name="histry" placeholder="Brief History of the Community "></textarea>

<label for "environ" style="font-size:14px; margin-top:-2%">PHYSICAL ENVIRONMENT</label>
<input type="number" name="phy_size" class="date" placeholder="Size sqm">
<label for "demograph" style="font-size:14px; margin-top:-2%">DEMOGRAPHIC ANALYSIS</label>
<input type="number" name="no_wrk" class="date" placeholder="No. of Workers">
<input type="number" name="no_res" class="date" placeholder="No. of Residents">
<input type="number" name="no_non_res" class="date" placeholder="No. of Non-residents">
<input type="number" name="env_issue" class="date" placeholder="No. of Environmental Issues">
             
<p style="font-size:14px; margin-top:-2%">HOUSING</p>
<select name="houses[]" id="house" rows="1" class="w3-text-grey" multiple >
<option>Select Type(s)</option>
<option>Bungalow</option>
<option>Cabin</option>
<option>Cottage</option>
<option>Duplex</option>
<option>Farm House</option>
<option>Flat</option>
<option>Hut</option>
<option>Mansion</option>
<option>Ranch</option>
<option>Terrace</option>
</select>

<input type="text" name="hs_cost" placeholder="Cost Range">

<label for "social" style="font-size:14px; margin-top:-2%">PERCENTAGE DAILY ACCESS TO SOCIAL AMENITIES</label>
<input type="number" name="water" class="date" placeholder="% Access to Portable Water">
<input type="number" name="electric" class="date" placeholder="% Access to Electricity">
<input type="number" name="road" class="date" placeholder="% Access to Good Road Network">
<input type="number" name="transport" class="date" placeholder="% Access to Good Transport System">

<label for "comm-economy" style="font-size:14px; margin-top:-2%">ECONOMY</label>
<input type="number" name="emp_pop" class="date" placeholder="Employment Population">
<input type="number" name="unemp_pop" class="date" placeholder="Unemployment Population">

<label for "comm-education" style="font-size:14px; margin-top:-2%">EDUCATION</label>
<input type="number" name="no_pry" class="date"  placeholder="No. of Primary Schools">
<input type="number" name="no_sec" class="date"  placeholder="No. of Secondary Schools">
<input type="number" name="no_adv" class="date"  placeholder="No of Higher Institutions">

<label for "comm-crime" style="font-size:14px; margin-top:-2%">CRIME RATES</label>
<input type="number" name="kidnap" class="date" placeholder="No. of Kidnap Cases">
<input type="number" name="robbery" class="date" placeholder="No. of Robbery Attacks">
<input type="number" name="violence" class="date" placeholder="No. of Communal Crises">
<input type="number" name="murder" class="date" placeholder="No. of Murder Cases">

<label for "comm-health" style="font-size:14px; margin-top:-2%">HEALTH</label>
<input type="number" name="hosptl" class="date" placeholder="No. of Hospitals">
<input type="number" name="cot_hosptl" class="date" placeholder="No. of Cottage Hospitals">

<label for "comm-facilities" style="font-size:14px; margin-top:-2%">FACILITIES & RESOURCES</label>
<input type="number" name="facility" class="date" placeholder="Number of Leisure Facilities">
<input type="number" name="shopng" class="date" placeholder="Number of Shopping Complexes">
<input type="number" name="mosque" class="date" placeholder="Number of Muslim Worship Centre">
<input type="number" name="church" class="date" placeholder="Number of Christian Worship Centre">
<input type="number" name="library" class="date" placeholder="Number of Library">

<label for "comm-needs" style="font-size:14px; margin-top:-2%">NEEDS ANALYSIS</label>
<textarea cols="4" rows="3" name="nd_analysis" placeholder="Needs Analysis"></textarea>

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