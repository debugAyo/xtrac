<div class="w3-row-padding w3-border">

<h3 class="w3-center">Shelf Management</h3>
<table>
<tr><td><form method="post" action="">
       <button type="submit" class="new-btn w3-green"  name="list" value="Shelf">Shelf</button></form></td>
  <td><form method="post" action="">
      	 <button type="submit"  class="new-btn w3-blue"  name="list" value="Check Out">Check Out</button></form></td>
    </tr></table>

<?php

echo '<h4>Checkout List</h4>';
include '../login/connect.php';
 
$sql="SELECT * FROM checkout";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table class="w3-border" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>NAME</center></th>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>EMAIL</center></th>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>CLASS</center></th>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>BOOK TITLE</center></th>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>CHECK-OUT DATE</center></th>
			<th  width="auto" class="w3-blue w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>CHECK-IN DATE</center></th>
			

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
            	<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['name'].'</font></center></td>
				<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['email'].'</center></td>
             	<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['class'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['title'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['chkout_date'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['chkin_date'].'</font></center></td>
			   			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

?>
</div>
