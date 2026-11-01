
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

<div class="w3-ro">
<div class="w3-threequarter w3-padding-large">
<form action="" method="POST">
<button type="submit" name="list" value="Manage User" class="login-btn w3-light-blue"><i class="fa fa-pencil"></i> Manage User</button><button type="submit" name="list" value="Users Settings" class="login-btn w3-light-blue"><i class="fa fa-user"></i> Create New User</button></form>
</div></div>
   
<div class="w3-row-padding">
<div class="w3-threequarter w3-border w3-padding-large w3-white">
<h3 class="w3-text-light-green w3-hover-text-red">Create User Account</h3>

<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="list" value="Users Settings Form" >
<h4>Personnel Demography</h4>
<p><label for="title">Passport</label>
<input type="file" name="pass" class="file"  >
<p><label for="title">Title</label>
<select id="title" name="title" class="w3-text-grey">
<option>Select Title</option>
<option>Arc</option>
<option>Barr</option>
<option>Dr</option>
<option>Engr</option>
<option>Miss</option>
<option>Mr</option>
<option>Mrs</option>
<option>Prof</option>
</select>
</p>

<label for="staf_name">Name</label>
<input type="text" class="body-parag" name="cal_name" placeholder="Name" >
<label for="staf_phone">Phone No.</label>
<input type="text" class="body-parag" name="cal_phone" placeholder="Phone No" >
<label for="staf_email">Email Adress</label>
<input type="text" class="body-parag" name="cal_email" placeholder="E-mail Address">
<p>
<label for="Gender">Gender</label>
<select size="1" class="body-parag w3-text-grey" name="gender" >
<option>Select Gender</option>
<option>Female</option>
<option>Male</option>
</select></p>
<label for="department">Department</label>
<select name="dept" class="w3-text-grey">
<option value="">Select Department</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM department ORDER BY dept ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["dept"];?></option>
<?php

}
?>
</select></p>
<p>

<h4>Personnel Access Credentials</h4>
<label for="accttype">Priviledge Level</label>
<select name="acct_type" class="w3-text-grey">
<option value="">Select Cadre</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM acct_priv  ORDER BY acctype ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["acctype"];?></option>
<?php

}
?>
</select></p>
<p><label for="title">Username <i class="fa fa-asterisk w3-text-red"></i> </label>
<input type="text" class="body-parag" name="username" placeholder="Create Username" >
<p><label for="title">Passport <i class="fa fa-asterisk w3-text-red"></i> </label>
<input type="password" class="body-parag" name="pass" id="pass" placeholder="Create Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required"">
<input type="password" class="body-parag" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password" required onkeyup="validate_password()">
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




<label for=""></label>

 <p><center><button type="submit" id="create" onclick="wrong_pass_alert()"  name="submit" value="Create" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Create"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p></form>
 </div>
 <script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '&#9746; Use same password';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '&#128505; Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
 
        function wrong_pass_alert() {
            if (document.getElementById('pass').value != "" &&
                document.getElementById('confirm_pass').value != "") {
                alert("Your response is submitted");
            } else {
                alert("Please fill all the fields");
            }
        }
    </script>


<div class="w3-quarter"></div>
</div>
