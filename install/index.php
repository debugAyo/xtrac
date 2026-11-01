<!DOCTYPE html>
<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="../icon/peta_icon.gif">
<title>xTrac | Install</title>
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
  <div class="w3-col w3-container m2 l2"></div>
   <div class="w3-col w3-container m8 l8">
   <h3 class="w3-center w3-text-blue">Create Database and Tables</h3> 
    <h7><center>Use the form fields below to execute the dependecies</center></h7>
   </div>
     <div class="w3-col w3-container m2 l2"></div>
   </div>
   
<div class="w3-row-padding">
<div class="w3-col w3-container m2 l2"></div>
  <div class="w3-col w3-container m4 l4 w3-light-grey">
  <p class="w3-padding-medium">
<h6 style="font-size: 13px">Juanlee Integrated Services Ltd,</h6> 
<i class="fa fa-map-marker w3-text-light-blue" style="font-size:14px;"></i><a style="text-decoration: none; font-size:12px;"> 70, Kur Mohammed Avenue, Kebbi House, CBD, Abuja - Nigeria.</a><br />
<i class="fa fa-phone w3-text-light-blue" style="font-size:14px;"></i><a style="text-decoration: none; font-size:12px;"> +234-803-855-2420</a> <br />
<i class="fa fa-whatsapp w3-text-light-blue"></i><a style="text-decoration: none; font-size:12px;"> +234-803-855-2420</a><br />
<i class="fa fa-envelope w3-text-light-blue" style="font-size:14px;"></i><a style="text-decoration: none; font-size:12px;"> info@juanleeng.com</a><br />
<i class="fa fa-clock-o w3-text-light-blue" style="font-size:14px;"></i><a style="text-decoration: none; font-size:12px;"> Mon-Fri: 8am - 5pm</a>
</p>
<p class="w3-padding-medium">
 <a href="https://www.facebook.com/juanleeng"><i class="fa fa-facebook w3-text-light-blue" style="font-size: 22px; padding:10px; border: 1px solid #555;"></i></a> <a href="https://www.twitter.com/juanleeng"><i class="fa fa-twitter w3-text-light-blue" style="font-size: 22px; padding:10px; border: 1px solid #555; "></i></a>
 <a href="https://www.instagram.com/juanleeng"><i class="fa fa-instagram w3-text-light-blue" style="font-size: 22px; padding:10px; border: 1px solid #555;"></i></a> <a href="https://www.youtube.com/juanleeng"><i class="fa fa-youtube w3-text-light-blue" style="font-size: 22px; padding:10px; border: 1px solid #555;"></i></a></p>

  </div>
   <div class="w3-col w3-container m4 l4 w3-padding-xxlarge w3-blue"> 
 <form action="auth_install.php" method="post">
   <input type="text" name="dataname" readonly value="itam" style="border-radius: 0px; font-family: courier new; font-size: 12px; color: #eee">
   <input type="text" name="hostname" value="localhost" style="border-radius: 0px; font-family: courier new; font-size: 12px; color: #eee">
   <input type="text" name="usrname"  value="root" style="border-radius: 0px; font-family: courier new; font-size: 12px; color: #eee">
   <input type="password" name="psswrd" placeholder="password" style="border-radius: 0px; font-family: courier new; font-size: 12px; color: #eee">
   <center><input type="submit" value="Create" name="submit" class="login-btn w3-light-blue"><input type="reset" value="Reset" name="cancel" class="login-btn w3-light-grey"></center>
</form>
   </div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>
   
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