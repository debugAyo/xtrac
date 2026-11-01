<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealthCare - BillingDetails</title>
<script src="../sample/datetimepicker_css.js"></script>
</head>

<body>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="803" height="370" style="border: 1px solid #C0C0C0">
		<!-- MSTableType="layout" -->
		<tr>
			<td></td>
			<td bgcolor="#9BDDBC" height="19">
			&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td valign="top" height="25"><?php 
			$psswrd = $_POST['psswrd'];
				
			if (!$psswrd) {
			echo 'You must type the correct PIN to Login';
			exit();
			}	
			$db = mysql_connect("localhost","root","");
			if (!$db) {
			echo 'Connection to the Database could not be Established';
			}
			mysql_select_db("hospital",$db);
			$result = mysql_query("SELECT * FROM billing_usr WHERE staff_id='$_POST[psswrd]'",$db) or die("Couldn't query the user-database."); 
			 while ($myrow = mysql_fetch_array($result)) 
{
echo '<font size=1, face=arial><b>';
echo '<br><center>Welcome!&nbsp;&nbsp;</b>';
echo $myrow["Staff_name"];
//echo "<b>Welcome</b> $psswrd";
}
echo '</font>';
?>

</td>
			</tr>
		<tr>
			<td valign="top" style="border: 1px dotted #339966" bgcolor="#F5F5F5" colspan="2" height="12">
			</tr>
		</tr>
		<tr>
			<td></td>
			<td height="36" valign="top">
			<p style="margin-left: 6px; margin-top: 6px" align="center">
			<font face="Arial" style="font-size: 8pt">This is the summary of the 
			remaining items on the <b><font color="#800000">e</font>Shelf </b>as 
			at this moment. Please note! Items in <font color="#FF0000">Red</font> 
			have <font color="#008000">expired</font> on the shelf, while items 
			in <font color="#666666">Yellow</font><b><font color="#C0C0C0">
			</font></b>colour are <font color="#800000">limited</font>. Those 
			in <font color="#008000">Green </font>are <font color="#0000FF">
			alright </font>and <font color="#0000FF">sufficient </font>on the 
			shelf.</font></td>
			</tr>
		<tr>
			<td></td>
			<td valign="top" height="209">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="4" -->
				<tr>
					<td valign="top" width="100%" height="100%">
					<!-- MSCellFormattingType="content" -->
					<?php 
			$status = $_POST['status'];
			if (!$status) {
			echo 'You must make a choice of Report to Generate';
			exit();
			}
			if ($status == 'Cash Income') {
			include 'cash_income.php';
			}
			if ($status == 'Cheque Income') {
			include 'cheque_income.php';
			}
			if ($status == 'Pending Income') {
			include 'pending_income.php';
			}
			exit();
			?>
</td>
					</tr>
			</table>
</td>
			</tr>
		<tr>
			<td></td>
			<td height="31">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" colspan="2" height="25">
			<p align="center" style="margin-top: 5px">
			&nbsp;</td>
		</tr>
		<tr>
			<td width="2"></td>
			<td height="11" width="799"></td>
		</tr>
	</table>
</div>

</body>

</html>