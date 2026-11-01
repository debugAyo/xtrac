
<head>
<style>

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #eee;
  color: #000;
  position: relative;
  padding:10px;
  margin-top: 10px;
}

#message p {
  padding: 10px 25px;
  font-size: 12px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "&#10004";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006";
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
<div class="w3-row-padding">

<div class="w3-threequarter w3-border w3-padding-large">
			
<?php

if (isset($_POST['submit'])) {

$id=$_POST['id'];

}	
	$query="SELECT * FROM user_login WHERE id = '$id'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
while ($row = mysqli_fetch_array($result))
{

echo '<h4>Edit User Details</h4>
	
	<form method="post" action="../application/auth_update_user.php" enctype="multipart/form-data">
	<input type="hidden" id="id" name="id" value="'.$row['id'].'">					
	<input type="text" id="calname" name="cal_name" value="'.$row['name'].'">
	<input type="text" id="categ" name="cal_status" value="'.$row['privilege'].'">
	<input type="text" id="email" name="cal_phone" value="'.$row['phone'].'">
	<input type="text" id="name" name="cal_email" value="'.$row['email'].'">
	<p style="font-size:14px">Use these fieds to edit username and password respectively</p>
	<label for "username" style="color:orange">Username </label>
	<input type="text" class="body-parag" name="username" placeholder="Create Username" value="'.$row['username'].'" >
<label for "password" style="color:orange">Password </label>
<input type="password" class="body-parag" name="password" id="pass" placeholder="Create Password" value="'.$row['password'].'"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required"">
<label for "confirm passwrod" style="color:orange">Password Confirmation </label>
<input type="password" class="body-parag" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password" value="'.$row['password'].'" required onkeyup="validate_password()">
<span id="wrong_pass_alert"></span>

<div id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

	
	<input type="text" id="gender" name="gender" value="'.$row['gender'].'">
	<input type="date" id="date" name="date_ob" class="date" value="'.$row['date_ob'].'">
	<input type="text" id="marital" name="marital" value="'.$row['marital'].'">
	<button type="submit" name="submit" >Add</button><button type="reset" name="submit">Reset</button><button type="submit" name="submit" >Delete</button>
	
	</form>';
}	
												 
									  	
 ?>
</div>			
<div class="w3-quarter"></div>
</div>
     
