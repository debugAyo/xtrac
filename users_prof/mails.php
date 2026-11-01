<?php

$dest = $mail_to;

$headers = "From: sunnywealth@gmail.com";
$subject = "Service Call Alert";
$body = "Hi! $cal_name of $cal_address with contact no. $cal_phone needs your service now.";

$result = mysqli_query($conn, "SELECT * FROM mail_alert WHERE recipient='$dest' && sender='$headers' && content='$body' && ticket_no = '$rand_tick'");
if(mysqli_num_rows($result) > 0)
{
echo 'Mail Alert Already Sent to this Recipient';
exit();
}

//elseif (mail($dest, $subject, $body, $headers)) {
	
if(mail($dest, $subject, $body, $headers)) { 
	
$sql = "INSERT INTO mail_alert (recipient, sender, content, ticket_no, date) VALUES ('$dest','$headers','$body','$rand_tick',NOW())";

if($conn->query($sql) === TRUE) {

echo 'Data Successfully Saved';
include 'new_tick.php';
} 
else { 
echo "Failed to send email to $dest...";
}
}
?>