<!DOCTYPE html>
<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="icon/bks_icon.gif">
<title>Books Embassy | Study Abroad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/mine.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" type="text/../css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../js/scroller.js"></script>

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
<script type="text/javascript">
function load() {
var feed ="http://feeds.bbci.co.uk/news/world/rss.xml";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

</head>
<body>
 <div class="fixed-header w3-row-padding">
<div class="w3-quarter"><img src="../images/logo.jpg" class="avatar"></div>
<div class="w3-half">
<div class="topnav">
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
    </div> 
    </div>
    <div class="w3-quarter"><a href="../login/index.php" class="login-btn">Log In</a><a href="" class="login-btn">Sign Up</a>
</div>
          </div>
              
  <div class="w3-row-padding"><div class="w3-quarter"></div>
  <div class="w3-half">
  <div class="w3-quarter"></div> 
  </div></div>

  <div class="w3-row-padding">
  <div class="w3-col"> 
  </div></div>
  
  <div class="w3-row-padding"><div class="w3-quarter">
  <div class="left">
         </div>

  
  </div>
    <div class="w3-half w3-border">
      <h3 class="w3-center">Sign Up</h3>
   <?php include 'signup.php'; ?></p>
  </div>
  <div class="w3-quarter"></div>
  </div>
<div class="w3-row-padding">
<div class="w3-col"></div></div>



   <div class="w3-row-padding">
  <div class="w3-col"> 
  </div></div>
  
<div class="image">
<div class="w3-row-padding">
<div class="w3-col"></div></div>
<div class="w3-row-padding">
<div class="w3-col"></div></div>
<div class="w3-row-padding">
<div class="w3-quarter">

<div id="myLinks">
   <a style="text-decoration: none; font-size:14px; color: #eee" href="../index.php">Home</a>
   <p><a style="text-decoration: none; font-size:14px; color: #eee" href="../studyabroad.php">Study Abroad</a></p>
   <p><a style="text-decoration: none; font-size:14px; color: #eee" href="../universities.php">Universities</a></p>
   <p><a style="text-decoration: none; font-size:14px; color: #eee" href="../courses.php">Programmes</a></p>
   <p><a style="text-decoration: none; font-size:14px; color: #eee" href="../support.php">Support</a></p>
   <p><a style="text-decoration: none; font-size:14px; color: #eee" href="../contact.php">Contact</a></p>
  </div>
</div>

<div class="w3-half">
<i class="fa fa-map-marker" style="font-size:14px; color: #eee"></i><a style="font-family:arial; font-size:14px; color: #eee"> 2nd Floor, Gwanda Centre, Fria Close, Wuse II, Abuja, Nigeria | West Africa.</a>
<p><i class="fa fa-phone" style="font-size:14px; color: #eee"></i><a style="font-family:arial; font-size:14px; color: #eee"> +234-806-964-9376, +234-807-072-1529</a></p>
<p><i class="fa fa-envelope" style="font-size:14px; color: #eee"></i><a style="font-family:arial; font-size:14px; color: #eee"> info@booksembassy.com</a></p>
<p><i class="fa fa-clock-o" style="font-size:14px; color: #eee"></i><a style="font-family:arial; font-size:14px; color: #eee"> Mon-Sun: 24hrs</a></p>

</div> 

<div class="w3-quarter">
<a href="https://www.facebook.com/booksembassy"><img src="../icon/fb.png" width="50px" height="50px"></a>
<p><a href="https://www.twitter.com/booksembassy"><img src="../icon/twt.png" width="50px" height="50px"></a></p>
<p><a href="https://www.instagram.com/booksembassy"><img src="../icon/ins.png" width="50px" height="50px"></a></p>
<p><a href="https://www.youtube.com/booksembassy"><img src="../icon/ytb.png" width="50px" height="50px"></a></p>
</div>
</div></div>

<div class="w3-row-padding w3-indigo">
<div class="w3-col"> <center>
<p style="font-family:arial; font-size:12px; color: #eee">booksembassy  <i class="fa fa-copyright" style="font-size:12px"></i><a style="font-family:arial; font-size:12px; color: #eee"> 2022</a> | all rights reserved
 </center></div></div>


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
