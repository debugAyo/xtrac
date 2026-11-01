<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>FixApp - Tech Finder</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #FFF;
    border-radius: 6px;
}
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

<div class="card">
<div class="sub-parag">Document Upload</div>

<form action="auth_new_applicant.php" method="POST" enctype="multipart/form-data"><br />

<input type="text" class="" name="tick_no" readonly value="<?php echo $rand_tick ?>" >

<p><div class="">
<label for="Result"></label>
<select size="1" class="" name="result_typ" >
<option>Select Result Type</option>
<option>NECO</option>
<option>WAEC/SSCE</option>
</select></div></p>
<p>
<div class="">
<label for="College Result">Upload WAEC or NECO Result</label>
<input type="file" class="" name="result_sec" accept=".jpg,.png,.pdf,.jpeg"></div></p>
<p>
<div class="">
<label for="Scratch Card">Upload WAEC or NECO Scratch Card</label>
<input type="file" class="" name="scratch_crd" accept=".jpg,.png,.pdf,.jpeg"></div></p>
<p>
<div class="">
<label for="Birth Certificate">Upload Birth Certificate</label>
<input type="file" class="" name="birth_cert" accept=".jpg,.png,.pdf,.jpeg"></div></p>
<div class="">
<label for="College Result"></label>
<input type="text" class="" name="pass_no" placeholder="Passport No.">
<input type="text" class="" name="res_addr" placeholder="Residential Address">
</div>

<div class="">
<label for=""></label>
<input type="hidden" class="" name="page_id" placeholder="INCIDENT TITLE" value="<?php echo $row['id'];?>">
 <center><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Cancel"></form>
 </div>

</div>



</body>
</html>