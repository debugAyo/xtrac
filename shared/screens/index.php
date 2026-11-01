<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: securedpage.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<link rel="stylesheet" href="../css/archi.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/customize.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>

<div class="header"> 
<div class="w3-row">
<div class="w3-col w3-container m1 l1"><a class="logo" href="#"><img src="../images/logo.jpg" class="img-three header-logo"></a></div>
<div class="w3-col w3-container m10 l10 w3-text-green"> <h4 style="margin-top: 1%;"> FEDERAL MINISTRY OF SPORTS DEVELOPMENT, NIGERIA </h4></div>
<div class="w3-col w3-container m1 l1" style="margin-top: 1%;"><img src="../images/naija.gif" class="img-two"></div>
</div>
</div></div>

<div class="navbar" id="navbar">
<div class="topnav" id="mytopnav">
<div class="w3-row w3-green">
<div class="w3-col w3-container m8 l8" style="margin-top: 1%"> 
  <a href="#"></a>
  <a class="hover-underline-animation" href="../index.php" class="active">HOME</a>
  <a class="hover-underline-animation" href="../aboutus.php" >ABOUT US</a>
  
   <div class="dropdown" >
    <button class="dropbtn">SPORTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   
      <div class="w3-row-padding">
        <div class="column">      
          <a class="hover-underline-animation" href="../running.php">RUNNING</a>
		  <a class="hover-underline-animation" href="../swimming.php">SWIMMING</a>
		  <a class="hover-underline-animation" href="../golf.php">GOLF</a>
       	  <a class="hover-underline-animation" href="../tennis.php">TENNIS</a>
		  <a class="hover-underline-animation" href="../weightlifting.php">WEIGHTLIFTING</a>
		  
        </div>
		<div class="column"> 
          <a class="hover-underline-animation" href="../boxing.php">BOXING</a>
		  <a class="hover-underline-animation" href="../wrestling.php">WRESTLING</a>
          <a class="hover-underline-animation" href="../tabtennis.php">TABLETENNIS</a>
		  <a class="hover-underline-animation" href="../badminton.php">BADMINTON</a>
	      <a class="hover-underline-animation" href="../polo.php">POLO</a>
        </div>
        <div class="column">
		  <a class="hover-underline-animation" href="../soccer.php" class="hover-underline-animation" style="font-weight: 100px">SOCCER</a>
		  <a class="hover-underline-animation" href="../basketball.php">BASKETBALL</a>
		  <a class="hover-underline-animation" href="../volleyball.php">VOLLEYBALL</a>
          <a class="hover-underline-animation" href="../rugby.php">RUGBY</a>
          
          
        </div>
      </div>
    </div>
  </div>
	
 <div class="dropdown">
    <button class="dropbtn">GRASSROOT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content w3-padding-medium">
        <a class="hover-underline-animation" href="../sch_games.php">SCHOOL GAMES</a>
		 <a class="hover-underline-animation" href="../com_games.php">COMMUNITY GAMES</a>	
		  <a class="hover-underline-animation" href="../loc_soccer.php">LOCAL SOCCER CLUBS</a>	  
        </div>
		</div>
 
   <a class="hover-underline-animation" href="../players.php">PLAYERS</a>
  <a class="hover-underline-animation" href="../contact.php">CONTACT</a>
  <a href="javascript:void(0);" class="icon" onclick="newFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="w3-col w3-container m3 l3" style="margin-top:1%;"><a href="../login/index.php" class="w3-padding-medium w3-border w3-border-white" onmouseover title="Login"><i class="fa fa-caret-down code-one" style=""></i></a>
<a href="../application/apply.php" class="w3-padding-medium w3-border w3-border-white"  onmouseover title="Sign Up"><i class="fa fa-caret-up code-one"></i></a></div>
<div class="w3-col w3-container m1 l1" style="margin-top:1%;">
<div class="dropdown">
    <button class="dropbtn"><i class="fa fa-search"></i>
        </button>
    <div class="dropdown-content w3-padding-large"  style="margin-left: -40%; width: 45%; border-radius:6px; opacity:0.7">
	<p><form action="../auth_search.php" method="post">
	<input type="text" name="search" id="search" placeholder="filter search...">
	<center><button type="submit" class="login-btn w3-red"><i class="fa fa-check"></i></button></center>
	</form></p>
	</div>
	
</div>
</div>
</div>
</div>
</div>


 <div class="w3-row-padding w3-light-grey">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m5 l5"></div>
 <div class="w3-col w3-container m5 l5"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>
  <div class="w3-row-padding w3-light-grey">
   <div class="w3-col w3-container m4 l4"></div>
   <div class="w3-col w3-container m4 l4 w3-padding-xlarge w3-white w3-center" style=" border-radius: 5px; border: 8px solid #666"> 
      <h1><i class="fa fa-user fa-headphones-o w3-text-green w3-padding-large" style="font-size: 72px; border: 4px solid green; border-radius:50%"></i></h1>
   <p style="color: black; font-size: 24px; font-weight: bold">Registered User</p>
<form action="loginproc.php" method="post">
<input type="text" name="username" id="" value="" placeholder="Username" style="border-radius: 4px; border: 4px #666 solid; ">
<input type="password" name="password" id="" value="" placeholder="Password" style="border-radius: 4px; border: 4px #666 solid; ">
<p><button type="submit" class="w3-btn w3-light-green" name="submit" style="border: 0px solid #555; border-radius: 50%" onmouseover title="Submit"><i class="fa fa-check w3-text-white"></i></button>
  <button type="reset" class="w3-btn w3-grey" name="cancel" style="border: 0px solid #555; border-radius: 50%" onmouseover title="Cancel"><i class="fa fa-close w3-text-white"></i></button></p>
</form>
   </div>
   <div class="w3-col w3-container m4 l4"></div>
</div>

   
   
     </div>  

 

<div class="w3-row-padding w3-light-grey">
   <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>

  
   
<div class="w3-row-padding">

<div class="w3-quarter w3-text-light-grey" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200"><p>
<h4 style="margin-left: 20%"><a href="../index.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-home" onmouseover title="Home"></i> Home</a></h4>
<h4 style="margin-left: 20%"><a href="../aboutus.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-info-circle" aria-hidden="true"  onmouseover title="About Us"></i> About Us</a></h4>
<h4 style="margin-left: 20%"><a href="../sports.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-cog fa-spin" aria-hidden="true" onmouseover title="Services"></i> Sports</a> </h4>
<h4 style="margin-left: 20%"><a href="../grassroot.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-cog fa-spin" aria-hidden="true" onmouseover title="Services"></i> Grassroot</a> </h4>
<h4 style="margin-left: 20%"><a href="../players.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-support" aria-hidden="true" onmouseover title="Support"></i> Players</a> </h4>
<h4 style="margin-left: 20%"><a href="../contact.php" class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size: 12px; font-weight:300"><i class="fa fa-address-book-o" aria-hidden="true" onmouseover title="Contact"></i> Contact</a> </h4>
</p>
</div> 
<div class="w3-half w3-text-green" data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1200"><p>
<h4 style="margin-left: 20%"><i class="fa fa-map-marker" style="font-size:12px;"></i>  <a class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size:12px;font-weight:300" > Federal Ministry of Sports Development, </a></h4>
<h4 style="margin-left: 20%"><i class="fa fa-map-marker" style="font-size:12px;"></i>  <a class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size:12px;font-weight:300"> 1st Floor Annex 2, Federal Secretariat, Shehu Sha, Maitama, Abuja.</a></h4>
<h4 style="margin-left: 20%"><i class="fa fa-phone" style="font-size:12px;"></i>  <a class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size:12px;font-weight:300">  +234-9- 5235905</a></h4>
<h4 style="margin-left: 20%"><i class="fa fa-envelope" style="font-size:12px;"></i>  <a class="w3-text-green hover-underline-animation" href="mailto:info@fmos.gov.ng" style="text-decoration: none; font-size:12px;font-weight:300"> info@fmos.gov.ng </a> </h4>
<h4 style="margin-left: 20%"><i class="fa fa-clock-o" style="font-size:12px;"></i>  <a class="w3-text-green hover-underline-animation" style="text-decoration: none; font-size:12px;font-weight:300"> Mon-Fri &nbsp;&nbsp; 8:00am - 5:00pm</a></h4>
</p>
</div>

<div class="w3-quarter" data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1200">
<p>
  <h4 style="margin-left: 20%"><a href="https://web.youtube.com/mosnigeria" class="youtube w3-text-green "><i class="fa fa-youtube"></i></a> </h4>
  <h4 style="margin-left: 20%"><a href="https://web.facebook.com/mosnigeria" class="facebook w3-text-green"><i class="fa fa-facebook"></i></a> </h4>
  <h4 style="margin-left: 20%"><a href="https://www.instagram.com/mosnigeria/" class="instagram w3-text-green"><i class="fa fa-instagram"></i></a> </h4>
  <h4 style="margin-left: 20%"><a href="https://twitter.com/mosnigeria/" class="twitter w3-text-green"><i class="fa fa-twitter"></i></a> </h4>
  </p>
 

</div>
</div></div>

<div class="w3-row-padding w3-center" style="background-color: #333">

<h8 class="w3-text-light-grey">Federal Ministry of Sports, Nigeria  <i class="fa fa-copyright" ></i> 2023 | all rights reserved</h8>
 </center></div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

 <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

<script>
function newFunction() {
  var x = document.getElementById("mytopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


    

</body>
</html>
