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
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Invoice Association</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Invoice Assoc Form">
<?php
$ass_id = $_POST['ass_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$ass_id'");
while($row = mysqli_fetch_array($result)) {
$ass_categ=$row['category'];
$ass_typ=$row['devtype'];
$ass_name=$row['devname'];

?>

<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $ass_categ; }?>" readonly>
<label for "item-id">Asset ID</label> 
<input type="text" name="ass_id" value="<?php echo $ass_id; ?>"  class="w3-text-grey" readonly placeholder="ASSET ID">

<label for "mass-mode">Order No</label>
<input type="text" name="order_no" placeholder="Order Number">
<label for "man-date">Delivery Date</label>
<input type="date" name="delvry_date" class="date">
<label for "serial-no">Invoice Details</label>
<textarea cols="3" rows="3" id="CK1" class="w3-text-grey" name="descrp" placeholder="Parts Description" ></textarea>
<label for "serial-no">Invoice Number</label>
<input type="text" class="w3-text-grey" name="inv_no" placeholder="Invoice No." >
<label for "serial-no">Invoice Upload</label>
<input type="file" class="file w3-text-grey" name="invoice_img"  >
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