<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("req_descrp");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Request Form</h3>	
<form action="" method="post" onchange="this.form.submit()">
<input type="hidden" name="list" id="req_form" value="Requisition Form Processing">
<label for "staff-id"> Staff ID </label>
<input type="text"  name="staff_id" placeholder="Requisitor's ID">
<p><label for "req-type">Request Type</label>
<select name="request">
	<option>Select Option</option>
	<option>Fresh Allocation</option>
	<option>Maintenance</option>
	<option>Relocation</option>
	<option>Replacement</option>
	</select></p>
<label for "category">Asset Category</label>
<select name="categ" onchange="this.form.submit()">
<option value="">Select Asset Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM asset_category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['categ'];?>"><?php echo $row["categ"];?></option>
<?php

}
?>
</select>
</p>

<label for "item-descrp">Brief description of your request with reason(s)</label>
<textarea rows="3" name="req_descrp" cols="4" id="CK1" onclick="sendText()" class="w3-text-grey" placeholder="What do you want?"></textarea>

<label for "quant">Quantity</label>
<input type="number"  name="qty" class="date" placeholder="How many?" >

<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>

</form>
<div class="w3-quarter"></div>
</div>