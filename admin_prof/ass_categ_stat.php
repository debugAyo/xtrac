<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Asset Tracking: Status</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()">
<input type="hidden" name="list" value="Track Asset Status" onchange="this.form.submit()">
<select class="w3-text-grey" name="track_stat" id="track_stat" class="w3-white" onchange="this.form.submit()" placeholder="Barcode Scan">
	<option>Select Status Option</option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>   
 
</form>


<script>
   document.getElementById('track-id').focus();
   </script>
<script>
$(document).ready(function() {
  $('#proj_id').change(function() {
    $('#myForm').submit();
  });
});
</script>
</div>
<div class="w3-quarter">
</div>
</div>