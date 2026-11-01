<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="images/pef_logo.gif">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>xTrac -&nbsp; User Interface</title>

</head>

<body bgcolor="#EEEEEE">
<td valign="top" colspan="9" rowspan="2" style="border: 1px dotted #008080">
</td>
<div align="center">
<table cellpadding="0" cellspacing="0" width="903" height="662" bgcolor="#FFFFFF">
	<!-- MSTableType="layout" -->
	<html>

<body bgcolor="#EEEEEE">

</body></html>
	<html>

<body bgcolor="#EEEEEE">
		<tr>
	<td height="637" valign="top">
	<table cellpadding="0" cellspacing="0" width="953" height="631">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" style="border-bottom: 1px solid #669999; " colspan="3" height="73">
			<table cellpadding="0" cellspacing="0" width="948" height="71">
				<!-- MSTableType="layout" -->
				<tr>
					<td width="575" valign="top">
					<p style="margin-top: 15px"><?php include 'header.php'; ?></td>
				<td height="71" width="373" valign="top">
									<p style="margin-left: 2px; margin-right: 8px; margin-top: 20px" align="center">
									<font face="Arial" style="font-size: 8.5pt">
									<font color="#666666">Need help or enquiry? 
									Call:</font><b>
									<font color="#FF0066">+</font><font color="#008000">234</font>-</b>803-855-2420</font></td>
				</tr>
			</table>
			</td>
			</tr>
		<tr>
			<td valign="top" colspan="3" height="63">
			<p style="margin-left: 15px; margin-top: 15px"><?php
include 'dat_prev.php';
//Header ('Location:itdb/index.php');
    
?></td>
			</tr>
		<tr><form method="POST" action="ass_trac.php">
	<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
	<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
			<td valign="top" bgcolor="#9ED66B">
			<p style="margin-left: 8px; margin-right: 5px; margin-top: 12px">
			<font face="Arial" style="font-size: 9pt" color="#FFFFFF">Track 
			Assets on this platform</font></td>
			<td height="52" valign="top" colspan="2" bgcolor="#F0F4F4">
			<p style="margin-top: 12px"><font color="#333333">
	<input type="submit" value="Track by Label" name="list" style="border: 1px solid #F0F4F4; background-color: #F0F4F4; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Track by Serial" name="list" style="border: 1px solid #F0F4F4; background-color: #F0F4F4; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Track by Status" name="list" style="border: 1px solid #F0F4F4; background-color: #F0F4F4; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Track by Name" name="list" style="border: 1px solid #F0F4F4; background-color: #F0F4F4; font-family:Arial; font-size:9pt; color:#669999"></td>
			</form></tr>
		<tr>
			<td valign="top" bgcolor="#F0F4F4">
<?php include 'sec_login.php';?>
			<p>&nbsp;</td>
			<td valign="top" colspan="2" height="260">
			<?Php
echo '<font face="arial" size="2">';
$status=$_POST['status'];

//$search_label=$_POST['search_label']; $search_serial=$_POST['search_serial']; $search_assname=$_POST['search_assname'];$search_ipaddr=$_POST['search_ipaddr'];


if ($status==$_POST['status']) {

include 'connect.php';

//$sql = "SELECT * FROM additem WHERE  devstat LIKE '%" . $status . "%' OR devid LIKE '%" . $search_label  ."%' OR serial LIKE '%" . $search_serial  ."%' OR ipaddress LIKE '%" . $search_ipaddr  ."%'OR devname LIKE '%" . $search_assname  ."%'";  
   
  $sql = "SELECT * FROM additem WHERE  devstat ='$status'";   
   //-run  the query against the mysqli query function  
 $result=mysqli_query($conn,$sql);  
 
  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}		
echo "<table width='2500' border='0'color='#FFFFFF' bgcolor='#DFEFFF' align='center' cellpadding='0' cellspacing='1'>
<tr bgcolor='#006699'>
<th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Device ID</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Name</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Manufactured Date</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Device Type</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Manufacturer</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Serial No</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Date Procured</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Department</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Owner</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>End of Life</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Location</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Date Logged</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Status</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Model</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Waranty</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Recommendation</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Logged</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='arial' size='1' color='#FFFFFF'>Image</th>
</tr>";

// Define $color=1 
$color="1";

//echo '<table width="400" border="1"  align="center" cellpadding="2" cellspacing="0">';
while($rows=mysqli_fetch_array($result)){

// If $color==1 table row color = #FFC600
if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='auth_trac.php' method='post'><input type='hidden' name='email' value='$email' size='15'>
	<input type='hidden' name='pin' value='$pin' size='15'><font face='arial' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #DFEFFF; background-color: #DFEFFF; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['assmode']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['waranty']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['recommnd']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['loguser']."</td><td><form action='item_img.php' method='post'><font face='arial' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Image' name='list' style='border: 1px solid #DFEFFF; background-color: #DFEFFF; font-family:Arial; font-size:8pt; color:#669999'></form></td>
</tr>";


// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>

<td><form action='auth_trac.php' method='post'><input type='hidden' name='email' value='$email' size='15'>
<input type='hidden' name='pin' value='$pin' size='15'><font face='arial' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #DFEFFF; background-color: #DFEFFF; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['assmode']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['waranty']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['recommnd']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='arial' size='1'>".$rows['loguser']."</td><td><form action='item_img.php' method='post'><font face='arial' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Image' name='list' style='border: 1px solid #DFEFFF; background-color: #DFEFFF; font-family:Arial; font-size:8pt; color:#669999'></form></td></tr>";
//<td><font face='Arial' size='1'>".$row["devid"]."</font></td><td><font face='Arial' size='1'>".$row["devname"]." </font></td><td><font face='Arial' size='1'>".$row["devtype"]."</font></td><td><font face='Arial' size='1'>".$row["manuname"]."</font></td><td><font face='Arial' size='1'>".$row["serial"]." </font></td><td><font face='Arial' size='1'>".$row["prodate"]."</font></td><td><font face='Arial' size='1'>".$row["purprice"]."</font></td><td><font face='Arial' size='1'>".$row["mandate"]."</font></td><td><font face='Arial' size='1'>".$row["ipaddress"]." </font></td><td><font face='Arial' size='1'>".$row["macaddr"]."</font></td><td><font face='Arial' size='1'>".$row["location"]."</font></td><td><font face='Arial' size='1'>".$row["deversion"]." </font></td><td><font face='Arial' size='1'>".$row["devstat"]."</font></td><td><font face='Arial' size='1'>".$row["source"]."</font></td><td><font face='Arial' size='1'>".$row["waranty"]." </font></td><td><font face='Arial' size='1'>".$row["phone"]."</font></td></tr>";



// Set $color back to 1 
$color="1";
}

}
echo '</table>';
//mysqli_close();
 echo "<p style='margin-left: 10px'><font face='arial narrow' size='2' color='#008000'>";
echo "<br>";
$sql="SELECT * FROM additem WHERE devstat ='$status'";
$result=mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);
echo "Total Assets Displayed:";
echo "</font>";
echo "&nbsp;&nbsp;";
echo "<span style='background-color: #CC0000'><font face='arial' size='2' color='#FFFFFF'><b>";
echo "$num_rows \n";
echo "</font>";

}

?>			</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#9ED66B" colspan="2">&nbsp;</td>
			<td height="43" valign="top" bgcolor="#9ED66B">&nbsp;</td>
		</tr>
		<tr>
			<td width="184">&nbsp;</td>
			<td width="719">&nbsp;</td>
			<td height="108" width="50">&nbsp;</td>
		</tr>
	</table>
			</td>
		</tr>
		<tr>
			<td height="25" width="903">&nbsp;</td>
		</tr>
</body>

</html>