<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">
	<div style="position: absolute; width: 864px; height: 599px; z-index: 1; left: 233px; top: 91px" id="layer1">
		<table cellpadding="0" cellspacing="0" width="837" height="587">
			<!-- MSTableType="layout" -->
			<tr>
				<td height="551" valign="top">
				<div style="position: absolute; width: 541px; height: 350px; z-index: 1; left: 280px; top: 157px" id="layer2">
					<?php
	$cert_no = $_POST['cert_no']; $pat_id = $_POST['pat_id']; $chd_name = $_POST['chd_name']; $par_name = $_POST['par_name']; $pob = $_POST['pob'];
	if (!$pat_id || !$chd_name || !$par_name || !$cert_no || !$pob) 
	{
	echo 'Please fill the appropriate fields';
	exit();
	}
	$db = mysql_connect("localhost", "root", "");
If (!$db)
{
echo 'cannot connect to database';
die();
}
mysql_select_db("hospital",$db);
$sql = "INSERT INTO birthcerty (patient_id, certno, chdname, parname, birthplace)
VALUES ('$pat_id','$cert_no','$chd_name','$par_name','$pob')";
$result = mysql_query($sql);
echo '</font>';
?>
<?php
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM birthcerty WHERE certno='$_POST[cert_no]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{                  
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Certificate No';
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=5.0, face=Rockwell, align=left>';
echo $myrow["certno"];
echo '</font>';
}
?>
<?php
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM birthcerty WHERE certno='$_POST[cert_no]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{ 
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Name of the Child';
echo '&nbsp;&nbsp;&nbsp;'; 
echo '<font size=5.0, face=Rockwell, align=center>';               
echo $myrow["chdname"];
echo '</font>';
}
?>
<?php mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM delivery WHERE patient_id='$_POST[pat_id]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{ 
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Date of Birth';
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=5.0, face=Rockwell, align=center>';                
echo $myrow["datedel"];
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=2, face=arial, align=left><b>';
echo 'Time of Birth';
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=5.0, face=Rockwell, align=center>'; 
echo $myrow["timedel"];

echo '</font>';
 }
  ?>
   <?php mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM delivery WHERE patient_id='$_POST[pat_id]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Sex';
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=5.0, face=Rockwell, align=center>';            
 echo $myrow["sex"];
 echo '</font>';
  } 
  ?>
  <?php mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM delivery WHERE patient_id='$_POST[pat_id]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Weight';
echo '&nbsp;&nbsp;&nbsp;'; 
echo '<font size=5.0, face=Rockwell, align=center>';              
 echo $myrow["weight"]; 
 echo '</font>';
 } 
 ?>
 <?php
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM birthcerty WHERE certno='$_POST[cert_no]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{ 
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Place of Birth';
echo '&nbsp;&nbsp;&nbsp;';                 
echo '<font size=5.0, face=Rockwell, align=center>';
echo $myrow["birthplace"];
echo '</font>';
}
?>
<?php
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM birthcerty WHERE certno='$_POST[cert_no]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{ 
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Name of Parents';
echo '&nbsp;&nbsp;&nbsp;';                 
echo '<font size=5.0, face=Rockwell, align=center>';
echo $myrow["parname"];
echo '</font>';
}
?>
<?php mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM delivery WHERE patient_id='$_POST[pat_id]'",$db) or die("Couldn't query the user-database."); 
while ($myrow = mysql_fetch_array($result))
{  
echo '<font size=2, face=arial, align=left><b>';
echo '<p>';
echo 'Delivery Conducted by';
echo '&nbsp;&nbsp;&nbsp;';
echo '<font size=5.0, face=Rockwell, align=center>';             
 echo $myrow["delattend"]; 
 echo '</font>';
 } 
 ?></div>
				<p>
				<img border="0" src="../../img/birth%20cert.JPG" width="837" height="582"></td>
			</tr>
			<tr>
				<td height="36" width="837">&nbsp;</td>
			</tr>
		</table>
	</div>
	<table cellpadding="0" cellspacing="0" width="967" height="716" bgcolor="#CCFF33">
		<!-- MSTableType="layout" -->
		<tr>
	<td width="967" height="716"></td>
		</tr>
					<table cellpadding="0" cellspacing="0">
						<!-- MSTableType="layout" -->
						<tr>
							<td height="376" valign="top">
                  </td>
						</tr>
					</table>
				<td height="376">&nbsp;</td>
		</tr>
		<tr>
			<td width="70">&nbsp;</td>
			<td width="844">&nbsp;</td>
			<td height="169" width="53">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>