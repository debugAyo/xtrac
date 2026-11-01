<?php
echo '<font face=arial size=2>';
$e_reg=$_POST['e_reg'];
if (!$e_reg) {
echo 'Please select an option';
exit();
}
include '../../connect.php';

if ($e_reg == 'General IPD')
 {

include 'ereg.php';

}

if ($e_reg == 'Antenatal IPD')
{

include 'antenatal.php';

}

if ($e_reg == 'antenatal')
{

include 'eCorReg.php';

exit();
}


?>