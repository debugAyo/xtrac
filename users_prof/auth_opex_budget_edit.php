<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="images/pef_logo.gif">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php $id = $_POST['id'];?>
<title>Pefitam - Fetch Budget Info</title>
</head>
<td valign="top" colspan="9" rowspan="2" style="border: 1px dotted #008080">
</td>
<div align="center">
<table cellpadding="0" cellspacing="0" width="903" height="662" bgcolor="#FFFFFF">
	<!-- MSTableType="layout" -->
	<html>

<body bgcolor="#EEEEEE">

</body></html>
	<html>

<body bgcolor="#EEEEEE">
		<tr>
	<td height="637" valign="top">
	<table cellpadding="0" cellspacing="0" width="953" height="631">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" style="border-bottom: 1px solid #669999; " colspan="3" height="73">
			<table cellpadding="0" cellspacing="0" width="942" height="71">
				<!-- MSTableType="layout" -->
				<tr>
					<td width="575" valign="top">
					<p style="margin-top: 15px"><?php include 'header.php'; ?></td>
				<td height="71" width="367" valign="top">
									<p style="margin-left: 2px; margin-right: 8px; margin-top: 20px" align="center">
									<font face="Arial" style="font-size: 8.5pt">
									<font color="#666666">Need help or enquiry? Call:</font><b>
									<font color="#FF0066">+</font><font color="#008000">234</font>-</b>803-855-2420</font></td>
				</tr>
			</table>
			</td>
			</tr>
		<tr>
			<td valign="top" colspan="3" height="63">
			<p style="margin-left: 15px; margin-top: 15px"><?php
include 'dat_prev.php';
//Header ('Location:itdb/index.php');
    
?></td>
			</tr>
		<tr><form method="POST" action="auth_opex_budget_edit.php">
	<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
	<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
	<input type="hidden" name="id" value="<?php echo $id;?>" size="15">
			<td valign="top" bgcolor="#339966">
			<p style="margin-left: 8px; margin-right: 5px; margin-top: 10px" align="center">
			<font face="Arial" color="#FFFFFF" style="font-size: 9pt">Navigate </font>
			<font face="Arial" color="#CCFF99" style="font-size: 9pt">right </font>
			<font face="Arial" color="#FFFFFF" style="font-size: 9pt">to Add 
			Assets, or </font>
			<font face="Arial" color="#CCFF99" style="font-size: 9pt">down</font><font face="Arial" color="#FFFFFF" style="font-size: 9pt"> 
			to analyze assets :</font></td>
			<td height="52" valign="top" colspan="2" bgcolor="#F0F4F4">
			<p style="margin-top: 12px"><font color="#333333">
		<input type="submit" value="View Budget" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Operational Expenses" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Software and Licensing Budget" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Hardware Budget" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Special Projects" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"></td>
			</form></tr>
		<tr>
			<td valign="top" bgcolor="#F0F4F4">
<?php include 'sec_login.php';?>			<p>&nbsp;</td>
			<td valign="top" colspan="2" height="260">
			
<?php 
			$list=$_POST['list'];
			if ($list=='View Budget') {
			include 'budget.php';
			}
			if ($list=='Operational Expenses') {
			include 'op_exp.php';
			}

			if ($list=='Software and Licensing Budget') {
			include 'bugt_software.php';
			}
			if ($list=='Hardware Budget') {
			include 'bugt_hardware.php';
			}
			if ($list=='Special Projects') {
			include 'bugt_sproject.php';
			}
			
						 
			?>



  <?php 
			echo '<font face="arial" size="2">';
 
			$id=$_POST['id'];
			if (!$id) {
			echo 'Provide the accurate pointer to the data you want to edit';
			exit();
			}
			include 'connect.php';
									
							$sql = "SELECT * FROM opex_budg WHERE sn='$id'";
								$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)==0)
        {
        
         echo '<br><p style="margin-left: 40px"> This <b>Item </b>Does Not Exist Here</p>';
        include 'comment.php';
       exit();
       }

						
							while ($rows = mysqli_fetch_array($result)) {
						
			include 'update_opex_budget.php';
			exit();
			}
			
			?>
			
			</body>
			</html>