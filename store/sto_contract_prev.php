<?php


include 'connect.php';

//$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
//$result = mysqli_query($conn,"SELECT * FROM additem, software_ass WHERE devid='dev_id'");
$sql="SELECT * FROM contract_ass";
$result=mysqli_query($conn,$sql);
echo "<table width='900' border='0'color='#FFFFFF' bgcolor='#DFEFFF' align='center' cellpadding='0' cellspacing='1'>
<tr bgcolor='#DFEFFF'>
<th><font face='arial' size='1'>Device ID</th><th><font face='arial' size='1'>Contract Details</th><th><font face='arial' size='1'>Contractor</th><th><font face='arial' size='1'>Address</th><th><font face='arial' size='1'>Phone No</th><th><font face='arial' size='1'>E-Mail</th><th><font face='arial' size='1'>Supports?</th><th><font face='arial' size='1'>Award Letter</th>
</tr>";

// Define $color=1 
$color="1";

//echo '<table width="400" border="1"  align="center" cellpadding="2" cellspacing="0">';
while($rows=mysqli_fetch_array($result)){



// If $color==1 table row color = #FFC600     

if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='auth_trac.php' method='post'><font face='arial' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><font face='arial' size='1'>".$rows['cont_dsc']."</td><td><font face='arial' size='1'>".$rows['company']."</td><td><font face='arial' size='1'>".$rows['address']."</td><td><font face='arial' size='1'>".$rows['phone']."</td><td><font face='arial' size='1'>".$rows['email']."</td><td><font face='arial' size='1'>".$rows['support']."</td><td><form action='contract.php' method='post'><font face='arial' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Details' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td>
</tr>";
//<td><font face='Arial' size='1'>".$row["devid"]."</font></td><td><font face='Arial' size='1'>".$row["contract"]." </font></td><td><font face='Arial' size='1'>".$row["contractor"]."</font></td><td><font face='Arial' size='1'>".$row["manuname"]."</font></td><td><font face='Arial' size='1'>".$row["model"]." </font></td><td><font face='Arial' size='1'>".$row["serial"]."</font></td></tr>";


// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>

<td><form action='auth_trac.php' method='post'><font face='arial' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><font face='arial' size='1'>".$rows['cont_dsc']."</td><td><font face='arial' size='1'>".$rows['company']."</td><td><font face='arial' size='1'>".$rows['address']."</td><td><font face='arial' size='1'>".$rows['phone']."</td><td><font face='arial' size='1'>".$rows['email']."</td><td><font face='arial' size='1'>".$rows['support']."</td><td><form action='contract.php' method='post'><font face='arial' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Details' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td>

//<td><font face='Arial' size='1'>".$row["devid"]."</font></td><td><font face='Arial' size='1'>".$row["devname"]." </font></td><td><font face='Arial' size='1'>".$row["devtype"]."</font></td><td><font face='Arial' size='1'>".$row["manuname"]."</font></td><td><font face='Arial' size='1'>".$row["serial"]." </font></td><td><font face='Arial' size='1'>".$row["prodate"]."</font></td><td><font face='Arial' size='1'>".$row["purprice"]."</font></td><td><font face='Arial' size='1'>".$row["mandate"]."</font></td><td><font face='Arial' size='1'>".$row["ipaddress"]." </font></td><td><font face='Arial' size='1'>".$row["macaddr"]."</font></td><td><font face='Arial' size='1'>".$row["location"]."</font></td><td><font face='Arial' size='1'>".$row["deversion"]." </font></td><td><font face='Arial' size='1'>".$row["devstat"]."</font></td><td><font face='Arial' size='1'>".$row["source"]."</font></td><td><font face='Arial' size='1'>".$row["waranty"]." </font></td><td><font face='Arial' size='1'>".$row["phone"]."</font></td></tr>";



// Set $color back to 1 
$color="1";
}

}
echo '</table>';
//mysqli_close();
?>

