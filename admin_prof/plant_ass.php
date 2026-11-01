<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("maint_not");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding  w3-white w3-border">
<div class="w3-half w3-padding-large">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Plant and Equipment</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Equipment Asset Form" >
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>	
<label>Item Number/ID</label> 
<input type="text" name="asset_id" placeholder="Unique identifier assigned to each piece of plant or equipment.">
<p><label>Equipment Category</label>
<select id="category-dropdown" name="eqp_categ">
<option value="">Select Equipment Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM eqp_categ");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select></p>

<p><label for="specialization">Equipment Sub Category</label>
<select id="speciality-dropdown" name="eqp_spec">
</select></p>
<p><label for="adv_spec">Specific Equipment Type</label>
<select id="adv-spec-dropdown" name="eqp_adv_spec">
<label for "asset-name">Equipment/Plant Name</label>
<input type="text"name="asset_name" placeholder="Equipment/Plant Name">
</select><p>
<label>Equipment Description</label>
<textarea name="eqp_descrp" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'eqp_descrp' );
      CKEDITOR.add            
   </script>

<label>Brand/Manufacturer</label> 
<input type="text" name="manuname" placeholder="Company that manufactured the equipment.">
<label>Model Number</label> 
<input type="text" name="assmode" placeholder="Specific model number assigned by the manufacturer.">
<label>Serial Number</label> 
<input type="text" name="serialno" placeholder="Unique identifier specific to each unit.">
<label>Dimensions (mm)</label> 
<input type="text" name="eqp_size" placeholder="Size of the equipment (e.g., length x width x height).">
<label>Weight</label> 
<input type="text" name="eqp_weight" placeholder="Weight of the equipment.">
<label>Material</label> 
<input type="text" name="eqp_mater" placeholder="Type of materials used in construction.">
<label>Power Requirements</label> 
<input type="text" name="power_req" placeholder="Voltage, wattage, fuel type, and consumption details.">
<label>Capacity/Output</label> 
<input type="text" name="out_cap" placeholder="Maximum capacity or output specifications (e.g., lifting capacity, power output).">
<label>Operating Range</label> 
<input type="range" min="0%" max="100%" name="op_range" value="0" class="slider" id="myRange" style="width:80%"> : <span id="demo"></span>%
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<label>Equipment Features</label>
<textarea name="feature" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'feature' );
      CKEDITOR.add            
   </script>

<label>Purchase Date</label> 
<input type="date" name="procdate" class="date" placeholder="Date when the equipment was acquired.">
<label>Purchase Price</label> 
<input type="text" name="purprice" placeholder="Cost of the equipment.">
<label>Supplier/Store</label> 
<input type="text" name="vendor" placeholder="Name and contact details of the supplier or store.">
<label>Invoice Number</label> 
<input type="text" name="proc_ref_no" placeholder="Reference number of the purchase invoice.">


</div>
<div class="w3-half w3-white w3-padding-large">
<p style="margin-top:15%"></p>


<label>Warranty Details</label>
<textarea name="warnty" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'warnty' );
      CKEDITOR.add            
   </script>
<label>Service History</label> 
<input type="file" name="serv_hist" class="file" >
<label>Service Provider</label> 
<input type="text" name="support" placeholder="Contact details of the service provider or technician.">
<p><label>Usage Condition</label> 
<select name="condition">
<option>Select Current Condition</option>
<option>Brand New</option>
<option>Refurbished</option>
<option>Fairly Used</option>
</select></p>
<label>Usage Details</label>
<textarea name="usage" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'usage' );
      CKEDITOR.add            
   </script>
<label>Current Location</label> 
<input type="text" name="location" placeholder="Where the equipment is currently stored or used.">
<label>Placement Details</label> 
<input type="text" name="spec_locat" placeholder="Specific location details within the site or facility.">
<label>Manual/Instructions</label> 
<input type="file" name="eqp_manual" class="file" placeholder="Availability of the user manual or operational instructions.">
<label>Maintenance Schedule</label> 
<input type="file" name="eqp_sched" class="file" placeholder="Recommended or scheduled maintenance tasks and intervals.">
<label>Operating Instructions</label> 
<input type="file" name="eqp_op_ins" class="file" placeholder="Guidelines for operating the equipment safely and efficiently.">
<label>Ownership Information</label> 
<input type="text" name="owner" placeholder="Name of the current owner or responsible entity.">
<label>Documentation</label> 
<input type="file" name="ass_doc" class="file" placeholder="Copies of purchase receipts, warranties, manuals, and any other relevant documents.">
<label>Equipment Picture</label> 
<input type="file" name="ass_pic" class="file" placeholder="Clear, up-to-date photos of the equipment from various angles to document appearance and condition.">
<label>Custom Features</label> 
<input type="text" name="customize" placeholder="Any modifications made to the equipment.">
<label>Equipment or Parts Upgrades</label>
<textarea name="upgrade" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'upgrade' );
      CKEDITOR.add            
   </script>

<label>Regulatory and Compliance Information</label>
<label>Certifications</label> 
<input type="file" name="certify" class="file" placeholder="Any relevant certifications or compliance documents (e.g., safety standards).">
<label>Inspection Records</label> 
<input type="file" name="insp_rec" class="file" placeholder="Records of regulatory inspections and compliance checks.">
<p><label for "asset-reg">Useful Life</label>
<select name="end_life" >
	<option value="0">Select Equipment Useful Life</option>
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
	</select>
<p><label for "asset-reg">Status</label>
<select name="dev_stat" >
	<option>Select Equipment Status</option>
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
url: "eqp_spec_categ.php",
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
url: "eqp_advance_spec.php",
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
<script>
/*
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "arms_spec_categ.php",
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
url: "arms_advance_spec.php",
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
*/
</script>