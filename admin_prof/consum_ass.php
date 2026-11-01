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
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Consumables</h3>	

<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Consumables Form" placeholder="ASSET ID">
<label for "item-id">Item ID</label> 
<input type="text" name="dev_id" placeholder="Item ID">
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>
<label for "asset-name">Name</label>
<input type="text" name="dev_name" placeholder="Name of Item">
<label for "asset-image">Asset Image (Max 80kb)</label>
<input type="file" class="file" accept="image/jpeg" name="ass_pic">
<p><label for "asset-type">Type</label>
<select name="dev_typ" >
	<option>Select Asset Type</option>
	<option>Catridge</option>
	<option>Fuel</option>
	<option>Paper</option>
	<option>Pen</option>
	<option>Toner</option>
	</select></p>
<label for "description">Description</label>
<textarea rows="3" name="descrp" id="CK1" onclick="sendText()" cols="3"></textarea>
<p><label for "asset-name">Department</label> 
<select name="dept" >
	<option>Select Department</option>
	<option>Admin</option>
	<option>Audit</option>
	<option>ED Office</option>
	<option>ES Office</option>
	<option>Fin &amp; Acct</option>
	<option>Corporate Services</option>
	<option>Customer Service</option>
	<option>IT</option>
	<option>Legal</option>
	<option>Maintenance</option>
	<option>MD Office</option>
	<option>Operations</option>
	<option>Procurement</option>
	<option>Security</option>
	<option>Stores</option>
	<option>Transport</option>	
	</select></p>
<label for "batchno">Batch Number</label> 
<input type="text" name="batch_num" placeholder="Item Batch Number">
<label for "qty">Quantity</label> 
<input type="text" name="qty1" id="qty1" class="w3-text-red" oninput="calculate()" placeholder="Item quantity">
<label for "rate"> Rate (<s><span lang="EN-GB">N</span></s>)</label>
<input type="text" name="rate1" id="rt1" class="w3-text-blue" oninput="calculate()" placeholder="Cost per item unit">
<label for "purprice">Purchase Price (<s><span lang="EN-GB">N</span></s>)</label> 
<input type="text" name="purprice" id="price1" class="w3-text-green" oninput="calculate()"  placeholder="Total Cost" readonly>
<label for "manufac">Manufacturer</label> 
<input type="text" name="manuname" placeholder="Manufacturer">
<label for "location">Location</label>  
<input type="text" name="location" placeholder="The current location of item">
<label for "manu-date">Manufactured Date</label> 
<input type="date" class="date"  name="mandt" placeholder="Date manufactured" >
<label for "prodate">Procurement Date</label> 
<input type="date" class="date" name="prodt" placeholder="Date procured">
<label for "user">User</label> 
<input type="text" name="owner" placeholder="Current user">
<p><label for "unit">Unit</label> 
<select name="unit" placeholder="Unit">
	<option>Select Unit</option>
	<option>Bundle</option>
	<option>Carton</option>
	<option>Dozen</option>
	<option>Litre</option>
	<option>Meter</option>
	<option>Piece</option>
	<option>Roll</option>
	</select></p>
<p><label for "warrant">Warranty</label> 
<select name="warnty" placeholder="Warranty duration" >
	<option>Select Duration</option>
	<option>1 month</option>
	<option>3 months</option>
	<option>6 months</option>
	<option>1 year</option>
	<option>2 years</option>
	<option>3 years</option>
	<option>4 years</option>
	<option>5 years</option>
	</select></p>
<p><label for "use-life">Useful Life</label> 
<select name="cpu">
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
	</select></p>
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p><label for "stat">Status</label> 
<select name="dev_stat" >
	<option>Select Status</option>
	<option>Deficient</option>
	<option>Excessive</option>
	<option>Limited</option>
	<option>Obsolete</option>
	<option>Sufficient</option>
	</select></p>

<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>

</form>
</div>
<div class="w3-quarter"></div>
</div>
<script>

function calculate() {
       
var qty1,rt1; 
qty1 = document.getElementById('qty1').value; 
rt1 = document.getElementById('rt1').value; 
document.getElementById('price1').value = qty1 * rt1; 

      
    var qty2,rt2; 
qty2 = document.getElementById('qty2').value; 
rt2 = document.getElementById('rt2').value; 
document.getElementById('price2').value = qty2 * rt2; 

}

</script>
