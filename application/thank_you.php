<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>FixApp - Tech Finder</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #FFF;
    border-radius: 6px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","get_user.php?q="+str,true);
  xmlhttp.send();
}

  
</script>
<script>
var cur = 0;
function displayDiv(idx) {
    document.getElementById("div"+cur).style.display = "none";
    document.getElementById("div"+idx).style.display = "block";
    cur = idx;
    return true;
}
</script>


</head>



<body>

<div class="card">
<div class="sub-parag">Congratulations!</div>

<div class="body-parag">Your Application No. <?php echo $app_code; ?>  was well received. <p>We will get back to you within the next 24 hours. You will receive an email from us, 
containing your Schedule of Invitation for Interview</p>.</div>
</div>




</body>
</html>