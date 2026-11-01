<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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

<div class="w3-row-padding" style="border-radius:0%; background-image:url('images/worldmap_new.png');opacity:0.9">
<div class="w3-col w3-container m2 l2"></div>
  <div class="w3-col w3-container m4 l4 w3-light-grey" style="border-radius:0%; opacity:0.8 ">
  <h6 class="w3-padding-large w3-text-grey" style="letter-spacing:6px">DELIVERING</h6>
  <h2 class="w3-padding-medium w3-hover-text-light-green w3-text-light-blue" style="font-family:arial black; font-weight:bold; margin-top:-6%; font-size:72px">Pure Asset</h2>
  <h4 class="w3-padding-large w3-hover-text-red" style="font-size:24px; margin-top:-8%;">Management Solution.</h4>
  <p class="w3-padding-large">An innovative inventory and tracking system.</p>
	<h2 class="w3-padding-large w3-center" style="font-size:36px"><a class="login-btn w3-light-blue w3-text-white w3-hover-green" href="e_procure/index.php" onmouseover title="For enquiry, please click to chat with us"><i class="fa fa-tasks w3-text-white" style="font-size:36px;"></i> - Procurement</a></h2>
	  
  </div>
 
   <div class="w3-col w3-container m4 l4 w3-padding-xxlarge w3-hover-light-green w3-light-blue" style="border-radius:0%; opacity:0.8">
   <h3 style="text-align:center; font-family:arial black; color:white"><i class="fa fa-user" style="border-radius:50%; border:4px solid white; padding:15px"></i></h3>
   <h2 style="text-align:center; font-family:arial black; color:black">LOGIN</h2>   
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