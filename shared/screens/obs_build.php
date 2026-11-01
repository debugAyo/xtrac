<?php
/*
echo $dev_id . '<br />';
echo $dev_name . '<br />';
echo $dev_type . '<br />';
echo $dev_mod . '<br />';
echo $man_name . '<br />';
echo $prodt . '<br />';
echo $owner . '<br />';
echo $log_usr . '<br />';
echo $ass_cat . '<br />';
echo $reg_num . '<br />';
echo $purprice . '<br />';
echo $warnty . '<br />';
echo $location . '<br />';
echo $mk_year . '<br />';
echo $cpu . '<br />';
echo $dev_stat . '<br />';
echo $expdate  . '<br />';
*/
 
include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$dev_id = mysqli_real_escape_string($conn,$_POST['dev_id']);
$dev_name = mysqli_real_escape_string($conn,$_POST['dev_name']);
$dev_type = mysqli_real_escape_string($conn,$_POST['dev_type']);
$dev_mod = mysqli_real_escape_string($conn,$_POST['dev_mod']);
$man_name = mysqli_real_escape_string($conn,$_POST['man_name']);
$prodt = mysqli_real_escape_string($conn,$_POST['prodt']);
$owner = mysqli_real_escape_string($conn,$_POST['owner']);
$log_usr = mysqli_real_escape_string($conn,$_POST['log_usr']);
$ass_cat = mysqli_real_escape_string($conn,$_POST['ass_cat']);
$reg_num = mysqli_real_escape_string($conn,$_POST['reg_num']);
$purprice = mysqli_real_escape_string($conn,$_POST['purprice']);
$warnty = mysqli_real_escape_string($conn,$_POST['warnty']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$mk_year = mysqli_real_escape_string($conn,$_POST['mk_year']);
$cpu = mysqli_real_escape_string($conn,$_POST['cpu']);
$dev_stat = mysqli_real_escape_string($conn,$_POST['dev_stat']);


$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
        echo "<p class='w3-text-white w3-orange w3-padding-large w3-center'>Duplication of asset ID is highly prohibited</p>";
        echo '<br>';
         //include 'item_prev.php';
             //include 'add_item.php';
             include 'build_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (category,devtype,devname,manuname,lifecycle,regnumber,assmode,makeyear,purprice,waranty,prodate,curdate,devid,devstat,recommnd,location,pic,endlife,owner,loguser)
VALUES ('$ass_cat','$dev_type','$dev_name','$man_name','$cpu','$reg_num','$dev_mod','$mk_year','$purprice','$warnty','$prodt',NOW(),'$dev_id','$dev_stat','$recomm','$location','$ass_pic_res','$expdate','$owner','$log_usr')";

/*
$sql = "INSERT INTO additem (category,devtype,devname)
VALUES ('$ass_cat','$dev_type','$dev_name')";
*/
if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br>';
   include 'build_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  //include 'ass_add.php';
}
}

?>
