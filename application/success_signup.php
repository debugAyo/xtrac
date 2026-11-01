<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: securedpage.php');
}

?>
<?php include 'config/header.php';?>
<div class="hero-image">

<div class="w3-row-padding">
   <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>
 <div class="w3-row-padding">
<div class="w3-quarter"></div>
<div class="w3-half w3-border">
<?php echo 'Dear'.'&nbsp;'. $fname .', Welcome to Glowing Ages Academy Support Services.</h4><h6> Your account has successfully been created.</center></h6>';?>
      
      <h3 class="w3-center">User Login</h3><h7><center> to access your account.</center></h7>
    
      <form action="../login/loginproc.php" method="POST">
        <div class="fontuser">
            <label><i class="fa fa-user fa-lg"></i></label> 
            <input type="text" name="username" required placeholder="username">
        </div>
          
        <div class="fontpassword">
            <label><i class="fa fa-key fa-lg"></i></label> 
            <input type="password"  name="password" required placeholder="password"> 
        </div>     
        <center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></form>  
        <center><h7>Never registered before? <a href="../application/apply.php" class="w3-text-blue" style="text-decoration: none"><h2>create account</h2></a></h7></center>
            
<h7>Forgot your password? You don't need to worry. Simply click <a href="#" class="w3-text-blue" style="text-decoration: none">password recovery </a></h7>
 		<h6></h6>
		
      
      
  </div>
  <div class="w3-quarter">
  
  </div>
  </div> 
  <div class="w3-row-padding">
<div class="w3-quarter"></div>
<div class="w3-half"></div>
<div class="w3-quarter"></div>
</div> 

<?php include 'config/footer.php'; ?>
