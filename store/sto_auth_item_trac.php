<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<?php

$dev_id = $_POST['dev_id'];
include '../link/connect.php';

//$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
//$result = mysqli_query($conn,"SELECT * FROM additem");
$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}

$rows=mysqli_fetch_array($result);


if ($rows['curdate']>=$rows['endlife']) {
$sql = "UPDATE additem SET devstat='Obsolete', curdate=NOW(), recommnd='Remove this Item' WHERE devid='$dev_id'";
		$result = mysqli_query($conn,$sql);
		
		}
		$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);


$rows=mysqli_fetch_array($result);


if ($rows['devtype']== 'Desktop') {

include 'sto_desk_prev.php';
exit();
}
else 
{
 include 'sto_other_prev.php';
 }

//mysqli_close();
?>			

</div>
<div class="w3-quarter"></div>
</div>