

<?php 
echo '<font size=2, face=arial>';
$email = $_POST['email'];
$pin = $_POST['pin'];
//$password = 'test123';
 
//Hash it with BCRYPT.
//$passwordHashed = password_hash($pin, PASSWORD_BCRYPT);
//$emailHashed = password_hash($email, PASSWORD_BCRYPT);
 
//Print it out.
//echo $passwordHashed;

if (!$email || !$pin)
{
echo 'You are not authorized to view this page<br>';
echo 'Contact the Administrator of this Site <br>';
echo '<b>Thank you!</b>';
exit();
}

 include 'connect.php';
 $image = mysqli_query($conn,"SELECT * FROM store_staff WHERE staff_id='$pin' && email='".$_POST['email']."'");
// $image = mysqli_query($conn,"SELECT * FROM e_registration WHERE sn='31'");
while($row = mysqli_fetch_assoc($image))
{
//echo '<br>';
//echo '<img src="img.php?id='.$row["id"].'" width="150" height="150">';
echo '<p style="margin-left: 15px"; margin-top: 20px">';
echo '<right><img src="stoimg_rec.php?id='.$row["sn"].'" width="60" height="60" style="border: 1px solid #CCCCCC"></right></p>';

//echo '<hr align="center" size="1" width="98%">';
//echo '<br><br>';
$result = mysqli_query($conn,"SELECT * FROM store_staff WHERE staff_id='$pin' && email='".$_POST['email']."'");
while ($myrow = mysqli_fetch_array($result))
{ 

//echo '<tr><td width=160 style="border: 0px solid #008000"><span style="font-weight: 700">
							//<font face="arial" color="#333333" style="font-size: 8.5pt">
							//</font></span><font face="arial" style="font-weight: 700; font-size: 9pt" color="#333333"><p style="line-height: 150%; margin-left: 15px; margin-top: 1px; margin-bottom: 1px">
//Welcome:</font></td>';

echo '<font face="arial" style="font-weight: 700; font-size: 9pt" color="#333333"><p style="line-height: 150%; margin-left: 15px; margin-top: 1px; margin-bottom: 1px">';							
echo 'Welcome!';
echo '</font>';
echo '&nbsp;&nbsp;';
echo '<font face="arial" style="font-weight: 400; font-size: 9pt" color="#333333">';							
echo $myrow["title"];
echo '&nbsp;&nbsp;&nbsp';
echo $myrow["fname"];
echo '&nbsp;&nbsp;|&nbsp;<b>';
echo $myrow["dept"].'&nbsp;&nbsp;Department</b>';
echo '</font>';
}
	}

//echo '<hr align="center" size="1" width="98%">';
?>
