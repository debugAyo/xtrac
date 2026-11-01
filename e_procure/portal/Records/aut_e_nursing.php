<?php
echo '<font face=arial size=2>';
$e_cert=$_POST['e_cert'];
if (!$e_cert) {
echo 'Please select an option';
exit();
}
include '../../connect.php';

if ($e_cert == 'Birth Certificate')
 {

include 'birthcertificate.php';

}

if ($e_cert == 'Death Certificate')
{

include 'deathcertificate.php';

exit();

}

?>