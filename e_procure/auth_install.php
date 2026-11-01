<title>HMO CLIENT </title>
<body>

<div align="center">
	<table cellpadding="0" cellspacing="0" background="img/wallpaper.jpg" width="979" height="547">
		<!-- MSTableType="layout" -->
		<tr>
			<td></td>
			<td></td>
			<td height="11"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top">jk<div align="center">
	<table cellpadding="0" cellspacing="0" width="685" height="466">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" bgcolor="#008080" rowspan="2">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="28">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="5" height="19">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="11"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="6" height="47">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" colspan="6" height="289" bgcolor="#F4F4F4">
			<div align="center">
				<table cellpadding="0" cellspacing="0" width="648" height="269">
					<!-- MSTableType="layout" -->
					<tr>
	<td>&nbsp;</td>
					<td>&nbsp;</td>
	<td height="28">&nbsp;</td>
						</tr>
					<tr>
						<td>&nbsp;</td>
						<td valign="top">
						<p style="margin-top: 20px; margin-left:20px; margin-bottom:20px">
						<?php
echo '<font size=1.5, face=arial>';

         $hostname = $_POST['hostname']; 
		$dataname = $_POST['dataname']; 
		$usrname = $_POST['usrname']; 
		$psswrd = $_POST['psswrd'];
    
if(!($_POST['usrname'])){
echo 'You cannot send empty value';
exit();
}
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
  // echo 'Connected successfully';
	
  $sql = 'CREATE Database hmo_client';
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
         	echo '<p>';
      echo 'Could not create database: Name already exist';
      //('Could not create database: ' . mysql_error());
   }
  else { 
        	echo '<p>';
   //echo "Database '$dataname' created successfully\n";
   echo "Your <b> <font color=green>DATABASE </font></b>has been completed\n";
   }
 // mysql_select_db('$dataname'); 
 
 mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE admin_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Admin Staff </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>Admin Department</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

   mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE ict_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'ward    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>ICT Staff </font></b>created successfully";
} else {
echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>ICT Department</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}

 
mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE account_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Account Staff </font></b>created successfully";
} else {
    echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Account Department</font>';
    //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE records_staff( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'title VARCHAR (20) NOT NULL, '.
      'fname CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'staff_id  VARCHAR(20) NOT NULL, '.
      'dept    VARCHAR(20) NOT NULL, '.
      'dt_birth DATE NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'dt_emp  DATE NOT NULL, '.
      'con_add CHAR(50) NOT NULL, '.
      'st_org  VARCHAR(20) NOT NULL, '.
      'grdlev VARCHAR (10) NOT NULL, '.
      'nxtkin VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'nxktel  VARCHAR(20) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Records Staff </font></b>created successfully";
} else {
	echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Records Department</font>';
//    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_select_db($conn,"hmo_client");

  $sql = 'CREATE TABLE e_registration( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'surname VARCHAR (50) NOT NULL, '.
      'other CHAR(50) NOT NULL, '.
      'sex  VARCHAR(20) NOT NULL, '.
      'origin  VARCHAR(20) NOT NULL, '.
      'client_add    VARCHAR(20) NOT NULL, '.
      'maturity CHAR(50) NOT NULL, '.
      'time_app TIME NOT NULL, '.
      'work CHAR(50) NOT NULL, '.
      'phone VARCHAR(20) NOT NULL, '.
      'date_app  DATE NOT NULL, '.
      'next_kin CHAR(50) NOT NULL, '.
      'kin_add  VARCHAR(50) NOT NULL, '.
      'hmo VARCHAR (50) NOT NULL, '.
      'pkg_class VARCHAR(50) NOT NULL, '.
      'value VARCHAR(50) NOT NULL, '.
      'organization  VARCHAR(50) NOT NULL, '.
      'fam_name  VARCHAR(50) NOT NULL, '.
      'serial  VARCHAR(50) NOT NULL, '.
	
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>eRegistration </font></b>created successfully";
} else {
echo '<p>';
echo '<b>Duplicating Attempt Error: <b> <font color=red>eRegistration</font>';
   // echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE hmo_cover( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'basic VARCHAR (200) NOT NULL, '.
      'plus CHAR(200) NOT NULL, '.
      'premium  CHAR(200) NOT NULL, '.
      'prestige  CHAR(200) NOT NULL, '.
      
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Service Packages </font></b>created successfully";
} else {
	echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Service Packages</font>';
//    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE hmo_prices( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'basic_val VARCHAR (200) NOT NULL, '.
      'plus_val CHAR(200) NOT NULL, '.
      'premium_val  CHAR(200) NOT NULL, '.
      'prestige_val  CHAR(200) NOT NULL, '.
      
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Package Prices </font></b>created successfully";
} else {
	echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Package Prices</font>';
//    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_select_db($conn,"hmo_client");
   
  $sql = 'CREATE TABLE client_account( '.
      'sn INT NOT NULL AUTO_INCREMENT, '.
      'serial VARCHAR (200) NOT NULL, '.
      'payments CHAR(200) NOT NULL, '.
      'pay_date DATE NOT NULL, '.
      'claims CHAR(200) NOT NULL, '.
      'serv_pro CHAR(200) NOT NULL, '.
      'clm_date DATE NOT NULL, '.
     
		'primary key ( sn ))';
      	
      	if (mysqli_query($conn, $sql)) {
      	      	echo '<p>';
    echo "<b><font color=green>Client Account </font></b>created successfully";
} else {
	echo '<p>';
echo 'Duplicating Attempt Error: <b> <font color=red>Client Account</font>';
//    echo "Error creating table: " . mysqli_error($conn);
}

     mysqli_close($conn);

?>

</td>
						<td height="231" valign="top">
						<table cellpadding="0" cellspacing="0" width="232" height="230">
							<!-- MSTableType="layout" -->
							<tr>
								<td valign="top" height="174">
								<img border="0" src="img/child.jpg" width="231" height="174"></td>
							</tr>
							<tr>
								<td height="56" width="232" valign="top" bgcolor="#CC0000">
								<p align="center" style="margin-top: 15px">
								<font color="#FFFFFF"><a href="portal/admin/users.php">
								<font face="Arial" size="2" color="#FFFFFF">
								<span style="text-decoration: none">Staff Registration</span></font><span style="text-decoration: none">
								</span></a>
								</font><a href="users.php">
								<font color="#FFFF00" size="2" face="Arial">
								<span style="text-decoration: none">Here!</span></font></a></td>
							</tr>
						</table>
						</td>
						</tr>
					<tr>
						<td width="32"></td>
						<td width="382"></td>
						<td height="10" width="234"></td>
					</tr>
				</table>
			</div>
			</td>
			</tr>
		<tr>
			<td bgcolor="#666666"></td>
			<td bgcolor="#666666"></td>
			<td bgcolor="#666666"></td>
			<td bgcolor="#666666"></td>
			<td bgcolor="#666666"></td>
			<td bgcolor="#666666" height="20"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="6" height="41">
			<p align="center" style="margin-top: 10px">
			<font face="Arial" style="font-size: 8.5pt" color="#FFFFFF">
			o.sunnyvic © 2013-2016 | all rights reserved</font></td>
		</tr>
		<tr>
			<td width="48"></td>
			<td width="105"></td>
			<td width="14"></td>
			<td width="119"></td>
			<td width="354"></td>
			<td height="11" width="45"></td>
		</tr>
	</table>
</div>

			</td>
			<td height="443">&nbsp;</td>
		</tr>
		<tr>
			<td width="95">&nbsp;</td>
			<td width="787">&nbsp;</td>
			<td height="93" width="97">&nbsp;</td>
		</tr>
	</table>
</div>

</body>
