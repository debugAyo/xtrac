			<?php

include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT *, COUNT(id) FROM league_tab GROUP BY team, no_play, h_win, h_loss, h_draw, h_gf, h_ga, a_win, a_loss, a_draw, a_gf, a_ga, gd, pts";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

echo '<p class="w3-text-grey" style="font-size: 17px">LEAGUE TABLE </p>';

echo '<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#808080"> 
			<tr>
			<th  width="auto" class="w3-padding-medium w3-black w3-text-green">TEAM</th>
			<th  width="auto" class="w3-black w3-text-green">GP</th>
			<th  width="auto" class="w3-black w3-text-green">HW</th>
			<th  width="auto" class="w3-black w3-text-green">HL</th>
			<th  width="auto" class="w3-black w3-text-green">HD</th>
			<th  width="auto" class="w3-black w3-text-green">HG</th>
			<th  width="auto" class="w3-black w3-text-green">HGA</th>
			<th  width="auto" class="w3-black w3-text-green">AW</th>
			<th  width="auto" class="w3-black w3-text-green">AL</th>
			<th  width="auto" class="w3-black w3-text-green">AD</th>
			<th  width="auto" class="w3-black w3-text-green">AG</th>
			<th  width="auto" class="w3-black w3-text-green">AGA</th>
			<th  width="auto" class="w3-black w3-text-green">GF</th>
			<th  width="auto" class="w3-black w3-text-green">GA</th>
			<th  width="auto" class="w3-black w3-text-green">GD</th>
			<th  width="auto" class="w3-black w3-text-green">PTS</th>
			<th  width="auto" class="w3-black w3-text-green"></th>
			
			</tr>';

			
while ($row = mysqli_fetch_array($result)) {

$gf = ($row['h_gf'] + $row['a_gf']);
$ga = ($row['h_ga'] + $row['a_ga']);
$gd = ($gf - $ga);

echo '<tr>
			<td><font face="arial" size="2">'.$row['team'].'</font></td>
				<td><font face="arial" size="2">'.$row['no_play'].'</font></td>
			     <td><left><font face="arial" size="2">'.$row['h_win'].'</font></td>
				 <td><left><font face="arial" size="2">'.$row['h_loss'].'</font></td>
				 <td><font face="arial" size="2">'.$row['h_draw'].'</font></td>
			     <td><left><font face="arial" size="2">'.$row['h_gf'].'</font></td>
				 <td><left><font face="arial" size="2">'.$row['h_ga'].'</font></td>
				 <td><font face="arial" size="2">'.$row['a_win'].'</font></td>
			     <td><left><font face="arial" size="2">'.$row['a_loss'].'</font></td>
				 <td><left><font face="arial" size="2">'.$row['a_draw'].'</font></td>
				  <td><left><font face="arial" size="2">'.$row['a_gf'].'</font></td>
				 <td><font face="arial" size="2">'.$row['a_ga'].'</font></td>
			     <td><left><font face="arial" size="2">'.$gf.'</font></td>
				 <td><left><font face="arial" size="2">'.$ga.'</font></td>
				 <td><left><font face="arial" size="2">'.$gd.'</font></td>
				 <td><left><font face="arial" size="2">'.$row['pts'].'</font></td>
			      
			     <td><left><font face="arial" size="2">
						<form action="" post="method">
						<input type="hidden" name="id" value="'.$row['id'].'">
						<button name="list" value="View" class="w3-white" style="cursor:pointer; border:0px"><i class="fa fa-sitemap  w3-text-green"></i></button>
						</form></font></td>
			     	  	 
			     </tr> ';
	echo '<tr><td colspan="17" class="w3-padding-medium w3-light-grey"></td></tr>';		 			    
}

echo '</table>';

}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
