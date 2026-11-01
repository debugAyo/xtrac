<html>
<head>
<title></title>
 <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
</head>
<body onload = "JavaScript:AutoRefresh(8000);">
<body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-border w3-padding-large">
<?php

include '../link/connect.php';

$query="SELECT *, COUNT(id) FROM new_ticket GROUP BY ticket_no,tickname,spec,call_name,call_phone,call_address,opendate,tickassign_name,tickassign_phone,descrp,impact,priority,tick_status HAVING opendate!='0000-00-00' ORDER BY opendate DESC";
$result = mysqli_query($conn,$query) or die(mysqli_error());
if(mysqli_num_rows($result) >0)
{
/*echo '<div class="row">
			<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" bordercolor="#808080">
			<tr>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Ticket No</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Ticket Name</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Service</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Caller Name</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Caller Phone<center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Caller Location</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Open Date</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Agent Name</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Agent Phone</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Description</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Impact Level</center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Priority<center></th>
			<th  width="auto" bgcolor="#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Status</center></th>
			<th  width="auto" bgcolor="#FF0066#000" height="36"><font face="arial" size="1" color="#FFF"><center><b>Command</center></th>
			</tr>';*/

while($row = mysqli_fetch_array($result)) {

	
				 echo '<table border="0" width="100%" cellspacing="0" bgcolor="#FFF" style="font-family: arial" >
				 <p class="w3-black w3-padding-medium" style="font-family: arial; font-size: 14px">Kindly find below, the preview of your tickets.</p>
				 <tr>
				 <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Ticket No</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['ticket_no'].'</td></tr>
				 <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Ticket Name</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['tickname'].'</td></tr></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Service</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['spec'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Caller Name</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['call_name'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Caller Phone</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['call_phone'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Caller Location</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['call_address'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Open Date</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new;font-size: 12px; color:grey; text-align:left">'.$row['opendate'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Agent Name</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new;font-size: 12px; color:grey; text-align:left">'.$row['tickassign_name'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Agent Phone</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new;font-size: 12px; color:grey; text-align:left">'.$row['tickassign_phone'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Description</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['descrp'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Impact Level</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['impact'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Priority</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['priority'].'</td></tr>
			     <th  class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: arial; font-size: 12px; color:grey; text-align:left">Status</th><td class="w3-padding-large w3-border-bottom w3-border-grey" style="font-family: courier new; font-size: 12px; color:grey; text-align:left">'.$row['tick_status'].'</td></tr>
			     <td class="w3-padding-large"><form action="" method="post">
				 <input type="hidden" readonly name ="tick_no" value="'. $row['ticket_no'].'">
				 <input type="hidden" readonly name ="list" value="Track">
				 <button type="submit" name="submit" class="login-btn w3-deep-orange" >Trac</button></form>
				
				</td></tr><td colspan="13"><hr></td>';
			 			    
						    
			 
}

echo '</table></div ';
}

else {
echo 'There is no Ticket Request to Preview Yet';
}
?>
</div>
<div class="w3-quarter"></div>
</div>
</body>
</html>