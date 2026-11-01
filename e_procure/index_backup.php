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

<div class="w3-row-padding">
<div class="w3-col w3-container m2 l2"></div>
  <div class="w3-col w3-container m4 l4 w3-light-grey" style="border-radius:0%; opacity:0.8 ">
  <h6 class="w3-padding-large w3-text-grey" style="letter-spacing:6px">New Registration</h6>
<form action="pack_disp.php" method="post">
					<p><label>Vendor's Registration</label>			
					<select name="pkg" id="pkg">
					<option>Select Category</option>
					<?php
							include '../link/connect.php';
							$query = "SELECT * FROM vendors_categ";
							$result = mysqli_query($conn, $query);
							while ($rows = mysqli_fetch_array($result)) {
							
							?>
		<option><?php echo $rows['pkg_class'];} ?></option>
		</select>
  </p>
  <button type="submit" name="proceed" class="login-btn">Proceeed</button>
  </form>
  </div>
 
   <div class="w3-col w3-container m4 l4 w3-padding-xxlarge w3-hover-light-green w3-light-blue" style="border-radius:0%; opacity:0.8">
   <h3 style="text-align:center; font-family:arial black; color:white"><i class="fa fa-user" style="border-radius:50%; border:4px solid white; padding:15px"></i></h3>
   <h2 style="text-align:center; font-family:arial black; color:black">Vendors Login</h2> 
<form action="client_login.php" method="post">   
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