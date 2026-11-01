<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Shelf Management</h3>	

<?php

include '../link/connect.php';
 
//$sql="SELECT * FROM additem  WHERE category='IT Infrastructure'";

$sql="SELECT * FROM additem";
$result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}

$sql = "UPDATE additem SET curdate=NOW()";
		$result = mysqli_query($conn,$sql);
		

$sql="SELECT * FROM additem";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

$devid = $rows['devid'];


$sql = "UPDATE additem SET devstat='Obsolete', recommnd='Due for Replacement' WHERE DATEDIFF(endlife,curdate)<= '6 months'";

		$result = mysqli_query($conn,$sql);

$sql="SELECT *, COUNT(sn) FROM additem GROUP BY manuname, batchnumber, devid ORDER BY category ASC";
$result=mysqli_query($conn,$sql);

echo "<table width='100%' border='0'color='#FFFFFF' bgcolor='#DFEFFF' align='center' cellpadding='0' cellspacing='0'>
<tr  class='w3-light-blue'>
<th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px;font-color:back;text-align:left'>Management Console</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px;font-color:back;text-align:left'>Item ID</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Batch No</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Name</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Category</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Manufacturer</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Qty on Shelf</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px; font-family:arial; font-size:10px; font-color:back;text-align:left'>Status</th>
</tr>";

// Define $color=1 
$color="1";

while($rows=mysqli_fetch_array($result)){

// If $color==1 table row color = #FFC600
if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='' method='post'>
	<input type='checkbox' name='select' onmouseover title='Check'>
	<input type='hidden' name='dev_id' value='".$rows['devid']."'>
	<input type='hidden' value='Edit Item' name='list'>
	<button class='login-btn w3-white' onmouseover title='Edit'><i class='fa fa-edit w3-text-green'></i></button>
	<input type='hidden' name='dev_id' value='".$rows['devid']."'>
	<input type='hidden' value='Delete' name='list'>
	<button class='login-btn w3-white w3-text-blue'  onmouseover title='Delete'><i class='fa fa-trash-o w3-text-red'></i></button></form></td>
	<td><input type='text' readonly name ='dev_id' style='font-family: Calibri; font-size: 8pt; border: 1px solid #FFFFFF; background-color: #FFFFFF' value='".$rows['devid']."' size='12'></font></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['batchnumber']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['category']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['quant']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devstat']."</td>
</tr>";

// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>
<td><form action='' method='post'>
	<input type='checkbox' name='select' onmouseover title='Check'>
	<input type='hidden' name='dev_id' value='".$rows['devid']."'>
	<input type='hidden' value='Edit Item' name='list'>
	<button class='login-btn w3-text-black' style='background-color:#DFEFFF' onmouseover title='Edit'><i class='fa fa-edit w3-text-green'></i></button>
	<input type='hidden' name='dev_id' value='".$rows['devid']."'>
	<input type='hidden' value='Delete' name='list'>
	<button class='login-btn' style='background-color:#DFEFFF' onmouseover title='Delete'><i class='fa fa-trash-o w3-text-red'></i></button></form></td>
<td><input type='text' readonly name ='dev_id' style='font-family: Calibri; font-size: 8pt; border: 0px solid #FFFFFF;' value='".$rows['devid']."' size='12'></font></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['batchnumber']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['category']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['quant']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devstat']."</td>
</tr>";

// Set $color back to 1 
$color="1";
}

}


echo '</table>';

?>
<div>
</div>

<div class="w3-row-padding">
<div class="w3-half">

	<table width="100%" bgcolor='#DDDDDD' cellpadding="4" cellspacing="1">
		
			<tr>
			<th><font face="calibri" size="2"><left>Batch No</th>
			<th><font face="calibri" size="2"><left>Asset Name</th>
			<th><font face="calibri" size="2"><left>Status</th>
			<th><font face="calibri" size="2"><left>Units</th>
			</tr>
									

 <?php

include '../link/connect.php';

$query="SELECT *, COUNT(sn) FROM additem GROUP BY manuname, batchnumber HAVING category='Consumables'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['batchnumber']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo '&nbsp'; echo $row['devstat']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['quant']; ?></td>
										
				</tr>
	

	
	<?php	

		}
		
		 
echo '</table>';	

$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY manuname, batchnumber HAVING category='Consumables' ORDER BY manuname ASC"; 

$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);
echo "<p><b>Total Group of Consumables Displayed = </b>";
echo "$num_rows \n";
echo "</p>";
?>
	
</div>

<div class="w3-half">

<table width="100%" bgcolor='#DDDDDD' align="left" cellpadding="4" cellspacing="1">
	<tr>
			<th><font face="calibri" size="2"><left>Item ID</th>
			<th><font face="calibri" size="2"><left>Status</th>
			<th><font face="calibri" size="2"><left>Units</th>
			</tr>
			<?php 
				include '../link/connect.php';
				
				$query="SELECT *, COUNT(sn) FROM additem GROUP BY manuname, batchnumber, devid HAVING category!='Consumables'";
				$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	?>
<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devid']; ?></td><td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo '&nbsp'; echo $row['devstat']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['quant']; ?></td>
										
				</tr>
<?php
}

?>				
	</table>

<?php
$query="SELECT *, COUNT(sn) FROM additem GROUP BY manuname, batchnumber, devid HAVING category!='Consumables'";
$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);
echo "<p><b>Total Number of Other Goods Displayed = </b>";
echo "$num_rows \n";
echo "</p>";
?>	
</div>
</div>
