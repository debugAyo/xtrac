<table>
<tr><td><form method="post" action="">
       <button type="submit" class="new-btn"  name="list" value="Shelf">Shelf</button></form></td>
  <td><form method="post" action="">
      	 <button type="submit"  class="new-btn"  name="list" value="Order">Order</button></form></td>
      	 <td><form method="post" action="">
 	        <button type="submit"  class="new-btn"  name="list" value="Check-Out">Check-Out</button></form></td>
 	 <td><form method="post" action="">
 	        <button type="submit"  class="new-btn"  name="list" value="Check-In">Check-In</button></form></td></tr></table>

<?php


include '../login/connect.php';
 
$sql="SELECT * FROM checkout";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table border="1" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>NAME</center></th>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>EMAIL</center></th>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>CLASS</center></th>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>BOOK TITLE</center></th>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>CHECK-OUT DATE</center></th>
			<th  width="auto" bgcolor="#DDD" height="36"><font face="arial" size="2" color="#FFF"><center><b>CHECK-IN DATE</center></th>
			

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
            	<td><font face="century gothic" size="2">'.$row['name'].'</font></center></td>
				<td><font face="century gothic" size="2">'.$row['email'].'</center></td>
             	<td><font face="century gothic" size="2">'.$row['class'].'</font></center></td>
			     <td><font face="century gothic" size="2">'.$row['title'].'</font></center></td>
			     <td><font face="century gothic" size="2">'.$row['chkout_date'].'</font></center></td>
			     <td><font face="century gothic" size="2">'.$row['chkin_date'].'</font></center></td>
			   			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

?>

