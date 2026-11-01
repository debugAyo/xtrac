<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>FixApp - Tech Finder</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->

<style>


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","get_user.php?q="+str,true);
  xmlhttp.send();
}

  
</script>
<script>
var cur = 0;
function displayDiv(idx) {
    document.getElementById("div"+cur).style.display = "none";
    document.getElementById("div"+idx).style.display = "block";
    cur = idx;
    return true;
}
</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



</head>



<body>

<div class="card-banner">
<div class="s4-btn">Support Services</div>

<form action="../application/auth_new_applicant.php" method="POST"><br />

<select class="body-parag w3-text-grey" id="category-dropdown" name="reg_typ">
<option value="">Select Registration Type</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cat_name"];?></option>
<?php

}
?>
</select>

<p><label for="specialization"></label>
<select class="body-parag w3-text-grey" id="speciality-dropdown" name="reg_spec">
</select></p>
                     

<label for="adv_spec"></label>
<select class="body-parag w3-text-grey" id="adv-spec-dropdown" name="adv_reg_spec">
</select>
<p></p>
<label for="specialization"></label>
<input type="text" class="body-parag" name="cal_name" placeholder="Name" value="<?php echo $fname;?>" readonly>
<input type="text" class="body-parag" name="cal_phone" placeholder="Phone No" value="<?php echo $calphone;?>" readonly >
<input type="text" class="body-parag" name="cal_address" placeholder="Address" value="<?php echo $caladdress;?>" readonly>
<input type="text" class="body-parag" name="cal_email" placeholder="E-mail Address" value="<?php echo $calemail;?>" readonly>


<label for="Other Details"></label>
<input type="text" class="body-parag" name="fat_name" placeholder="Father's Name" >
<input type="text" class="body-parag" name="mum_name" placeholder="Mother's Name" >
<input type="text" class="body-parag" name="nxt_kin" placeholder="Next of Kin's Name">
<input type="text" class="body-parag" name="nxt_kin_no" placeholder="Next of Kin's Contact No.">


<label for="Date"></label>
<input type="text" id="datepicker" class="body-parag" placeholder="Date of Birth" name="birth_dt" value="<?php echo $datebirth;?>" readonly>

<p>
<label for="Marital"></label>
<select size="1" class="body-parag w3-text-grey" name="mar_status" readonly>
<option><?php echo $mar_status;?> </option>
</select></p>

<p>
<label for="Gender"></label>
<select size="1" class="body-parag w3-text-grey" name="gender" value="<?php echo $gender;?>" readonly>
<option><?php echo $gender;?></option>
</select></p>

<label for=""></label>
<input type="hidden" name="page_id" placeholder="INCIDENT TITLE" value="<?php echo $row['id'];?>">
 <p><center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></p></form>
 </div>

</div>
</div>
</div>

  <div class="w3-row-padding"> 
  <div class="w3-col"><h2 class="w3-text-grey"></h2>
    <p class="w3-text-grey"></p>
      
 </div></div>

<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
$.ajax({
url: "../application/spec_categ.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#speciality-dropdown").html(result);
$('#adv-spec-dropdown').html('<option value="">Select Specialization</option>'); 
}
});
});    
$('#speciality-dropdown').on('change', function() {
var speciality_id = this.value;
$.ajax({
url: "../application/advance_spec.php",
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

</body>
</html>