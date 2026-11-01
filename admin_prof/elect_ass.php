<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("descript");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding w3-white  w3-border">
<div class="w3-half w3-padding-large">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Electronic Appliances</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Electronics Asset Form" >
<label for "asset-id">Item ID</label>
<input type="text"name="dev_id" placeholder="ASSET ID" >
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>	
<p><label>Equipment Category</label>
<select id="category-dropdown" name="eqp_categ">
<option value="">Select Equipment Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM elec_categ");
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
</select><p>
<label for "asset-name">Appliance Name</label>
<input type="text"name="asset_name" placeholder="Property name">
<label>Description</label> 
<textarea cols="3" rows="3" name="descript" id="CK1" placeholder="A brief description of the appliance, including its features and functions"></textarea>
<label>Brand/Manufacturer</label> 
<input type="text" name="manuname" placeholder="The company that made the appliance">
<label>Model Number</label> 
<input type="text" name="assmode" placeholder="Specific model number assigned by the manufacturer">
<label>Serial Number</label> 
<input type="text" name="serial_no" placeholder="Unique identifier specific to each unit">
<label>Dimensions (mm)</label> 
<input type="text" name="ass_dim" placeholder="Size of the appliance (e.g., height x width x depth)">
<p> 
Select Appliance Color: <input type="color" name="ass_color" id="Mycolor" class="pallet" placeholder="The color of the appliance" style="width:80%">: <span id="color"></span></p> 
<script>
var pallet = document.getElementById("Mycolor");
var print = document.getElementById("color");
print.innerHTML = pallet.value;

pallet.oninput = function() {
  print.innerHTML = this.value;
}
</script>
<label>Material</label> 
<input type="text" name="ass_mater" placeholder="Type of materials used in construction">
<label>Power Requirements</label> 
<input type="text" name="power_req" placeholder="Voltage, wattage, and plug type">

<div class="slidecontainer">
<p>Energy Efficiency Rating (%) </p>
  <input type="range" min="0%" max="100%" name="power_rate" value="0" class="slider" id="myRange" style="width:80%"> : <span id="demo"></span>%
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<p><label>Features</label> 
<input type="text" name="feature" placeholder="Key features (e.g., smart capabilities)"></p>
<label>Purchase Date</label> 
<input type="date" class="date" name="procdate" placeholder="Date when the appliance was bought">


</div>
<div class="w3-half w3-white w3-padding-large">
<p style="margin-top:14%"></p>

<label>Purchase Price</label> 
<input type="text" name="purprice" placeholder="Price paid for the appliance">
<label>Supplier/Store</label> 
<input type="text" name="vendor" placeholder="Name and contact details of the store or supplier">
<label>Warranty Details</label>
<textarea name="warnty" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'warnty' );
      CKEDITOR.add            
   </script>

<label>Service History</label> 
<input type="file" class="file" name="serv_hist" placeholder="Copies of purchase receipts, warranties, user manuals, and any relevant documents">
<label>Condition</label> 
<select name="condition">
<option>Select Condition</option>
<option>New</option>
<option>Used</option>
<option>Refurbished</option>
</select></p>
<label>Usage Details</label> 
<input type="text" name="usage" placeholder="Information on how often the appliance is used">
<label>Current Location</label> 
<input type="text" name="location" placeholder="Where the appliance is located">
<label>Placement Details</label> 
<input type="text" name="spec_locat" placeholder="Specific placement details within the location">
<label>Manual/Instructions</label> 
<input type="file"  class="file" name="manual" placeholder="Availability of the user manual or instructions">
<label>Cleaning and Maintenance Instructions</label> 
<input type="file"  class="file"name="maint_inst" placeholder="Recommended cleaning methods and maintenance procedures">
<label>Operating Instructions</label> 
<input type="file"  class="file" name="operate_ins" placeholder="Basic operational guidelines or settings">
<label>Ownership Information</label> 
<input type="text" name="owner" placeholder="Name of the current owner or entity">
<label>Documentation</label> 
<input type="file" class="file" name="ass_docs" placeholder="Copies of purchase receipts, warranties, user manuals, and any relevant documents">
<label>Appliance Photos</label> 
<input type="file" class="file" name="ass_pic" placeholder="Image of the serial number or any identifying tags">
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
<select name="dev_stat" >
	<option>Select Status</option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></label>
</form>
</div>
</div>
<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "elec_spec_categ.php",
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
url: "elec_advance_spec.php",
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