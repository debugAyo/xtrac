				 <html>
<head>
<title></title>
 <script type = "text/JavaScript">
         <!--
          /*  function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }*/
         //-->
      </script>
</head>
<body onload = "JavaScript:AutoRefresh(8000);">

<div class="w3-row-padding">

<div class="w3-threequarter w3-padding-large w3-white w3-border">

<?php

include '../link/connect.php';

$query="SELECT * FROM delegated_artisan WHERE call_name = '$fname' && status = 'Available'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) < 1)
{

$sql = "INSERT INTO delegated_artisan (ticket_no, tickname, call_name, call_phone, tickassign_name, tickassign_phone, opendate, call_address, spec, photo, pro_name, pro_phone, pro_email, pro_spec, date, pro_locat, pro_city, pro_state, status) SELECT new_ticket.ticket_no, new_ticket.tickname, new_ticket.call_name, new_ticket.call_phone, new_ticket.tickassign_name, new_ticket.tickassign_phone, new_ticket.opendate, new_ticket.call_address, new_ticket.spec, artisan_reg.photo, artisan_reg.pro_name, artisan_reg.pro_phone, artisan_reg.pro_email, artisan_reg.spec, artisan_reg.date, artisan_reg.pro_locat, artisan_reg.pro_city, artisan_reg.pro_state, artisan_reg.status FROM new_ticket INNER JOIN artisan_reg ON new_ticket.spec = artisan_reg.spec WHERE new_ticket.call_name = '$fname'";
if ($conn->query($sql) === TRUE) {

include 'artisan.php';

}
}
else {
include 'artisan.php';

}

?>

<h4>CAUTION:</h4><br />
<p style="font-size:12px"> 
a. Don't initiate any unofficial discussion with the Service Provider.<br /> 
b. Disregard any Payment Request, Invoice or Bill of Quantities from the Service Provider <br />
c. Understand that all transactions are communicated through our official platform on <a href="mailto:billing@askng.com">billing@askng.com </a><br />
d. Ensure progress of the service processes are communicated via <a href="mailto:report@askng.com">report@askng.com </a><br />
e. Endeavour to report any form of abuse, malpractice or unsatisfactory service delivery <a href="mailto:complaint@askng.com">here</a>

</p>
<h2>SERVICE DISCLAIMER:</h2>
<p style="font-size:12px"> 
You've agreed that your use of this application is based on transparency in all transactions. 
Therefore, any shady, unofficial or backdoor appointment with any of the service providers will be at your sole risk. 
Hence, we disclaim any claims of liability, indemnity and warranty with respect to your use of the application 
in connection with any damage or harm resulting from any unofficial interactions or transactions with the service provider. 
Although we reserve the right, but have no obligation, to monitor or manage shady interactions between you and any 
acclaimed registered service provider on our platform. 
</p>
</div>
<div class="w3-quarter"></div>
</div>
</body>
</html>