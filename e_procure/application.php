<?php 
			echo '<font face=arial size=1>';
$pkg=$_POST['pkg'];
$srv_pkg = $_POST['srv_pkg'];
$price = $_POST['price'];
if (!$pkg || !$srv_pkg || !$price) {
echo 'Unauthorized! Access Denied';
exit();
}
include 'portal/records/ereg.php';
echo '</font>';
?>