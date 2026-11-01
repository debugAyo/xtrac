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
</head>

<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-user fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  User Registration Form</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="User Registration Form" onchange="this.form.submit()">

<label for="accttype"></label>
<input type="text" class="body-parag" name="cal_name" placeholder="Full Name" >
<input type="text" class="body-parag" name="cal_email" placeholder="E-mail Address">
<input type="file" class="date" name="my_pass" placeholder="Upload Recent Passport Photograph" >
<input type="text" class="body-parag" name="username" placeholder="Create Username" >
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

<input type="text" class="body-parag" name="cal_phone" placeholder="Phone No" >
<p>
<label for="Preferred Mode" class="w3-text-grey">Preferred Contact Mode</label>
<select size="1" class="body-parag w3-text-grey" name="pref_cont" >
<option>Call</option>
<option>Email</option>
<option>SMS</option>
<option>Whatsapp</option>
</select></p>
<input type="text" class="body-parag" name="cal_address" placeholder="Address">
<input type="text" class="body-parag" name="grp_id" placeholder="Group ID">

<label for="Date" class="w3-text-grey">Date of Birth</label>
 <input type="date" id="date" class="date" placeholder="Date of Birth" name="birth_dt" value=""> 
<p>
<label for="Marital"></label>
<select size="1" class="body-parag w3-text-grey" name="mar_status" >
<option>Select Martial Status</option>
<option>Married</option>
<option>Single</option>
</select></p>

<p>
<label for="Gender"></label>
<select size="1" class="body-parag w3-text-grey" name="gender" >
<option>Select Gender</option>
<option>Female</option>
<option>Male</option>
</select></p>

<center><button type="submit" name="submit" id="create" onclick="wrong_pass_alert()" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
</form>
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

<div class="w3-quarter">
</div>
</div>
