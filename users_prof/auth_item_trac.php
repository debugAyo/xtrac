<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<?php

$dev_id = $_POST['dev_id'];
include '../link/connect.php';
;
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


//$rows=mysqli_fetch_array($result);

	while ($row= mysqli_fetch_array($result)){
				$category = $row['category'];
				$devtyp = $row['devtype'];
			
if ($category == 'IT Infrastructure' && $devtyp == 'Desktop') {

include 'desk_prev.php';

}
if ($category== 'IT Infrastructure' && $devtyp != 'Desktop') {

include 'other_prev.php';

}

if ($category== 'Electronic Appliances') {

include 'elect_ass_prev.php';

}

if ($category== 'Furniture') {

include 'furn_ass_prev.php';

}

if ($category== 'Real Estate') {

include 'estate_ass_prev.php';

}
if ($category== 'Plant and Equipment') {

include 'plant_ass_prev.php';

}
if ($category== 'Vehicles') {

include 'auto_ass_prev.php';

}

if ($category== 'Consumables') {

include 'consumass_prev.php';

}
	}

?>			

</div>
<div class="w3-quarter"></div>
</div>