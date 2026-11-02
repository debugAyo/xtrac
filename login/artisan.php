

<?php

include '../link/connect.php';

$query="SELECT * FROM delegated_artisan WHERE call_name = ? && status = 'Available' ORDER BY opendate DESC";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $fname);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) >0)
{

echo '<br /><p style="font-size:12px"><left>Dear <font color="#999"> '. $fname.'</font>,<br />  Thank you for contacting us.  Below is the detailed contact of your Agent and Service Provider.<br /></p>'; 
echo '<div class="w3-row-padding">
<div class="w3-col">
			<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#808080">
			<tr>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Ticket No.</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Freelancer Image</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Freelancer Name</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Freelancer Phone<center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Freelancer Location</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Open Date</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Agent Name</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Agent Phone</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Status</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Command</center></th>
			</tr>';

while($row = mysqli_fetch_array($result)) {

$date = $row['opendate'];

	
				 echo '<tr>
				 
				 <td><font face="arial" size="1">'.$row['ticket_no'].'</font></td>
				 <td><font face="arial" size="1"><image src="../'.$row['photo'].'" width="60px" height="60px"></font></td>
			     <td><font face="arial" size="1">'.$row['pro_name'].'</font></td>
			     <td><font face="arial" size="1">'.$row['pro_phone'].'</font></td>
			     <td><font face="arial" size="1">'.$row['pro_locat'].', '.$row['pro_city'].', '.$row['pro_state'].'</font></td>
			     <td><font face="arial" size="1">'.$row['opendate'].'</font></td>
			     <td><font face="arial" size="1">'.$row['tickassign_name'].'</font></td>
			     <td><font face="arial" size="1">'.$row['tickassign_phone'].'</font></td>
			     <td><font face="arial" size="1">'.$row['status'].'</font></td>
			     <td><form action="" method="post">
				<input type="hidden" readonly name ="tick_no" value="'. $row['ticket_no'].'">
				<input type="hidden" readonly name ="list" value="Track">
				 <button type="submit" name="submit" value="">Trac</button></form>
				
				</td></tr><td colspan="13" style="font-size: 12px">Kindly call our Agent:
 <font color="#999"> <b>'. $row['tickassign_name'].' </b></font>on <font color="#999"> <b> '. $row['tickassign_phone'].' </b></font>or the Service Provider,   <font color="#999"> <b>'. $row['pro_name'].' </b></font>on <font color="#999"> <b> '. $row['pro_phone'].' 
</b></font> for <font color="#999"> <b>'. $row['tickname'].'</b></font> and specifically <font color="#999"> <b>'. $row['pro_spec'].'</b><hr></font></td>';
		 			    
}						    
			 
}

echo '</table></div> <br /><br />';
echo '<b>Signed:</b><br /><br />';
echo '<img src="../images/signature.jpg" width="150px" height="50px">';
echo '<br /><b>Management</b>';
echo '<br />'.$date;

?>
