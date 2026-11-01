<div class="w3-row-padding">

<div class="w3-threequarter w3-border w3-padding-large">
			
<?php		
	$tick_no='';
	if(!empty($_POST['tick_no'])) {
	$tick_no=$_POST['tick_no'];
	}
	
include '../link/connect.php';
$sql="SELECT * FROM new_ticket WHERE ticket_no='$tick_no'";

$result = mysqli_query($conn,$sql) or die(mysqli_error());

while ($row=mysqli_fetch_array($result)) {
$cal_address = $row['call_address'];
$date = $row['opendate'];
$intservice = $row['spec'];
$ticketno = $row['ticket_no'];
$cal_name= $row['call_name'];
$serv_spec = $row['spec'];

//include 'update_tick.php';

}

									
/*$query="SELECT new_ticket.id, new_ticket.ticket_no, new_ticket.tickname, new_ticket.call_name, new_ticket.call_phone, new_ticket.priority, new_ticket.impact, new_ticket.descrp, new_ticket.tickassign_name, new_ticket.tickassign_phone, new_ticket.opendate, new_ticket.call_address, new_ticket.spec, artisan_reg.name, artisan_reg.phone, artisan_reg.email, artisan_reg.spec, artisan_reg.date, artisan_reg.street_address, artisan_reg.status FROM new_ticket INNER JOIN artisan_reg ON new_ticket.spec = artisan_reg.spec WHERE new_ticket.call_name='$cal_name' && new_ticket.ticket_no='$ticketno' && artisan_reg.street_address LIKE '%$cal_address%' && new_ticket.status='Awaiting Response' && artisan_reg.status='Available'";*/

include '../link/connect.php';
$query="SELECT new_ticket.*, artisan_reg.pro_name,artisan_reg.pro_phone,artisan_reg.pro_email,artisan_reg.spec,artisan_reg.pro_locat,artisan_reg.pro_city,artisan_reg.pro_state,artisan_reg.status FROM new_ticket INNER JOIN artisan_reg ON new_ticket.spec = artisan_reg.spec WHERE new_ticket.call_name='$cal_name' && new_ticket.ticket_no='$ticketno' &&  artisan_reg.status='Available'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) >0)
{

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
			      <td colspan="2" class="w3-padding-large"><form action="" method="post">
				 <input type="hidden" readonly name ="tick_no" value="'. $row['ticket_no'].'">
				 <input type="hidden" readonly name ="list" value="Feedback">
				 <p><select name="fdback" class="w3-light-grey">
				  <option>Select a feedback option on the ticket status</option>
				  <option>Being Resolved</option>
				  <option>Escalated</option>
				  <option>Neglected</option>
				  <option>Resolved</option>
				  </select></p>
				 <button type="submit" name="submit" class="login-btn w3-deep-orange" >Feedback</button></form>
				
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
     
