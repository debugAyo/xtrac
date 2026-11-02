<?php //include 'font_script.php';?>
<?php


include 'connect.php';

$sql = "SELECT * FROM store_staff WHERE email=? && staff_id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $email, $pin);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
 $myrow=mysqli_fetch_array($result); 
 
echo '<br><p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="sto_ass_req.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Requisition Form" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="sto_store_chk.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Store Check" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 15px; margin-bottom: 0"><form method="POST" action="sto_ass_add.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].'  size="15">
	<input type="submit" value="Add New Asset" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></font></p></form>
	<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="sto_ass_edit.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Edit Asset Info" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="sto_ass_issu.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Inventory Issuing" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="sto_ass_list.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Assets Listing" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>	<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="sto_ass_trac.php">
	<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="sto_ass_trac.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Assets Tracking" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="sto_ass_rep.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Status Reporting" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="logout.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Log Out" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>';			
	
	?>