<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("descrp");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Parts Association</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Parts Assoc Form">
<?php
$ass_id = $_POST['ass_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$ass_id'");
while($row = mysqli_fetch_array($result)) {
$ass_categ=$row['category'];
$ass_typ=$row['devtype'];

?>

<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $ass_categ; }?>" readonly>
<label for "item-id">Asset ID</label> 
<input type="text" name="ass_id" value="<?php echo $ass_id; ?>"  class="w3-text-grey" readonly placeholder="ASSET ID">
<label for "item-id">Asset Type</label> 
<input type="text" name="dev_typ" value="<?php echo $ass_typ; ?>"  disabled class="w3-text-grey" placeholder="ASSET TYPE">

<p style="font-weight:bold">Parts / Accessory Details</p>
<label for "item-id">Part / Accessory Type</label> 
<input type="text" name="ass_typ" class="w3-text-grey" placeholder="Part Type">

<label for "device-name">Part / Accessory Name</label>
<input type="text" class="w3-text-grey" name="ass_name" placeholder="Part Name" >
<label for "mass-mode">Part Model No</label>
<input type="text" name="ass_mode" placeholder="Part Model">
<label for "serial-no">Serial Number</label>
<input type="text" class="w3-text-grey" name="serial" placeholder="Serial No." >
<label for "serial-no">Batch Number</label>
<input type="text" class="w3-text-grey" name="batchno" placeholder="Batch No." >
<label for "serial-no">Part Description</label>
<textarea cols="3" rows="3" id="CK1" class="w3-text-grey" name="descrp" placeholder="Parts Description" ></textarea>
<label for "man-name">Manufacturer</label>
<input type="text" class="w3-text-grey" name="man_name" placeholder="Manufacturer Name">
<label for "man-date">Manufactured Date</label>
<input type="date" name="mandt" class="date">
<label for "dev-img">Parts Image</label>
<input class="file" type="file" name="part_img" >
<label for "cur-price">Parts / Accessory Cost (<s><span lang="EN-GB">N</span></s>)</label>
<input  type="text" class="w3-text-grey" name="purprice" placeholder="Current Price">
<label for "proc-date">Date of Procurement</label>
<input type="date" class="date w3-text-grey" name="procdate">

<p><label for "cycle">License's Lifecycle</label> 
<select class="w3-text-grey" name="lifecycle" >
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

<p style="font-weight:bold">Information about Vendor</p>
<label for "vendor">Vendor's Name</label>
<input  type="text" class="w3-text-grey" name="vendor" placeholder="Vendor's Name" >
<label for "phone">Phone No.</label>
<input  type="text" class="w3-text-grey" name="phone" placeholder="Vendor's Phone Contact" >
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>
</form>

</div>
<div class="w3-quarter"></div>
</div>