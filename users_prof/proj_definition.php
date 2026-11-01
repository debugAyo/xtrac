  <script src="../ckeditor/ckeditor.js"></script>
  
  <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("proj_scope");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
	

<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Project or Programme Definition</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Project Definition Form" onchange="this.form.submit()">
<p><label for="intervention" style="font-size:14px; margin-top:-2%">INTERVENTION CATEGORIZATION</label>
<select class="body-parag w3-text-grey" id="intervention" name="interv">
<option value="">Select Category of Intervention </option>
<?php

require_once "../link/connect.php";

$result = mysqli_query($conn,"SELECT * FROM interventions ");
while($row = mysqli_fetch_array($result)) {
	

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["intervention"]?></option>
<?php

}
?>
</select>
</p>

<p><label for="start-date" style="font-size:14px; margin-top:-2%">SPECIFIC PROGRAMME</label>
<select class="body-parag w3-text-grey" id="intervention-prog" name="interv_prog">
</select></p>
<label for "description" style="font-size:14px; margin-top:-2%">PROJECT OR PROGRAMME DESCRIPTION</label>
<textarea name="descript"  placeholder="Description of Project or Intervention "></textarea>
<label for "objectiv" style="font-size:14px; margin-top:-2%">OBJECTIVES</label>
<textarea name="proj_obj"  placeholder="Objectives of Project or Intervention "></textarea>
<label for "scope" style="font-size:14px; margin-top:-2%">PROJECT OR PROGRAMME SCOPE</label>
<textarea name="proj_scope" id="CK1" onclick="sendText()" placeholder="Scope of Project or Intervention "></textarea>
<label for "owner" style="font-size:14px; margin-top:-2%">PROJECT OR PROGRAMME OWNER</label>
<textarea name="proj_own"  placeholder="State Project or Programme Owner "></textarea>
<label for "location" style="font-size:14px; margin-top:-2%">GEOLOCATION</label>
<input type="text" name="latitude" class="date" placeholder="Latitude">
<input type="text" name="longitude" class="date" placeholder="Longitude">
<label for "address" style="font-size:14px; margin-top:-2%">ADDRESS</label>
<input type="text" name="address" class="date" placeholder="Contact Address">
<label for "curr-situation" style="font-size:14px; margin-top:-2%">CURRENT SITUATION</label>
<textarea name="history" placeholder="Brief Update on the Current Situation "></textarea>
<label for "utilization" style="font-size:14px; margin-top:-2%">PICTORIAL EVIDENCE OF THE CURRENT SITUATION</label>
<input type="file" class="file" name="pic_evid">
<label for "population" style="font-size:14px; margin-top:-2%">POPULATION AFFECTED</label>
<input type="number" name="affect_pop" class="date" placeholder="Population Affected">
<label for "prospects" style="font-size:14px; margin-top:-2%">PROSPECTS</label>
<textarea cols="4" rows="3" name="prospect"  placeholder="State in brief, how the community would benefit from this intervention"></textarea>
<label for "impacts" style="font-size:14px; margin-top:-2%">IMPACTS</label>
<textarea cols="4" rows="3" name="impact" placeholder="Make a projection on the impact of this programme "></textarea>
<label for "date-of-completion" style="font-size:14px; margin-top:-2%">START DATE</label>
<input type="date" name="date_start" class="date">
<label for "date-of-completion" style="font-size:14px; margin-top:-2%">END DATE</label>
<input type="date" name="date_end" class="date">
<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
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
$('#intervention').on('change', function() {
var intervention_id = this.value;
$.ajax({
url: "../application/intervention_categ.php",
type: "POST",
data: {
intervention_id: intervention_id
},
cache: false,
success: function(result){
$("#intervention-prog").html(result);

}

});
}); 
});
</script>

<script>
$(document).ready(function() {
$('#subintervention').on('change', function() {
var subintervention_id = this.value;
$.ajax({
url: "../application/subintervention_categ.php",
type: "POST",
data: {
subintervention_id: subintervention_id
},
cache: false,
success: function(result){
$("#intervention-boq-spec").html(result);

}

});
}); 
});
</script>