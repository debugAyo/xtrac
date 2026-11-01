<?php

include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT *, COUNT(id) FROM fixtures GROUP BY h_team, vers, a_team ORDER BY wk ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

echo '<p class="w3-text-grey" style="font-size: 17px">FIXTURES </p>';

echo '<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#808080"> 
			<tr>
			<th  width="auto" class="w3-padding-medium w3-black w3-text-green">HOME TEAM</th>
			<th  width="auto" class="w3-black w3-text-green">VERSUS</th>
			<th  width="auto" class="w3-black w3-text-green">AWAY TEAM</th>
			<th  width="auto" class="w3-black w3-text-green">WEEK</th>
			<th  width="auto" class="w3-black w3-text-green"></th>
			
			</tr>';

			
while ($row = mysqli_fetch_array($result)) {

echo '<tr>
			<td><font face="arial" size="2">'.$row['h_team'].'</font></td>
				<td><font face="arial" size="2">'.$row['vers'].'</font></td>
			     <td><left><font face="arial" size="2">'.$row['a_team'].'</font></td>
				 <td><left><font face="arial" size="2">'.$row['wk'].'</font></td>
			      
			     <td><left><font face="arial" size="2">
						<form action="" post="method">
						<input type="hidden" name="id" value="'.$row['id'].'">
						<button name="list" value="View" class="w3-white" style="cursor:pointer; border:0px"><i class="fa fa-sitemap  w3-text-green"></i></button>
						</form></font></td>
			     	  	 
			     </tr> ';
	echo '<tr><td colspan="5" class="w3-padding-medium w3-light-grey"></td></tr>';		 			    
}

echo '</table>';

}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
