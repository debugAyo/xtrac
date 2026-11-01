
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">

<table cellpadding="0" cellspacing="0" width="1200" height="72">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top" width="1200" height="72"><?php
include 'connect.php';
$sql = "SELECT  *, COUNT(sn) FROM additem GROUP BY devid, devtype, devstat, assmode, location HAVING devstat='Obsolete'"; 
$result = mysqli_query($conn, $sql);
?>

<html>  
 <head>  
  <title>Technology Gap</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  <br /> 
   <div class="table-responsive">  
  	<div class="col-lg-8">
       <table class="table table-bordered" width="93%" bgcolor="#DFEFFF" align="left" cellpadding="2" cellspacing="1">
		<tr>  
			<th bgcolor="#006699" width="200"><font face="calibri", size="3" color="#FFFFFF"><left>Item ID</th>
            <th bgcolor="#006699" width="350"><font face="calibri", size="3" color="#FFFFFF"><left>Item Status Description</th>
            <th bgcolor="#006699" width="120"><font face="calibri", size="3" color="#FFFFFF"><left>Status</th>
			<th bgcolor="#006699" width="250"><font face="calibri", size="3" color="#FFFFFF"><left>Location</th>
			<th bgcolor="#006699" width="60"><font face="calibri", size="3" color="#FFFFFF"><left>Quantity</th>
                    </tr>


    
          <?php
     while($row = mysqli_fetch_array($result))  
     {  
          
      echo ' <tr>
     	 <td bgcolor="#FFFFFF"><form action="auth_trac.php" method="post"><input type="hidden" name="email" value="<?php echo $email;?>" size="15"><input type="hidden" name="pin" value="<?php echo $pin;?>" size="15"><font face="calibri" size="1"><input type="text" readonly name ="dev_id" style="font-family: Arial; font-size: 8pt" value="'.$row["devid"].'" size="8"></font><input type="submit" value="Track" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999"></form></td> 
		 <td bgcolor="#FFFFFF" width="254"><font face="calibri", size="2">'.$row["devtype"].' model '.$row["assmode"].'</td>  
         <td bgcolor="#FFFFFF" width="167"><font face="calibri", size="2">'.$row["devstat"].'</td>  
         <td bgcolor="#FFFFFF"><font face="calibri", size="2">'.$row["location"].'</td>  
         <td bgcolor="#FFFFFF"><font face="calibri", size="2">'.$row["COUNT(sn)"].'</td>
										
				</tr>';  
      } 
     
     	
     
     
     ?>
   
</table>
	<br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    </body>
    </html></td>
		</tr>
</table>
</div>

