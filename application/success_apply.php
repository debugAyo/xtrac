<!DOCTYPE html>
<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="icon/bks_icon.gif">

<title>Books Embassy | home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif, Humanst521 Lt BT;
  
 background-color:#fff;
 width: 100%;
}

.img-size {
width: 100%;
height: 550px;
}

.logo-size {
width: 80px;
height: 60px;
}

.prof_img {
width:100%; 
height:380px;
}
.active {
  background-color: #717171;
}

@keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
}
}

.text {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.fixed-header, .fixed-footer{
        width: 100%;  
        padding: 0px 0;
        color: #;
        
        
    }
    .fixed-header{
        top: 0;
        position: fixed; 
        background: #006699;
        z-index: 1;
        text-align: left;
    }
    .fixed-footer{
        bottom: 0;
        height: 200px;
        position: relative;
         background: #333;
         text-align: center;
    }

.footer {
  text-align: center;
  padding: 3px;
  background-color: #3C3C3C;
  color: #999;
  margin-top: 10%;
  width: 100%;
  height:200px;

}
.hero-image {
 
 background-image: url('images/blm_new_tower.jpg'); 
 height: 1000pt;
 background-position: center; 
 background-repeat: no-repeat; 
 background-size: cover; 
 position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 20%;
  left: 30%;
  transform: translate(-20%, -40%);
  color:#333;
}

.hero-head {
  text-align: left;
  position: absolute;
  top: 35%;
  left: 30%;
  transform: translate(-80%, -60%);
  /*color:#CC9900;*/
  color:#C9945F;
  font-size: 25px;
}
.hero-main {
  text-align: center;
  position: absolute;
  top: 80%;
  left: 50%;
  color: #C9945F;
}
p.round1 {
  width: 125px;
  border: 2px solid  #999;
  border-radius: 16px;
  padding: 2px;
  margin-left: ;
  font-color: #eee;
}

p.round2 {
  border: 0px solid  #ddd;
  border-radius:8px;
  border-width: 3px;
  height: 60px;
  background-color: #CC0066;
  /*background-color: #006699;*/
  padding: 0px 5px;
    
}

p.round3 {
  border: 2px solid #C9945F;
  border-radius: 12px;
  padding: 16px;
}

.arrow {
  border: solid black;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 2px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
* {
  box-sizing: border-box;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  height: 50px;
}

.navbar a {
  float: left;
  display: block;
  color: #CCDDDD;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #517979;
  color: #fff;
}


.topnav {
  overflow: hidden; 
  background-color: #00558D;
  position: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  font-family: arial;

}

.topnav a {
  float: left;
  color: #fff;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a.icon {
  float: right;
}

.topnav a:hover {
  background-color: #CC0000;
  color: fff;
}

.active {
  background-color: #CC0066;
  color: white;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: auto; /* Used in this example to enable scrolling */
  width:100%;
}

.maintext {
  position: absolute; 
  width: 95%; 
  margin: 0px 20px; 
  color: #000 ;
  padding: 16px;
  text-decoration: none;
  font-size: 17px;

}

.sub-head {
float: center;
font-size: 20px;
color: #999;
margin-left: 0px;
margin-right: 0px;
margin-top: 0px;
width: 90%;


}

.body-parag {

margin-left: 0px;
margin-right: 0px;
width: 90%; 
margin-top: 10px; 
font-size:18px; 
text-align: left;
font-color: #666;
}

.sub-parag {
width: 90%;
font-size: 40px; 
text-align: center;
color: #006699;
}

.sub-tour {
font-size: 40px; 
text-align: center;
color: #CC0066;
}

.crd-text {
width: 90%;
font-size: 20px; 
text-align: center;
color: #FFF;

}
input[type=text], input[type=password], input[type=date],  select, textarea {

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border-radius: 4px;
  box-sizing: border-box;
  /*border: 2px solid #D7E3E3;*/
  background-color: #FFF;
  
  border-left-width: 0px;
  border-right-width: 0px; 
  border-top-width: 0px; 
  border-bottom-style: solid;
  border-bottom-width: 2px;
  border-color:  #00B8F4; 
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 4px 0;
  margin-left: 0px;
  border: none;
  cursor: pointer;
  width:auto; 
  border-radius: 8px;
}

input[type=submit], input[type=reset]{
  background-color: #0099CC;
  color: white;
  padding: 14px 20px;
  margin: 8px 2px;
  margin-left: 0px;
  border: none;
  cursor: pointer;
  width:auto; 
  border-radius: 14px;
}


@font-face {
   font-family: myFirstFont;
   src: url(../fonts/hp-simplified-light-153.ttf);
}

@font-face {
   font-family: myFirstFont;
   src: url(../fonts/hp-simplified-light-153.ttf);
   font-weight: bold;
}

* {
   font-family: myFirstFont;
}


div {
  font-family: myFirstFont;
  
  font-style: normal; 
  font-variant-ligatures: normal; 
  font-variant-caps: normal; 
  font-weight: 60; 
  letter-spacing: normal; 
  orphans: 2; 
  text-align: start; 
  text-indent: 0px; 
  text-transform: none; 
  white-space: normal; 
  widows: 2; 
  word-spacing: 1px;
  line-height: 1.0;

}

ul {
  list-style-type: none;
  margin: 0 20;
  padding: 15;
  overflow: hidden;
  background-color: #;
     
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover:not(.active) {
  background-color: #ddd;

}

.active {
  background-color: #C9945F;
 
}

.column {
  float: left;
  width: 65.00%;
  padding: 15px;
}

.column-a {
  float: left;
  width: 25.00%;
  padding: 15px;
}

.column-b {
  float: left;
  width: 10.00%;
  padding: 15px;
}
.column-c {
  float: left;
  width: 20.00%;
  padding: 15px;
}

.column-d {
  float: left;
  width: 10.00%;
  padding: 15px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 10px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */

.icon-bar {
  position: fixed;
  top: 50%;
  right: 5%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: CC0066;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #CCC;
 
}

.facebook {
  /*background: #3B5998;*/
  background: #;
  color: #006699;
}

.twitter {
  /*background: #55ACEE;*/
  background: #;
  color: #006699;
}

.google {
 /* background: #dd4b39;*/
 background: #;
  color: #006699;
}

.linkedin {
  /*background: #007bb5;*/
  background: #;
  color: #006699;
}

.instagram {
  /*background: #bb0000;*/
  background: #;
  color: #006699;
}

@media screen and (max-width: 400px) {
  .column, flip-card {
    width: 100%;
    display: block;
    margin-bottom: 30px;
  }
 
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #0099FF;
    border-radius: 4px;
}

.card-header {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #FFF;
    border-radius: 4px;
}

.flip-card {
  background-color: transparent;
  padding: 10px;
  /*text-align: center;*/
  background-color: #f1f1f1;
  border-radius: 6px;
  height: 500px;

  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  /*text-align: center;*/
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #f1f1f1;
  color: black;
}

.flip-card-back {
 /* background-color: #2980b9;*/
 background-color: #CC0066;
  color: white;
  transform: rotateY(180deg);
}
.button {
  background-color: #993366; /* Green */
  border-radius: 8px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

button:link, button:visited {
  background-color: #FF0066;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

a:hover, a:active {
  background-color:#FF0066 ;
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}



@media screen and (max-width: 400px) {
  .maintext {
    width: 100%;
    margin: 0px 10px; 
    font-size:5px; 
  
      }
      
.sub-head {
font-size: 20px;
margin-left: 10px;
margin-right: 10px;
margin-top: 10px;
text-align: center;


}

.body-parag {
margin-left: 0px;
margin-right: 0px; 
font-size: 14px; 
float: center;

}
   
   .sub-parag {
font-size: 30px; 
text-align: center;
color: #333;
/*font-family: arial;*/
}

.img-size {
width: 100%;
height: 550px;
}
.column {
  float: left;
  width: 100%;
  padding: 15px;
}

.column-c {
  float: left;
  width: 50px;
  padding: 5px;
  font-size: 8px;
}

.column-d {
  float: left;
  width: 50px;
  padding: 5px;
  font-size: 8px;
}
.logo-size {
width: 45px;
height: 10px;
}
p.round1 {
  width: 35px;
  border: 1px solid  #999;
  border-radius: 2px;
  padding: 2px;
  margin-left: ;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../script/w3.css">


</head>
<body> 
<div class="fixed-header">
	<div  class="topnav">
    <div id="myLinks">
    <a href="#"><img src="../images/logo.jpg" class="logo-size"></a>
    <a href="../index.php">Home</a>
    <a href="../aboutus.php">About Us</a>
    <a href="../services.php">Our Services</a>
    <a href="apply.php">Apply Here</a>
    <a href="../contact.php">Contact Us</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div></div>

<div class="hero-image">
     
 <div class="main">


<div class="row">
   <div class="column-a">
   </div>
   <div class="column">
   </div>
   <div class="column-b">
   </div></div>
   

<div class="row">

   <div class="column-a">
   </div>
   <div class="column"> <div class="sub-head"></div></div>
   <div class="column-b">
   <?php
   include '../connect.php';
   $query="SELECT * FROM new_application WHERE call_phone='$cal_phone'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
$app_code = $row['applicat_no'];

}

}
?>
   </div></div>

  <div class="row">
   <div class="column-a">
   <div class="sub-parag"><a href="apply.php" style="text-decoration: none;">ATTENTION</a></div>
   <h3><a href="apply.php" style="text-decoration: none;"><img src="../images/apply.jpg"  alt="Avatar" style="width:90%; height:auto"></a>   </h3>

  <div class="body-parag"><left>Dear Applicant, <br />Kindly fill in the correct information, as submitting the right information would expedite the process. <hr />
  You are also implored to scan all the required documents and submit as a single document or file in PDF format, not more than 5MB by size.</center></div>
   </div>
 
   <div class="column">
    <div class="body-parag">
    
    <?php include 'thank_you.php'; ?></div>
   </div>
   
  <div class="column-b">
  <div class="icon-bar">
  <a href="https://web.facebook.com/booksembassy" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.instagram.com/booksembassy/" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://twitter.com/booksembassy/" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.linkedin.com/company/booksembassy" class="linkedin"><i class="fa fa-linkedin"></i></a>
  </div>
  </div></div>
   

   </div>  
 		</div>
	 
 
 <div class="footer">
    <center><p style="margin: 0px 0px; font-size:50px"><i class="fa fa-map-marker" style="font-size:12px; color: #CCCC00"></i><a style="font-family:arial; font-size:12px; color: #666">Gwanda Centre, No. 2, Fria Close, Wuse II, Abuja, Nigeria.</a>
 <i class="fa fa-phone" style="font-size:12px; color: #CCCC00"></i><a style="font-family:arial; font-size:12px; color: #666"> +234-806-964-9376, +234-807-072-1529</a>
 <i class="material-icons" style="font-size:12px; color: #CCCC00">mail</i><a style="font-family:arial; font-size:12px; color: #666">info@booksembassy.com</a>
 <i class="fa fa-clock-o" style="font-size:12px; color: #CCCC00"></i><a style="font-family:arial; font-size:12px; color: #666"> Mon-Sun: 24hrs</a></p>
<p style="font-family:arial; font-size:12px; color: #666">booksembassy  <i class="fa fa-copyright" style="font-size:12px"></i><a style="font-family:arial; font-size:12px; color: #666"> 2022</a> | all rights reserved</p>
</center></div>



<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


</body>
</html>