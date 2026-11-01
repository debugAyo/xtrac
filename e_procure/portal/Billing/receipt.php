
<head>
<meta http-equiv="Content-Language" content="en-us">
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>

<body onload="FP_preloadImgs(/*url*/'button2A.jpg', /*url*/'button2B.jpg')">

<div align="center">
	<table cellpadding="0" cellspacing="0" width="519" height="173" style="border: 1px solid #008000">
		<!-- MSTableType="layout" -->
		<tr>
	<td valign="top" bgcolor="#ECF9F2">
	<p align="center"><img border="0" src="med_logo.gif" width="29" height="32"></td>
			<td height="36"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#FFFF99" style="border-top:2px solid #008000; background-color:#FFFF00">
			<p align="center" style="margin-top: 3px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">Payment 
			Receipt</font></td>
			<td height="21"></td>
		</tr>
		<tr>
			<td valign="top"><?php
$pat_id=$_POST['pat_id'];
$dt_pay=$_POST['dt_pay'];
$tym_pay=$_POST['tym_pay'];
$hmo_total=$_POST['hmo_total'];
$own_total=$_POST['own_total'];
$sum=$_POST['sum'];
$mode=$_POST['mode'];$mode1=$_POST['mode1'];
$chq_no=$_POST['chq_no'];$chq_no1=$_POST['chq_no1'];
$service=$_POST['service'];$service1=$_POST['service1'];
$remk=$_POST['remk'];$remk1=$_POST['remk1'];
$acct=$_POST['acct'];$acct1=$_POST['acct1'];
$pay_name=$_POST['pay_name'];$pay_name1=$_POST['pay_name1'];
$amt_wrds=$_POST['amt_wrds'];$amt_wrds1=$_POST['amt_wrds1'];
$code=$_POST['code'];
$dept=$_POST['dept'];
$inv_no=$_POST['inv_no'];

if (!$code) {
echo 'A crucial information has been omitted';
exit();
}
$db=mysql_connect("localhost", "root","");
if (!$db) {
echo 'connection to database denied';
exit();
}
mysql_select_db("hospital",$db);
$sql="INSERT INTO receipt (patient_id, datepay, timepay, hmototal, owntotal, total, mode, mode1, cheq, cheq1, service, service1, remark, remark1, account, account1, payname, payname1, amount, amount1, code, department, invono)
	 VALUES ('$pat_id','$dt_pay',CURTIME(),'$hmo_total','$own_total','$sum','$mode','$mode1','$chq_no','$chq_no1','$service','$service1','$remk','$remk1','$acct','$acct1','$pay_name','$pay_name1','$amt_wrds','$amt_wrds1','$code','$dept','$inv_no')";
$result = mysql_query($sql);
?>
</td>
			<td height="11"></td>
		</tr>
		<tr>
			<td valign="top">
<?php
$acct=$_POST['acct'];
if ($acct=='SELF') {
include 'self_pay.php';
}
if ($acct=='Family') {
include 'support_pay.php';
}
$acct1=$_POST['acct1'];
if ($acct1=='Employer') {
include 'employ_pay.php';
}
if ($acct1=='HMO') {
include 'hmo_pay.php';
}
?>
</td>
			<td height="61"></td>
		</tr>
		<tr>
			<td width="516"></td>
			<td height="15" width="1"></td>
		</tr>
		<tr>
			<td height="27" valign="top" style="border-top:2px solid #008000; " colspan="2" bgcolor="#99CCFF">
			<input type="button" value="Print" onClick="window.print()" style="font-family: Corbel; font-size: 8pt"><a href="index.php"><img border="0" id="img1" src="button29.jpg" height="18" width="60" alt="Next" fp-style="fp-btn: Embossed Rectangle 2; fp-font: Corbel; fp-proportional: 0" fp-title="Next" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button2A.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'button29.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button2B.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button2A.jpg')"></a></td>
		</tr>
	</table>
</div>