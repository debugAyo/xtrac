<?php
echo '<p style="font-family: arial black; font-size: 20px">';
$result = mysqli_query($conn,"SELECT * FROM custom WHERE id='1'");
while ($row = mysqli_fetch_array($result)) {
echo $row['name'];
echo '</p>';
}
?>