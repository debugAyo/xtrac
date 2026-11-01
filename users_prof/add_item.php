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
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  ICT Assets</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="ICT Asset">
<input type="hidden" name="ass_cat"  value="<?php echo $list;?>" readonly>	
<p><label>Asset Category</label>
<select id="category-dropdown" name="it_categ">
<option value="">Select Asset Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM it_categ");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select></p>

<p><label for="specialization">Asset Sub Category</label>
<select id="speciality-dropdown" name="it_spec">
</select></p>
<p><label for="adv_spec">Specific Asset Type</label>
<select id="adv-spec-dropdown" name="dev_type">
</select></p>
<label for "item-id">Item ID</label> 
<input type="text" name="dev_id" class="w3-text-grey" placeholder="ASSET ID">

<p><label for "racks">Rack Mountable ?</label>	
<select class="w3-text-grey" name="rackmnt" >
	<option>Select option</option>
	<option>Yes</option>
	<option>No</option>
	</select></p>
<p><label for "maintain">Maintenance Type</label>	
<select class="w3-text-grey" name="maint_typ">
	<option>Select Maintenance Type</option>
	<option>Routine Maintenance</option>
	<option>Break and Fix</option>
	</select></p>
<label for "dev-img">Asset Image</label>
<input class="file" type="file" name="ass_pic" >
<label for "maint_note">Maintenance Note</label>											
<textarea rows="3" name="maint_not" cols="4" id="CK1" onclick="sendText()" class="w3-text-grey" placeholder="Maintenance note"></textarea>
<label for "device-name">Item Name</label>
<input type="text" class="w3-text-grey" name="dev_name" placeholder="Device Name" >
<label for "hdd-size">HDs (TB)</label>)
<input type="text" class="w3-text-grey" name="hd" placeholder="HDD Size">
<label for "serial-no">Serial Number</label>
<input type="text" class="w3-text-grey" name="serial" placeholder="Serial No." >
<label for "ram-size">RAM (GB)</label>
<input type="text" class="w3-text-grey" name="ram" placeholder="RAM Size">
<label for "man-name">Manufacturer Name</label>
<input type="text" class="w3-text-grey" name="man_name" placeholder="Manufacturer Name">
<label for "cpu-speed">CPU Model / Speed</label>
<input type="text" class="w3-text-grey" name="cpu_mod" placeholder="CPU Specifications">
<label for "man-date">Manufactured Date</label>
<input type="date" name="mandt" class="date">
<label for "cores">No of Cores/CPU</label>
<input type="number" name="cor_cpu" class="date w3-text-grey" placeholder="Number of Cores">
<label for "mac">MAC Address</label>
<input type="text" class="w3-text-grey" name="mac" placeholder="MAC Address">
<label for "mass-mode">Asset Model</label>
<input type="text" name="dev_mod" placeholder="Device Mode">
<label for "ip-addr">IP Address</label>
<input type="text" name="ipaddr" placeholder="192.168.0.1" >
<label for "price">Purchased Price (<s><span  lang="EN-GB">N</span></s>)</label>
<input type="text" name="pur_price" class="w3-text-grey" placeholder="Procurement Cost">
<label for "waranty">Warranty [year]</label>
<input type="number" name="warnty" class="date w3-text-grey" placeholder="Warranty">
<label for "cur-price">Current Price (<s><span lang="EN-GB">N</span></s>)</label>
<input  type="text" class="w3-text-grey" name="cur_price" placeholder="Current Price">
<label for "proc-date">Date of Procurement</label>
<input type="date" class="date w3-text-grey" name="prodt">
<label for "version">Item Version</label>
<input  type="text" class="w3-text-grey" name="dev_version" placeholder="Device Version">
<p><label for "status">Item Status</label>
<select class="w3-text-grey" name="dev_stat" placeholder="Device Status">
	<option>Select Status Option</option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>
<label for "cur-version">Current Version</label>
<input  type="text" class="w3-text-grey" name="cur_version" placeholder="Current Version" >

<label for="department">Department</label>
<select name="dept" class="w3-text-grey">
<option value="">Select Department</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM department ORDER BY dept ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["dept"];?></option>
<?php

}
?>
</select></p>

<label for "vendor">Vendor's Name</label>
<input  type="text" class="w3-text-grey" name="vendor" placeholder="Vendor" >
<label for "location">Location </label>
<input  type="text" class="w3-text-grey" name="location" placeholder="RM-5B002">
<label for "phone">Phone No.</label>
<input  type="text" class="w3-text-grey" name="phone" placeholder="Phone Contact" >
<p><label for "cycle">Life Cycle of Item</label> 
<select class="w3-text-grey" name="cpu" >
	<option>0 day</option>
	<option>30 days</option>
	<option>60 days</option>
	<option>90 days</option>
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
<label for "owner">Owner</label>
<input  type="text" class="w3-input w3-border" name="owner" placeholder="Owner">
<label for "owner">Dependency</label>
<input  type="text" class="w3-input w3-border" name="depend" placeholder="Dependency">
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>
</form>

</div>
<div class="w3-quarter"></div>
</div>
<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "it_spec_categ.php",
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
url: "it_advance_spec.php",
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
