<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: login/securedpage.php');
}
 include 'config/header.php';?>

<div class="hero-image w3-border-grey w3-border-top">
<div class="w3-row-padding">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m10 l10"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>

<div class="w3-row-padding" >
<div class="w3-col w3-container m2 l2"></div>
  <div class="w3-col w3-container m4 l4 w3-light-grey w3-padding-large" style="border-radius:0%; opacity:0.8 ">
  <h3 class="w3-text-grey" style="letter-spacing:6px">New Registration</h3>
<form action="pack_disp.php" method="post">
<p style="text-transform:uppercase; font-size:14px; letter-spacing:1px">Vendor's Registration</p>
<p><select id="category-dropdown" name="pkg" class="w3-white">
<option value="">Select Category</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM vendors_categ");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["pkg_class"];?></option>
<?php

}
?>
</select></p>
 <button type="submit" name="proceed" class="login-btn">Start</button>
</form>

<p>Transparency is the watch word of every thriving organization. If you are interested in becoming one of our key vendors, contractors, or consultants, kindly select an option from above field to register with us.</p>
  </div>
 
   <div class="w3-col w3-container m4 l4 w3-padding-xxlarge w3-hover-grey w3-light-green" style="border-radius:0%; opacity:0.8">
   <h3 style="text-align:center; font-family:arial black; color:white"><i class="fa fa-user" style="border-radius:50%; border:4px solid white; padding:15px"></i></h3>
   <h2 class="w3-text-white w3-hover-text-black" style="text-align:center; font-family:arial black;">Vendor</h2>   
<form action="login/loginproc.php" method="post">
  <input type="text" name="username"  placeholder="Username" class="w3-white" style="border-radius: 4px; font-family: courier new; font-size: 17px; color: #fff">
   <input type="password" name="password" placeholder="password" class="w3-white" style="border-radius: 4px; font-family: courier new; font-size: 17px; color: #fff">
   <p align="center"><button type="submit" name="submit" class="login-btn w3-green w3-hover-light-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>
</form>
      
   </div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>
   
<div class="w3-row-padding">
  <div class="w3-col w3-container m2 l2"></div>
   <div class="w3-col w3-container m8 l8">
   </div>
    <div class="w3-col w3-container m2 l2"></div>
   </div>
    </div>  
   
<div class="w3-row">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m10 l10"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>
  <div class="w3-row">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m10 l10"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>
 
<?php include 'config/footer.php'; ?>