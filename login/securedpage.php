<?php
// Inialize session
session_start();

if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	header ('Location:../index.php');
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>

<?php include 'config/header.php';?>

<div class="hero-image">

<div class="w3-row">
  <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m5 l5"> </div>
    <div class="w3-col w3-container m5 l5"></div>
     <div class="w3-col w3-container m1 l1"></div>
   </div>
   <div class="w3-row">
  <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m5 l5"> </div>
    <div class="w3-col w3-container m5 l5"></div>
     <div class="w3-col w3-container m1 l1"></div>
   </div>

<div class="w3-row-padding">
  <div class="w3-quarter w3-padding-large w3-black"> 
<div class="left list-group">
<form method="post" action=""><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="Dashboard" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-pie-chart fa-fw w3-text-yellow" arial-hidden="true"></i>Dashboard</button></form>
 <form method="post" action=""><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="User Management" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-user fa-fw w3-text-red" arial-hidden="true"></i>User Management</button></form>
  <form method="post" action=""><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="Asset Management" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-tasks fa-fw w3-text-pink" arial-hidden="true"></i> Asset Management</button></form>
  <form method="post" action=""><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="Fixtures" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-clock-o fa-fw w3-text-green" arial-hidden="true"></i> Fixtures</button></form>
   <form method="post" action=""><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="Score Board" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-bell fa-fw w3-text-blue" arial-hidden="true"></i> Score Board</button></form>
   <form method="post" action="logout.php"><button type="submit" class="button list-group-item w3-black w3-text-light-grey" name="list" value="Logout" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-sign-out fa-fw w3-text-purple" arial-hidden="true"></i>Logout</button></form>
</div>
  </div>

  <div class="w3-threequarter"> 
  <?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM user_login WHERE username = '" . $_SESSION['username'] . "'");
while($row = mysqli_fetch_array($result)) {
//$fname = $row['surname'].'&nbsp;'.  $row['othernames'];
$fname = $row['name'];
$categ = $row['privilege'];
$calphone = $row['phone'];
$caladdress = $row['address'];
/*$datebirth = $row['dateofbirth'];*/
$calemail = $row['email'];
$gender = $row['sex'];

}


 $list ='';

  echo '<p style="margin-top: 0%; font-size:14px"><i class="fa fa-caret-right"></i> Welcome! '.$fname.'</p>';

				
			if (isset($_POST['list'])) {
				$list = $_POST['list'];
			
			
			if ($list == '')
			{

			}
			
					
			if (($list=='View Tickets') && ($categ=='Client')) {
			//include 'view_tick.php';
			include 'view_tick.php';
			//exit();
			}
			
			if ($list=='Score Board') {
			include 'scoreboard.php';
			//exit();
			}
			
			if ($list=='Fixtures') {
			include 'fixtures.php';
			//exit();
			}
			
			if ($list=='User Management') {
			/*include 'sample.php';*/
			include 'userman.php';
			//exit();
			}
			if ($list=='Asset Management') {
			/*include 'sample.php';*/
			include 'asset_man.php';
			//exit();
			}
			
			if ($list=='Filter by State') {
			include 'auth_filter_state.php';
			//exit();
			}
			
			if ($list=='Filter by Gender') {
			/*include 'sample.php';*/
			include 'auth_filter_gender.php';
			//exit();
			}
			
			if ($list=='Filter by Sport') {
			/*include 'sample.php';*/
			include 'auth_filter_sport.php';
			//exit();
			}
			
			#####################
			if ($list=='Track by Status') {
			include 'auth_track_status.php';
			//exit();
			}
			
			if ($list=='Track by Category') {
			/*include 'sample.php';*/
			include 'auth_track_categ.php';
			//exit();
			}
			
			if ($list=='Track by ID') {
			/*include 'sample.php';*/
			include 'auth_track_id.php';
			//exit();
			}
			
			if ($list=='Official Remark') {
			/*include 'sample.php';*/
			include 'auth_remark.php';
			//exit();
			}
			
			if ($list=='Preview') {
			/*include 'sample.php';*/
			include 'personal_info.php';
			//exit();
			}
			
			if ($list=='Preview Asset') {
			/*include 'sample.php';*/
			include 'asset_info.php';
			//exit();
			}
			
			if ($list=='Dashboard') {
			include '../plotter/index.php';
			
			}
			if ($list=='Consultants Analysis') {
			include '../plotter/consultancy.php';
			}
			if ($list=='Financial Analysis') {
			include '../deprecat_analyzer.php';
			}
			if ($list=='Technical Report') {
			include '../page.php';
			}
			if ($list=='Phased Budgeting') {
			include '../phased_budg.php';
			}
			if ($list=='Assets Listing') {
			include '../mylisting.php';
			}
			
			
			}
					else {
	 echo '<center><img src="../images/class_icon.jpg" width="50%" style="opacity:0.7;"></center>';
   
	}
	
	?>
			

	

	
  </div>
   <div class="w3-quarter"></div>
  
 </div></div>
 

<div class="w3-row-padding">
   <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>
   
<div class="w3-row-padding ">
<div class="w3-quarter w3-text-light-grey" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200">
</div> 
<div class="w3-half" data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1200"></div>
</div>

<div class="w3-row-padding ">
   <div class="w3-col w3-center"></div>
  
   </div>

<div class="w3-row-padding w3-center" style="background-color: #333">

<h8 class="w3-text-light-grey">Glowing Ages Academy  <i class="fa fa-copyright" ></i> 2024 | all rights reserved</h8>
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