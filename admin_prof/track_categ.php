<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Asset Tracking</h3>	

<form action="" method="post" id="myForm" onchange="this.form.submit()">
<p>
<select class="body-parag w3-text-grey" name="list" onchange="this.form.submit()">
<option value="">Select Tracking Method</option>
<option>Asset ID</option>
<option>Asset Status</option>
<option>Asset Name</option>
<option>Asset Category</option>
<option>Asset Location</option>
<option>Asset Serial No</option>

</select>
</p>

  </form>

<script>
   document.getElementById('track_id').focus();
   </script>
   
      <script>
$(document).ready(function() {
  $('#mySelect').change(function() {
    $('#myForm').submit();
  });
});
</script>

</div>
<div class="w3-quarter">
</div>
</div>