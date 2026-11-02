<?php

$dest = $mail_to;

$headers = "From: sunnywealth@gmail.com";
$subject = "Service Call Alert";
$body = "Hi! $cal_name of $cal_address with contact no. $cal_phone needs your service now.";

$stmt = mysqli_prepare($conn, "SELECT * FROM mail_alert WHERE recipient=? && sender=? && content=? && ticket_no = ?");
mysqli_stmt_bind_param($stmt, 'ssss', $dest, $headers, $body, $rand_tick);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result) > 0)
{
echo 'Mail Alert Already Sent to this Recipient';
exit();
}

//elseif (mail($dest, $subject, $body, $headers)) {
	
if(mail($dest, $subject, $body, $headers)) { 
	
$sql = "INSERT INTO mail_alert (recipient, sender, content, ticket_no, date) VALUES (?,?,?,?,NOW())";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'ssss', $dest, $headers, $body, $rand_tick);
if(mysqli_stmt_execute($stmt) === TRUE) {

echo 'Data Successfully Saved';
include 'new_tick.php';
} 
else { 
echo "Failed to send email to $dest...";
}
}
?>