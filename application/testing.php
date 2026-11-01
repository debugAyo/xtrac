<?php

###############################################################################
##															 				 ##	
##  This is the email alert an applicant gets upon submitting an application ##
## 															   				 ##	
###############################################################################

//$to = 'sunnywealth@gmail.com';
	$to = $cal_email;

$headers = "From: info@glowingages.com/deskman";
//$subject = "Notification Alert";
//$body = 'Thank you for submitting your application to Books Embassy.';

$subject = 'Notification Alert';

// html message

$htmlmsg = '<html>

<div class="hero-image">

<div class="w3-row-padding">
   <div class="w3-col w3-container m1 l1"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m3 l3"></div>
   <div class="w3-col w3-container m2 l2"></div>
   </div>

<body>
<div class="w3-row-padding">
<div class="w3-quarter"></div>
<div class="w3-half w3-border">
<h2 class="w3-left"><img src="https://www.glowingages.com/deskman/images/logo.JPG" width="25%"></h2>
<p></p><p></p>
<h3 class="w3-left">Dear '.$cal_name.', <br />
Thank you for registering your details on our Incident Management System.<br /> 
<p>Your account has been created. For future reference, you may access your account via this link: <a href="https://www.glowingages.com/deskman/login">
https://www.glowingages.com/deskman/login</a> . </p>
<p>Please contact our admission team at: <a href="mailto:support@glowingages.com">support@glowingages.com</a> if you need any assistance accessing your account or completing your application.</p>


<p>Sincerely, </p>

Glowing Ages Academy,<br />

</h3> 


</div>
<div class="w3-quarter"></div>
</div>
</body>

</html>';

// set content type header for html email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// set additional headers
$headers .= 'From: Glowing Ages Academy <support@glowingages.com>' . "\r\n";
$headers .= 'Cc: glowingages@gmail.com' . "\r\n";

// send email
if (mail($to, $subject, $htmlmsg, $headers))
    echo "Email sent successfully!";
else
    echo "Error sending email! Please try again later...";



?>