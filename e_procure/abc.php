<?php
echo '<font face="HP Simplified,arial,verdana" style="font-size: 12pt; font-weight: 700" color="#666666">';
 $result = mysqli_query($conn,"SELECT * FROM custom WHERE sn='1'");
while ($myrow = mysqli_fetch_array($result)) {
echo $myrow['name'];

}
echo '</font>';
?>