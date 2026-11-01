<div class="w3-row-padding">
    <div class="w3-threequarter w3-padding-large w3-white w3-border"> 
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-mixcloud fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Landscape Analysis</h3>	
<form action="" method="POST" enctype="multipart/form-data">
	<input type="text" placeholder="Description" name="env_descp">
	<label for"context" class="w3-text-grey">Context and Background</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Stakeholder Mapping</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">SWOT Analysis</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Trends and Developments</label>
	
	<p>
<select class="body-parag w3-text-grey" id="category-dropdown" name="my_category">
<option value="">Select Factor</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM cause_category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["category"];?></option>
<?php

}
?>
</select>
</p>

<p><label for="specialization"></label>
<select class="body-parag w3-text-grey" id="speciality-dropdown" name="my_speciality">
</select></p>
	<label for"context" class="w3-text-grey">Gap Analysis</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Risk Assessment</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Competitive Analysis</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Mapping Relationships</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Policy and Regulatory Review</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Environmental Scan</label>
	<input type="file" name="env_scan" class="file">
	<label for"context" class="w3-text-grey">Scenario Planning</label>
	<textarea col="5" row="4"></textarea>
	<label for"context" class="w3-text-grey">Impact Assessment</label>
	<p>
	<select class="body-parag w3-text-grey" name="impact_lev">
	<option>Select Impact Level</option>
	<option>High</option>
	<option>Average</option>
	<option>Low</option>
	</select>
	</p>
	<label for"context" class="w3-text-grey">Recommendations</label>
	<textarea col="5" row="4" name="recommend"></textarea>
	
	<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	</form>
	</div>
	<div class="w3-quarter"></div>
	   </div>
	   
	   <script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "../application/cause_categ.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#speciality-dropdown").html(result);

}
});
});    
$('#speciality-dropdown').on('change', function() {
var speciality_id = this.value;
$.ajax({
url: "../application/local_categ.php",
type: "POST",
data: {
speciality_id: speciality_id
},
cache: false,
success: function(result){
$("#localgovt-dropdown").html(result);
}
});
});
});
</script>