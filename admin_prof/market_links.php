<html>
  <head>
    <meta charset="utf-8" />

    <script src="../ckeditor/ckeditor.js"></script>
	    <style>
      .button {
        background-color: #155DE9;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        font-family: 'Arial';
      }
    </style>
    <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("grp_exco");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>

<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-group fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Market Linkage Form</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Group Loan Application Form" onchange="this.form.submit()">

<h3>Farmer/Producer Information</h3>
<label for "user-id">User ID</label>
<input type="text" name="hosptl" placeholder="User ID">

<h3>Contact Person</h3>
<label for "cont-name">Full Name</label>
<input type="text" name="cont_name" placeholder="Full Name">
<label for "cont-phone">Phone Number</label>
<input type="text" name="cont_phone" placeholder="Phone Number">
<label for "cont-email">Email Address</label>
<input type="text" name="cont_email" placeholder="Email Address">

<h3>Agricultural Product Details</h3>
<label for "agric-product">Type of Agricultural Product</label>
<select name="agric_prod" id="">
<option>Select Product Type</option>
<option>Fruits</option>
<option>Vegetables</option>
<option>Cereals</option>
<option>Legumes</option>
<option>Tuber</option>
<option>Dairy</option>
<option>Livestock</option>
</select>

<label for "prod-variety">Products Variety/Cultivar</label>
<input type="text" name="prod_variety" placeholder="Products Variety/Cultivar">
<label for "quantity">Quantity Available</label>
<input type="text" name="prod_variety" placeholder="Quantity Available: specify units, e.g., kg, tons, crates">
<label for "prod-variety">Harvesting Season</label>
<select name="harv-season" id="">
<option>Select Harvesting Season</option>
<option>Autumn</option>
<option>Spring</option>
<option>Summer</option>
</select>

<label for "prod-cert">Certifications (if any)</label>
<input type="text" name="prod_cert" placeholder="Certifications: (e.g., Organic, Fair Trade)">

<h3>Market Preferences</h3>
<label for "pref-mart">Preferred Market/Target Audience</label>
<select name="harv-season" id="">
<option>Select Option</option>
<option>Local Retailers</option>
<option>Export Markets</option>
<option>Direct Sales</option>
</select>

<label for "delivery-methd">Preferred Delivery Method</label>
<select name="delvry_method" id="">
<option>Select Option</option>
<option>Direct Delivery</option>
<option>Cooperative</option>
<option>Wholesale</option>
</select>

<label for "prod-cert">Price Expectations: (e.g., $/kg, $/ton)</label>
<input type="number" name="prod_cert" class="date" placeholder="Price Expectations (e.g., $/kg, $/ton)">

<h3>Additional Information</h3>
<label for "add-info">Special Requirements or Notes</label>
<textarea cols="4" rows="3" name="add_info" readonly placeholder="Special Requirements or Notes"></textarea>

<h3>Declaration and Signature</h3>
<label for "declare">Declaration</label>
<textarea cols="4" rows="3" name="spec_req" readonly placeholder="By signing below, we certify that all information provided in this application is true and accurate to the best of our knowledge."></textarea>

<h3>Signature</h3>
<section class="signature-component">
    <p>Signature of the Farmer/Contact Person</p>

    <center><canvas id="signature-pad" width="600" height="200" class="w3-light-grey"></canvas></center>

  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
  <script src="../js/signature.js"></script>


<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button name="cancel" id="clear" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
</form>

</div>
<div class="w3-quarter">
</div>
</div>
<script>
$w.onReady(function () {
  $w("#myHtmlComponent").onMessage((event) => {
    $w("#myText").html = event.data;
  });
});
</script>

<script>
$(document).ready(function() {
$('#task').on('change', function() {
var task_id = this.value;
$.ajax({
url: "../application/task_categ.php",
type: "POST",
data: {
task_id: task_id
},
cache: false,
success: function(result){
$("#start-timeline").html(result);

}

});
}); 
});
</script>

<script>
$(document).ready(function() {
$('#subtask').on('change', function() {
var subtask_id = this.value;
$.ajax({
url: "../application/subtask_categ.php",
type: "POST",
data: {
subtask_id: subtask_id
},
cache: false,
success: function(result){
$("#task-boq-spec").html(result);

}

});
}); 
});
</script>