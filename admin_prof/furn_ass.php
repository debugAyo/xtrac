<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("descrpt");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Furniture Assets</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Furniture Asset Form" >
<label for "asset-id">Item ID</label>
<input type="text"name="asset_id" placeholder="ASSET ID" >
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>	
<p><label for "asset-type">Type</label>
<select name="ass_typ">
	<option>Select Furniture Type</option>
	<option>Cabinet</option>
	<option>Chair</option>
	<option>Cubicle</option>
	<option>Desk</option>
	<option>Door</option>
	<option>Rack</option>
	<option>Shelf</option>
	<option>Wardrobe</option>
	</select></p>
<label for "asset-name">Name</label>
<input type="text"name="asset_name" placeholder="Furniture Name">
<label>Description</label>
<textarea rows="3" cols="3" name="descrpt" id="CK1" placeholder="A brief description of the item, including style and design features."></textarea>
<label>Dimensions</label>
<input type="text" name="dimension" placeholder="Size of the furniture (e.g., height x width x depth)mm.">
<p> 
Select Furniture Color: <input type="color" name="ass_color" id="Mycolor" class="pallet" placeholder="The color of the appliance" style="width:80%">: <span id="color"></span></p> 
<script>
var pallet = document.getElementById("Mycolor");
var print = document.getElementById("color");
print.innerHTML = pallet.value;

pallet.oninput = function() {
  print.innerHTML = this.value;
}
</script><label>Material </label>
<input type="text" placeholder="Type of materials used (e.g., wood, metal, fabric, leather).">
<label>Finish</label>
<input type="text" name="coating" placeholder="The finish or coating applied (e.g., varnished, matte, glossy).">

<label>Brand/Manufacturer</label>
<input type="text" name="manuname" placeholder="The company that made the furniture.">
<label>Model Number</label>
<input type="text" name="ass_mode" placeholder="Specific model number, if applicable.">
<label>Serial Number</label>
<input type="text" name="serial_no" placeholder="Specific model number, if applicable.">

<label>Date of Manufacture</label>
<input type="date" name="manudate" class="date" placeholder="When the item was made.">

<label>Furniture Condition</label>
<input type="text" name="ass_cond" placeholder="Current condition (e.g., new, used, refurbished, damaged).">

<label>Purchase Date</label>
<input type="date" name="procdate" class="date" placeholder="When the item was bought.">
<label>Purchase Price</label>
<input type="text" name="purprice" placeholder="Price paid for the item.">
<label>Supplier/Store</label>
<input type="text" name="vendor" placeholder="Where the item was purchased.">

<label>Current Location</label>
<input type="text" name="location" placeholder="Where the item is currently located (e.g., office, living room).">
<label>Placement Details</label>
<input type="text" name="spec_locat" placeholder="Specific placement details or room within the location.">

<label>Warranty Information</label>
<textarea name="warnty_info" class="ckeditor">
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'warnty_info' );
      CKEDITOR.add            
   </script>
   
<label>Service History</label>
<input type="file" class="file" name="serv_hist" placeholder="Clear, up-to-date photos from various angles to document appearance and condition.">

<label>Ownership Information</label>
<input type="text" name="owner" placeholder="Name of the current owner or entity.">
<label>Furniture Documentation</label>
<input type="file" class="file" name="ass_docs" placeholder="Copies of purchase receipts, warranties, or manuals.">

<label>Furniture Image</label>
<input type="file" class="file" name="ass_pic" placeholder="Clear, up-to-date photos from various angles to document appearance and condition.">

<label>Maintenance Schedule</label>
<input type="file" class="file" name="maint_inst" placeholder="Clear, up-to-date photos from various angles to document appearance and condition.">

<p><label for "asset-reg">Useful Life</label>
<select name="end_life" >
	<option>0 year</option>
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
	</select><p>
<p><label for "asset-reg">Status</label>
<select name="dev_stat" >
	<option></option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>

<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></label>
</form>