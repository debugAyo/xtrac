<?php
echo '<font size=2, face=arial>';
include '../../connect.php';
$result = mysqli_query($conn,"SELECT * FROM e_registration WHERE serial='$_POST[randomfield]'");
while ($myrow = mysqli_fetch_array($result))
{ 
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">ID Number:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["serial"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Full Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["surname"];
echo '&nbsp;&nbsp;&nbsp';
echo $myrow["other"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Sex:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["sex"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Place of Origin:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["origin"];

echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Patient Address:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["client_add"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Age:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["maturity"];
echo '&nbsp;';
echo 'years';
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Time of Admission:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["time_app"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Date of Admission:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["date_app"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Occupation:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["work"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Patient Phone No:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["phone"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Next of Kin:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["next_kin"];
echo '</td></tr>';
echo "<tr><td width=160 style='border: 1px solid #008000'><span style='font-weight: 700'>
							<font face='arial' color='#333333' style='font-size: 8.5pt'>
							</font></span><font face='arial' style='font-weight: 700; font-size: 8.5pt' color='#333333'>Next of Kin's Address:</font></td>
							<td width=114 style='border: 1px solid #008000'>";
echo "<font size=2, face=arial>";
echo $myrow["kin_add"];
echo "</td></tr>";
echo '<tr><td width=320 style="border: 1px solid #008000" colspan=2><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 400; font-size: 8pt" color="#333333"><center>See Detail Below if you are an enrollee of Family, Corporate or Health Insurance Scheme</font></td>
							</tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Health Insurance:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["hmo_pkg"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Package Enrolled:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["price"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Employer:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["organization"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Family Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["fam_name"];
echo '</td></tr>';



echo '</font>';
}
mysqli_close($conn);

?>