
<div class="w3-row-paddding">
<div class="w3-threequarter w3-border w3-padding-xlarge">
<?php
$dev_id = $_POST['dev_id'];
include '../link/connect.php';
$date = date("m-Y");


$sql="SELECT * FROM additem WHERE devid=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $dev_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$rows=mysqli_fetch_array($result);

$id = $rows['sn'];

//$password = 'test123';
 
//Hash it with BCRYPT.
//$passwordHashed = password_hash($pin, PASSWORD_BCRYPT);
//$emailHashed = password_hash($email, PASSWORD_BCRYPT);
 
//Print it out.
//echo $passwordHashed;
			include '../link/connect.php';
 $image_stmt = mysqli_prepare($conn, "SELECT * FROM additem WHERE sn=?");
mysqli_stmt_bind_param($image_stmt, 's', $id);
mysqli_stmt_execute($image_stmt);
 $image = mysqli_stmt_get_result($image_stmt);
// $image = mysqli_query($conn,"SELECT * FROM e_registration WHERE sn='31'");
while($row = mysqli_fetch_assoc($image))
{
//echo '<br>';
//echo '<img src="img.php?id='.$row["id"].'" width="150" height="150">';
echo '<p style="margin-left: 15px"; margin-top: 20px">';
echo '<left><img src="item_pic_rec.php?id='.$row["sn"].'" width="200" height="180" style="border: 0px solid #CCCCCC"></left></p>';
echo '<br>';
}


/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT * FROM additem WHERE devid = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $dev_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) >0)
{

echo '<p><button class="login-btn w3-light-green w3-text-black"><i class="fa fa-info-circle"></i> Detailed Information </button></p>';

while ($row = mysqli_fetch_array($result)) {
	
echo '<table width="100%" cellspacing="0" > 
			
			<tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Asset ID</th><td style="font-family: courier new; font-size:12px">'.$row['devid'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Category</th><td style="font-family: courier new; font-size:12px">'.$row['category'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Asset Name</th><td style="font-family: courier new; font-size:12px">'.$row['devname'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Manufacturer</th><td style="font-family: courier new; font-size:12px">'.$row['manuname'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Location</th><td style="font-family: courier new; font-size:12px">'.$row['location'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Status</th><td style="font-family: courier new; font-size:12px">'.$row['devstat'].'</td>
			
			</tr>';

	}


echo '</table>';		

	
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
<script>
$(document).ready(function() {
  $('#mySelect').change(function() {
    $('#myForm').submit();
  });
});
</script>
</div>
<div class="w3-quarter w3-padding-large">
</div>
</div>