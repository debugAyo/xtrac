<?php

include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT *, COUNT(id) FROM grassroot GROUP BY name, con_addr, age, pic, email_addr, phone, typ_sport, coach_name,club_name,sam_video ORDER BY name ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

echo '<p class="w3-text-grey" style="font-size: 17px">GRASSROOT EXHIBITION </p>';

echo '<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#808080"> 
			<tr>
			<th  width="auto" class="w3-padding-medium w3-grey w3-text-black"><center>NAME</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>ADDRESS</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>EMAIL</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>PHONE NO</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>AGE</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>SPORT TYPE</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>COACH</center></th>
			<th  width="auto" class="w3-grey w3-text-black"><center>CLUB NAME</center></th>
			<th  width="auto" class="w3-grey w3-text-black"></th>
			
			</tr>';

			
while ($row = mysqli_fetch_array($result)) {
echo '<tr>
				<td><font face="arial" size="2">'.$row['name'].'</font></td>
				<td><font face="arial" size="2">'.$row['con_addr'].'</font></td>
			     <td><left><font face="arial" size="2">'.$row['email_addr'].'</font></td>
			      <td><left><font face="arial" size="2">'.$row['phone'].'</font></td>
				   <td><font face="arial" size="2">'.$row['age'].'yrs'.'</font></td>
			     	<td><left><font face="arial" size="2">'.$row['typ_sport'].'</font></td>
			     	 <td><left><font face="arial" size="2">'.$row['coach_name'].'</font></td>	 
			 		  <td><font face="arial" size="2">'.$row['club_name'].'</font></td>
			     	 	<td><left><font face="arial" size="2">
						<form action="" post="method">
						<input type="hidden" name="id" value="'.$row['id'].'">
						<button name="list" value="View" class="w3-white" style="cursor:pointer; border:0px"><i class="fa fa-sitemap  w3-text-green"></i></button>
						</form></font></td>
			     	  	 
			     </tr>';
			 			    
}

echo '</table>';
echo '<hr>';
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
