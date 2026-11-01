
<?php

if (isset($_POST['submit_coordinates'])) 
{
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

?>
<iframe class="w3-border-grey w3-light-blue" style="width:100%; height:400px; padding:16px; border:0px solid " src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

<?php

}
?>

