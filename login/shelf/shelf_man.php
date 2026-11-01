<div class="w3-row-padding w3-border">

<h3 class="w3-center">Shelf Management</h3>

<table>
<tr><td><form method="post" action="">
       <button type="submit" class="new-btn w3-green"  name="list" value="Shelf">Shelf</button></form></td>
  <td><form method="post" action="">
      	 <button type="submit"  class="new-btn w3-blue"  name="list" value="Check Out">Check Out</button></form></td>
      	</tr></table>

<?php

echo '<h4>Shelf Details</h4>';
include '../login/connect.php';
 
$sql="SELECT * FROM shelf";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-green w3-border" height="36"><font face="arial" size="2" color="#FFF"><center><b>TAG NO</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>BOOK TITLE</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>AUTHOR</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>CATEGORY</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>LOCATION<center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>STATUS</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>IMAGE</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
            	<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['tag_no'].'</font></center></td>
				<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['title'].'</center></td>
             	<td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['author'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['category'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['location'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['status'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2"><img src="'.$row['pic'].'" width="25px" height="25px"></font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

?>
</div>

