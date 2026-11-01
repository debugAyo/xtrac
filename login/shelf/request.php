<!DOCTYPE html>
<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="icon/bks_icon.gif">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/mine.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../js/scroller.js"></script>
   <link rel="stylesheet" href="style.css">


</head>

<body>
  <div class="w3-row-padding ">
<div class="w3-threequarter w3-border">

<h3 class="w3-center">Books Request</h3>
     
<div class=""><form action="shelf/auth_request.php" method="POST">
<p>
<input type="text" class="body-parag" name="pin" placeholder="Visitor's PIN" >
<input type="text" class="body-parag" name="tagno" placeholder="Book's Tag No" >
<label for="Date" class="w3-text-grey">Check-Out Date</label>
<input type="date" name="chkout_date" class="w3-text-grey" value="">
<label for="Date" class="w3-text-grey">Check-In Date</label>
<input type="date" name="chkin_date" class="w3-text-grey" value="">

<select class="body-parag" name="status">
<option class="w3-text-grey">Select Status</option>
<option class="w3-text-grey">Check Out</option>
</select>
<label for=""></label>

 <p><center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></p></form>
 </div>

  <div class="w3-quarter"></div></div>
  
  </body>
  </html>
