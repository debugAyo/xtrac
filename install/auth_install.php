<!DOCTYPE html>
<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="../icon/peta_icon.gif">
<title>xTrac | Setup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/customize.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 

<script type="text/javascript" src="js/scroller.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: auto;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>


<style>
  
 .wrapper {
  overflow: hidden;
  display: flex;
  height: 400px;
  width: 1200px;
  margin: 0 auto;
 /* overflow-x: scroll; this enables you to control the scroll if you uncoment it.*/*/
}

.wrapper div {
  height: 300px;
  min-width: 300px;
  margin-left: 100px; 

  
}

.pink {
  background-color: pink;
  border-radius: 8px;
}

.blue {
  background-color: blue;
  border-radius: 8px;
}

.yellow {
  background-color: yellow;
  border-radius: 8px;
}

.orange {
  background-color: orange;
  border-radius: 8px;
}

.purple {
  background-color: purple;
  border-radius: 8px;
}

.aqua {
  background-color: aqua;
  border-radius: 8px;
}

@keyframes slide {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-1500px, 0, 0); /* The image width */
  }
}


.wrapper div {
  height: 300px;
  min-width: 300px;
  margin-left: 80px;
  border: 4px solid #CCC;
  animation: slide 25s alternate infinite;
  /*animation: slide 35s linear infinite;*/
  
}

@media (max-width: 768px) {
  .wrapper {
  width: 100%
  margin: 0 auto;
  overflow-x: scroll; /*this enables you to control the scroll if you uncoment it.*/*/
}

.wrapper div {
  height: 300px;
  min-width: 300px;
  margin-left: 80px;
  /*animation: slide 25s alternate infinite;*/
  animation: slide 35s linear infinite;


 }  
 
 </style>


<script type="text/javascript">
function load() {
var feed ="http://feeds.bbci.co.uk/news/world/rss.xml";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

<script>
/*This script is used to block right clicking or selection on the webpage.*/
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="fixed-header w3-row w3-border-bottom w3-border-grey">
<div class="w3-col w3-container m1 l1"></div>
<div class="w3-col w3-container m10 l10 w3-center"><img src="images/logo.jpg" class="avatar" >
    </div>
 
  <div class="w3-col w3-container m1 l1"></div>
  </div>
   </div>
   </div>

<div class="hero-image">


<div class="w3-row-padding">
  <div class="w3-col w3-container m4 l4"></div>
   <div class="w3-col w3-container m5 l5"> </div>
    <div class="w3-col w3-container m5 l5"></div>
     <div class="w3-col w3-container m4 l4"></div>
   </div>
<div class="w3-row-padding">
  <div class="w3-col w3-container m2 l2"></div>
   <div class="w3-col w3-container m4 l4">
		
						<?php
echo '<font size=1.5, face=arial>';

         $hostname = $_POST['hostname']; 
		$dataname = $_POST['dataname']; 
		$usrname = $_POST['usrname']; 
		$psswrd = $_POST['psswrd'];
    
if(!($_POST['usrname'])){
echo 'You cannot send empty value';
exit();
}
 include '../link/connect.php';
   
  // echo 'Connected successfully';
	
  $sql = 'CREATE Database itam';
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
         	echo '<p>';
      echo 'Could not create database: Name already exist';
      //('Could not create database: ' . mysql_error());
   }
  else { 
        	echo '<p>';
   //echo "Database '$dataname' created successfully\n";
   echo "Your <b> <font color=green>DATABASE </font></b>has been completed\n";
   }
 // mysql_select_db('$dataname'); 
 
 mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE custom( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'name VARCHAR (50) NOT NULL, '.
      'logo MEDIUMBLOB, '.
      'address  VARCHAR(50) NOT NULL, '.
      	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Custom Details </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Custom Details</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

  mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE admin_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	  'img BLOB NOT NULL, '.
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Admin Staff </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Admin Department</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}


 mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE procurement_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	  'img BLOB NOT NULL, '.
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Procurement Staff </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Procurement Department</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}


mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE billing_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	  'img BLOB NOT NULL, '.
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Billing Staff </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Billing Department</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

  
mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE account_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
      'img BLOB NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Account Staff </font></b>created successfully";
} else {
    echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Account Department</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}
mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE user_login( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(100) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept  VARCHAR(100) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(200) NOT NULL, '.
      'st_org  VARCHAR(100) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(100) NOT NULL, '.
      'email  VARCHAR(100) NOT NULL, '.
	  'username  VARCHAR(100) NOT NULL, '.
	  'password  VARCHAR(100) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
      'img VARCHAR (100) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>User </font></b>created successfully";
} else {
   echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>User</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE ict_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
      'img BLOB NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>ICT Staff </font></b>created successfully";
} else {
   echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>ICT Department</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE sec_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	  'img BLOB NOT NULL, '.
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Security Staff </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Security Staff</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE additem( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devtype VARCHAR (100) NOT NULL, '.
      'maintype CHAR(100) NOT NULL, '.
      'rackmount  VARCHAR(100) NOT NULL, '.
      'maintnote  VARCHAR(500) NOT NULL, '.
      'hardrive    VARCHAR(100) NOT NULL, '.
      'mandate DATE NOT NULL, '.
      'ramsize VARCHAR(100) NOT NULL, '.
      'devname  VARCHAR(100) NOT NULL, '.
      'cpumode CHAR(100) NOT NULL, '.
      'manuname  VARCHAR(100) NOT NULL, '.
      'cpu VARCHAR (100) NOT NULL, '.
      'serial VARCHAR(100) NOT NULL, '.
      'corecpu  VARCHAR(100) NOT NULL, '.
      'macaddr  VARCHAR(100) NOT NULL, '.
	  'source VARCHAR (100) NOT NULL, '.
      'ipaddress CHAR(100) NOT NULL, '.
      'purprice  VARCHAR(100) NOT NULL, '.
      'waranty  VARCHAR(100) NOT NULL, '.
      'curprice    VARCHAR(100) NOT NULL, '.
      'prodate DATE NOT NULL, '.
      'curdate DATE NOT NULL, '.
      'deversion VARCHAR(100) NOT NULL, '.
      'devid  VARCHAR(100) NOT NULL, '.
      'curversion CHAR(100) NOT NULL, '.
      'devstat  VARCHAR(100) NOT NULL, '.
      'vendor VARCHAR (100) NOT NULL, '.
      'deptmnt VARCHAR(100) NOT NULL, '.
      'phone  VARCHAR(100) NOT NULL, '.
      'location  VARCHAR(100) NOT NULL, '.
      'pic  BLOB NOT NULL, '.
      'endlife DATE NOT NULL, '.
		'primary key ( sn ))';
      	
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Add Item </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Add Item</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}



mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE software_ass( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devid VARCHAR (200) NOT NULL, '.
      'softversion CHAR(200) NOT NULL, '.
      'manuname  VARCHAR(200) NOT NULL, '.
      'devicat  VARCHAR(200) NOT NULL, '.
      'licence    VARCHAR(200) NOT NULL, '.
      'licinfo VARCHAR(200) NOT NULL, '.
      'supservice  VARCHAR(200) NOT NULL, '.
      'prodate DATE NOT NULL, '.
      	
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Software Association </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Software Association</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}


mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE parts_ass( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devid VARCHAR (200) NOT NULL, '.
      'devtype CHAR(200) NOT NULL, '.
      'partname  VARCHAR(200) NOT NULL, '.
      'manuname  VARCHAR(200) NOT NULL, '.
      'model    VARCHAR(200) NOT NULL, '.
      'serial VARCHAR(200) NOT NULL, '.
            	
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Parts Association </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Parts Association</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}


mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE invoice_ass( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devid VARCHAR (200) NOT NULL, '.
      'vendor CHAR(200) NOT NULL, '.
      'deldate  VARCHAR(200) NOT NULL, '.
      'orderno  VARCHAR(200) NOT NULL, '.
      'invoice    VARCHAR(200) NOT NULL, '.
      'pic  BLOB NOT NULL, '.
            	
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Invoice Association </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Invoice Association</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}
	

mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE contract_ass( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devid VARCHAR (200) NOT NULL, '.
      'cont_dsc CHAR(200) NOT NULL, '.
      'company  VARCHAR(200) NOT NULL, '.
      'address  VARCHAR(200) NOT NULL, '.
      'phone    VARCHAR(200) NOT NULL, '.
      'email  VARCHAR(200) NOT NULL, '.
      'support    VARCHAR(200) NOT NULL, '.
      'pic  BLOB NOT NULL, '.
            	
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Contract Association </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Contract Association</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"itam");
   
  $sql = 'CREATE TABLE finance_acct( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'devid VARCHAR (100) NOT NULL, '.
      'devname  VARCHAR(100) NOT NULL, '.
      'manuname  VARCHAR(100) NOT NULL, '.
      'cpu VARCHAR (100) NOT NULL, '.
      'serial VARCHAR(100) NOT NULL, '.
      'purprice  VARCHAR(100) NOT NULL, '.
      'prodate DATE NOT NULL, '.
      'curdate DATE NOT NULL, '.
      'acct_ref VARCHAR(100) NOT NULL, '.
      'deprecat_month  VARCHAR(100) NOT NULL, '.
      'salvage_cost VARCHAR (100) NOT NULL, '.
      'deprecat_method VARCHAR(100) NOT NULL, '.
      'deprecat_rate  VARCHAR(100) NOT NULL, '.
      'location  VARCHAR(100) NOT NULL, '.
                 	
		'primary key ( sn ))';
      	
        	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Financial Accounting</font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Financial Accounting</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

  
mysqli_select_db($conn,"itam");   
   
  $sql = 'CREATE TABLE req_form( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'staffid VARCHAR (20) NOT NULL, '.
      'dept CHAR(200) NOT NULL, '.
      'request  VARCHAR(200) NOT NULL, '.
      'devid  VARCHAR(200) NOT NULL, '.
      'curloc    VARCHAR(200) NOT NULL, '.
      'newloc VARCHAR(200) NOT NULL, '.
      'checkoutdt DATE NOT NULL, '.
      'returndt  DATE NOT NULL, '.
      'declaration CHAR(200) NOT NULL, '.
      'signature  VARCHAR(200) NOT NULL, '.
      	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Request Form </font></b>now created successfully";
} else {
    echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Request Form</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}


   mysqli_close($conn);
   
  
?>
</div>
  <div class="w3-col w3-container m4 l4">
	<h6>xTrac Customization</h6>

<form enctype="multipart/form-data" action="auth_custom.php"  method="post">	
<input type="text" name="name" placeholder="name of your organization" style="border-radius: 0px; font-size: 12px">
<label style="font-size: 12px">Organization Logo</label>
<input type="file" accept="image/jpeg" name="pass" class="file" style="border-radius: 0px; font-size: 12px">	
 <input type="text" name="addr" placeholder="address of your organization" style="border-radius: 0px; font-size: 12px">
   <center><input type="submit" value="Create" name="submit" class="login-btn w3-light-green"><input type="reset" value="Reset" name="cancel" class="login-btn w3-light-grey"></center>
		</form>																		
				</div>
				 <div class="w3-col w3-container m2 l2"></div>
				
				</div>
 <div class="w3-row-padding">
  <div class="w3-col w3-container m4 l4"></div>
   <div class="w3-col w3-container m5 l5"> </div>
    <div class="w3-col w3-container m5 l5"></div>
     <div class="w3-col w3-container m4 l4"></div>
   </div>
<div class="image"> 
<div class="w3-row-padding">
<div class="w3-half w3-text-grey" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200" >
</div> 
<div class="w3-quarter w3-text-light-grey" data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1200">
<p class="w3-padding-medium">

</p> 
</div>

<div class="w3-quarter  w3-text-light-grey" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200">
</div>
</div></div>


<div class="w3-row-padding w3-border-top w3-border-grey">
<div class="w3-col"> <center>
<h8 class="w3-text-grey">jis  <i class="fa fa-copyright" ></i> 2023 | all rights reserved</h8>
 </center></div></div>

 <script src="aos-master/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>




</body>
</html>