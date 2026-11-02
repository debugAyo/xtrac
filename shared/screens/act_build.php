<?php

/*echo $dev_id . '<br />';
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

$dev_id = $_POST['dev_id'];
$dev_name = $_POST['dev_name'];
$dev_type = $_POST['dev_type'];
$dev_mod = $_POST['dev_mod'];
$man_name = $_POST['man_name'];
$prodt = $_POST['prodt'];
$owner = $_POST['owner'];
$log_usr = $_POST['log_usr'];
$ass_cat = $_POST['ass_cat'];
$reg_num = $_POST['reg_num'];
$purprice = $_POST['purprice'];
$warnty = $_POST['warnty'];
$location = $_POST['location'];
$mk_year = $_POST['mk_year'];
$cpu = $_POST['cpu'];
$dev_stat = $_POST['dev_stat'];
//$recomm = mysqli_real_escape_string($conn, $_POST['recomm']);


$stmt = mysqli_prepare($conn, "SELECT * FROM additem WHERE devid=?");
mysqli_stmt_bind_param($stmt, 's', $dev_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
        echo "<p class='w3-orange w3-center w3-text-white'>Duplication of asset ID is highly prohibited</p>";

        echo '<br>';
         //include 'item_prev.php';
             //include 'add_item.php';
             include 'build_ass.php';
       exit();
       }
else
{ 
$sql = "INSERT INTO additem (category,devtype,devname,manuname,lifecycle,regnumber,assmode,makeyear,purprice,waranty,prodate,curdate,devid,devstat,recommnd,location,pic,endlife,owner,loguser)
VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW(),?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'ssssssssssssssssss', $ass_cat, $dev_type, $dev_name, $man_name, $cpu, $reg_num, $dev_mod, $mk_year, $purprice, $warnty, $prodt, $dev_id, $dev_stat, $recomm, $location, $ass_pic_res, $expdate, $owner, $log_usr);

if (mysqli_stmt_execute($stmt)) {
  echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
   echo '<br>';
   include 'build_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  //include 'ass_add.php';
}
}
?>
