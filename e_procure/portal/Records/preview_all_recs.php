<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealthCare - Patient's Records</title>
</head>

<body>
<?php
echo '<font size=2, face=tahoma>';
$pat_id = $_POST['pat_id'];
$records = $_POST['records'];
if (!$pat_id || !$records)
{
echo 'You cannot send empty values.';
exit;
}
$db = mysql_connect("localhost", "root","");
if (!$db) 
{
echo 'Cannot connect to database.';
exit;

}
if ($records == 'Antenatal Rec')
{
include 'antenatal_print_all.php';
}
else
{
include 'print_all.php';
}
?>
</body>

</html>
