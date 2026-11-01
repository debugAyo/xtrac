<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
    <style>
      .button {
        background-color: #155DE9;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        font-family: 'Arial';
      }
    </style>
	<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
  
}
</style>
    <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("grp_exco");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>

<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-group fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Group Registration Form</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Group Registration Form" onchange="this.form.submit()">
<label for "group-name">Group Name</label>
<input type="text" name="grp_name" Placeholder="Group Name">
<label for "group-name">Group Leader's Name</label>
<input type="text" name="grp_lead" Placeholder="Leader's Name">
<label for "group-name">Group Leader's Phone No.</label>
<input type="text" name="grp_lead_phone" Placeholder="Group Leader's Phone">
<label for "group-excos">List of Group's Executives and Contact Nos.</label>
<textarea cols="4" rows="4" name="grp_exco" id="CK1" onclick="sendText()" Placeholder="Names of Group's Executives and Contact Nos."><table width="100%"><tr><td width="auto">Name</td><td width="auto">Phone No.</td><td width="auto">Role</td></tr></table></textarea>
<label for "group-name">Group Description</label>
<textarea cols="4" rows="4" name="grp_desc" Placeholder="Group Description"></textarea>
<label for "group-type">Group Type</label>
<select name="grp_type" id="grp_type" rows="1" class="w3-text-grey">
<option>Select Option</option>
<option>Organization</option>
<option>Community</option>
<option>Social Group</option>
<option>Business Group</option>
<option>Farmers Group</option>
</select>
<label for "group-purp">Group Purpose</label>
<select name="grp_purp" id="grp_purp" rows="1" class="w3-text-grey">
<option>Select Option</option>
<option>Social</option>
<option>Professional</option>
<option>Recreational</option>
<option>Educational</option>
<option>Commercial</option>
</select>
<label for "group-size">Group Size</label>
<select name="grp_size" id="grp_size" rows="1" class="w3-text-grey">
<option>Select Option</option>
<option>Small (1-10 members)</option>
<option>Medium (11-50 members)</option>
<option>Large (51-100 members)</option>
<option>Very Large (100+ members)</option>
</select>

<h3>Group Demographics</h3>
<div class="slidecontainer">
<label for "group-demog">Age Range (between 18 and 80):</label>
  <input type="range" min="18" max="80" value="50" name="age_range" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<label for "group-demog">Group Gender Ratio</label>
<input type="number" name="male_gender" class="date" Placeholder="Male">
<input type="number" name="fmale_gender" class="date" Placeholder="Female">

<label for "group-demog">Geographic Location</label>
<input type="text" name="local" Placeholder="Local (Specify city/town)">
<input type="text" name="region" Placeholder="Regional (Specify region)">
<input type="text" name="nation" Placeholder="National">

<label for "group-demog">Group Activities and Interests</label>
<textarea cols="4" rows="4" name="act_descp" Placeholder="Describe the main activities or interests of the group"></textarea>	

<label for "group-demog">Group Goals and Objectives</label>
<textarea cols="4" rows="4" name="grp_obj" Placeholder="Describe group's goals and objectives"></textarea>
<label for "group-demog">Communication Preferences</label>
<select name="comm_opt" id="comm_opt" rows="1" class="w3-text-grey">
<option>Select Option</option>
<option>Email</option>
<option>Phone</option>
<option>Whatsapp</option>
<option>Physical</option>
<option>Social media</option>
</select>

<label for "group-demog">Additional Comments or Notes</label>
<textarea cols="4" rows="4" name="add_info" Placeholder="Additional Information"></textarea>


<h3>Appendix: Passport Photographs</h3>
<label for "lead-passport">Group Leader's Passport Photograph </label>
<input type="file" name="lead_pass" class="date">
<label for "exco-pass">Group Executives Passport Photographs</label>
<input type="file" name="exco_pass" class="date">

<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
</form>

</div>
<div class="w3-quarter">
</div>
</div>
<script>
$w.onReady(function () {
  $w("#myHtmlComponent").onMessage((event) => {
    $w("#myText").html = event.data;
  });
});
</script>

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