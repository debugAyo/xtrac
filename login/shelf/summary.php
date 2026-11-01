<div class="w3-row-padding w3-border">
<div class="w3-half">
<?php

echo '<h4>Default Total by Category</h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY category";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-blue w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>CATEGORY</center></th>
			<th  width="auto" class="w3-blue w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['category'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

?>
</div>
<div class="w3-half">
<?php

echo '<h4>Default Total by Title</h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY title";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-blue w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>TITLE</center></th>
			<th  width="auto" class="w3-blue w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['title'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

$sql = "SELECT  * FROM shelf"; 

$result = mysqli_query($conn,$sql) or die(mysqli_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='calibri' size='3'><center>";
echo '<br>';
echo "&nbsp;&nbsp;";
echo "Total Books Displayed = ";
echo "</font>";

echo "<span style='background-color: #FFFFFF'><font face='calibri' size='3' color='#009900'>";

echo "$num_rows \n";
echo "</font>";


?>
</div></div>

<div class="w3-row-padding w3-border">
<div class="w3-half">
<?php

echo '<h4>Total by Category On Shelf </h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY category HAVING status='On Shelf'";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>CATEGORY</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['category'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';


?>
</div>
<div class="w3-half">
<?php

echo '<h4>Total by Title On Shelf</h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY title HAVING status='On Shelf'";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>TITLE</center></th>
			<th  width="auto" class="w3-green w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['title'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}


echo '</table>';
$sql = "SELECT  * FROM shelf HAVING status='On Shelf'"; 

$result = mysqli_query($conn,$sql) or die(mysqli_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='calibri' size='3'><center>";
echo '<br>';
echo "&nbsp;&nbsp;";
echo "Total Books Displayed = ";
echo "</font>";

echo "<span style='background-color: #FFFFFF'><font face='calibri' size='3' color='#009900'>";

echo "$num_rows \n";
echo "</font>";


?>
</div></div>

<div class="w3-row-padding w3-border">
<div class="w3-half">
<?php

echo '<h4>Total by Category Checked Out </h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY category HAVING status='Check Out'";
$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-red w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>CATEGORY</center></th>
			<th  width="auto" class="w3-red w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['category'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';

?>
</div>
<div class="w3-half">
<?php

echo '<h4>Total by Title Checked Out</h4>';
include '../login/connect.php';


$sql="SELECT *, COUNT(sn) FROM shelf GROUP BY title HAVING status='Check Out'";
$result=mysqli_query($conn,$sql);

		
	if(mysqli_num_rows($result) >0)
{


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr>
			<th  width="auto" class="w3-red w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>TITLE</center></th>
			<th  width="auto" class="w3-red w3-border"  height="36"><font face="arial" size="2" color="#FFF"><center><b>QTY</center></th>

			</tr>';

while($row = mysqli_fetch_array($result)) {


			 
	  echo '<tr>
		
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['title'].'</font></center></td>
			    <td class="w3-padding-tiny"><font face="century gothic" size="2">'.$row['COUNT(sn)'].'</font></center></td>
			 			    </tr>';
	  

	    		 	 
		
}
}
echo '</table>';
$sql = "SELECT  * FROM shelf WHERE status='Check Out'"; 

$result = mysqli_query($conn,$sql) or die(mysqli_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='calibri' size='3'><center>";
echo '<br>';
echo "&nbsp;&nbsp;";
echo "Total Books Displayed = ";
echo "</font>";

echo "<span style='background-color: #FFFFFF'><font face='calibri' size='3' color='#009900'>";

echo "$num_rows \n";
echo "</font>";

?>
</div></div>



