<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("service_hist");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding w3-white w3-border">
<div class="w3-half w3-padding-large">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Automobile Assets</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Vehicle Asset Form" >
<label for "asset-id">Asset ID</label>
<input type="text"name="asset_id" placeholder="Asset ID" >
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>
<p><label>Vehicle Category</label>
<select id="category-dropdown" name="veh_categ">
<option value="">Select Vehicle Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM auto_categ");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select></p>

<p><label for="specialization">Vehicle Type</label>
<select id="speciality-dropdown" name="veh_type">
</select></p>
<label for "asset-name">Vehicle Name</label>
<input type="text"name="asset_name" placeholder="Vehicle Name" >
<label>Vehicle Identification Information (VIN)</label>
<input type="text" name="vin" placeholder="Unique identifier for each vehicle">
<label>Make</label>
<input type="text" name="manuname" placeholder="Manufacturer of the vehicle (e.g., Toyota, Ford)."  >
<input type="text" name="ass_mode" placeholder="Specific model of the vehicle (e.g., Camry, F-150).">
<label>Make Year</label>
<input type="month" name="mk_year" class="date" placeholder="Manufacture year of the vehicle">
<input type="text" name="spec_version" placeholder="Specific version of the model (e.g., LX, EX).">

<label>License Plate Number</label>
<input type="text" name="lic_plate" placeholder="License Plate Number">
<label>Next Registration Renewal</label>
<input type="date" name="reg_exp_dt" class="date" placeholder="When the vehicle’s registration is due for renewal">

<label>Owner</label>
<input type="text" name="owner" placeholder="Individual or entity that owns the vehicle">

<label>Ownership Details</label>
<textarea name="owner_info" class="ckeditor">
<table width="100%"><tr><td><b>Name</b></td><td><b>Phone No.</b></td><td><b>Email</b></td><td><b>Role</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'owner_info' );
      CKEDITOR.add            
   </script>
<label>Date Purchased</label>
<input type="date" name="procdate" class="date" placeholder="Date the vehicle was acquired by the current owner">
<input type="number" name="purprice" class="date" placeholder="Purchased Price">
<p><label>Vehicle Specifications</label> 
<select name="engine_typ">
	<option>Select Engine Type</option>
	<option>V4</option>
	<option>V6</option>
	<option>V8</option>
	<option>CNG</option>
	<option>Hybrid</option>
	<option>Electric</option>
	</select></p>
<p><label>Fuel Type</label>
<select name="fuel_typ">
	<option>Select Fuel Type</option>
	<option>CNG</option>
	<option>Electric</option>
	<option>Diesel</option>
	<option>Gasoline</option>
	</select></p>	
<label>Transmission Type</label>
<select name="transmit_typ">
	<option>Select Transmission Type</option>
	<option>Automatic</option>
	<option>Manual</option>
	</select></p>
	<label>Drive Type</label>
<select name="drive_typ">
	<option>Select Drive Type</option>
	<option>Front Wheel</option>
	<option>All Wheel</option>
	</select></p>
<label>Condition and Maintenance History</label>
<input type="text" name="odometer" placeholder="Odometer reading at the time of the inventory">
<select name="gen_status">
	<option>Select Vehicle's Condition</option>
	<option>Excellent</option>
	<option>Good</option>
	<option>Fair</option>
	<option>Poor</option>
	</select></p>

<label>Service History</label>
<input type="file" class="file" name="serv_hist" placeholder="Service History">
<label for "asset-loc">Vehicle Location</label>
<input type="text" name="location" placeholder="Vehicle Current Location" >
<label for "warrant">Warranty [year]</label>
<input type="number" name="warnty" class="date" placeholder="Warranty (years)" >
<label>Next Scheduled Maintenance</label>
<input type="date" class="date" name="nxt_sched">
<label>Interior Features</label>
<textarea name="interior" class="ckeditor">
<table width="100%"><tr><td><b>Seats</b></td><td><b>Navigation System</b></td><td><b>HVAC System</b></td><td><b>Locks Type</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'interior' );
      CKEDITOR.add            
   </script>
   
     


	</div>
<div class="w3-half w3-white w3-padding-large">
<p style="margin-top:15%"></p>
   
   
   
<label>Exterior Features</label>
<textarea name="exterior" class="ckeditor">
<table width="100%"><tr><td><b>Wheels</b></td><td><b>Windows</b></td><td><b>Roof Racks</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'exterior' );
      CKEDITOR.add            
   </script>
<label>SafetyFeatures</label>
<textarea name="safety" class="ckeditor">
<table width="100%"><tr><td><b>Airbags</b></td><td><b>Braking System</b></td><td><b>Traction Control</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'safety' );
      CKEDITOR.add            
   </script>
<label>Insurance Information</label>
<input type="text" name="insurer" placeholder="Insurance Provider">
<input type="text" name="policy_no" placeholder="Policy Number">
<label>Insurance Start Date</label>
<input type="date" name="ins_start_dt" class="date" placeholder="Start Dates">
<label>Insurance End Date</label>
<input type="date" name="ins_end_dt" class="date" placeholder="Start Dates">
<label>History of Previous Owners</label>
<textarea name="prev_owner" class="ckeditor">
<table width="100%"><tr><td><b>Name</b></td><td><b>Phone No.</b></td><td><b>Address</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'prev_owner' );
      CKEDITOR.add            
   </script>

<label>Warranty Information</label>
<textarea name="warnty_info" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'warnty_info' );
      CKEDITOR.add            
   </script>

<label>Accident History</label>
<textarea name="accd_hist" class="ckeditor">

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'accd_hist' );
      CKEDITOR.add            
   </script>
<label>Emissions Information</label>
<textarea name="emiss_hist" class="ckeditor">

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'emiss_hist' );
      CKEDITOR.add            
   </script>
<label>Vehicle Photograph</label>
<input type="file" name="ass_pic" class="file" placeholder="Clear, up-to-date photos of the vehicle from various angles (interior and exterior).">
<label>Vehicle Documentation</label>
<input type="file" name="ass_docs" class="file" placeholder="Copies of registration, title, insurance, and any other relevant documents.">
<p><label for "asset-reg">Useful Life</label>
<select name="end_life" >
	<option>1 year</option>
	<option>2 years</option>
	<option>3 years</option>
	<option>4 years</option>
	<option>5 years</option>
	<option>6 years</option>
	<option>7 years</option>
	<option>8 years</option>
	<option>9 years</option>
	<option>10 years</option>
	<option>15 years</option>
	<option>20 years</option>
	</select></p>
<p><label for "asset-reg">Status</label>
<select name="veh_stat" >
	<option></option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>
</form>
</div>
</div>
<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "auto_spec_categ.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#speciality-dropdown").html(result);
$('#adv-spec-dropdown').html('<option></option>'); 
}
});
});    
$('#speciality-dropdown').on('change', function() {
var speciality_id = this.value;
$.ajax({
url: "auto_advance_spec.php",
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