
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">

<table cellpadding="0" cellspacing="0" width="689" height="72">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top" width="689" height="72"><?php
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
       <table class="table table-bordered" width="60%" bgcolor="#DFEFFF" align="left" cellpadding="2" cellspacing="1">
		<tr>  
            <th bgcolor="#006699"><font face="calibri", size="3" color="#FFFFFF"><left>Item Status Description</th>
			<th bgcolor="#006699"><font face="calibri", size="3" color="#FFFFFF"><left>Model</th>
			<th bgcolor="#006699"><font face="calibri", size="3" color="#FFFFFF"><left>Location</th>
			<th bgcolor="#006699"><font face="calibri", size="3" color="#FFFFFF"><left>Quantity</th>
                    </tr>


    
          <?php
     while($row = mysqli_fetch_array($result))  
     {  
          
      echo ' <tr>
		 <td bgcolor="#FFFFFF"><font face="calibri", size="2">'.$row["devstat"].' '.$row["devtype"].'</td>  
         <td bgcolor="#FFFFFF"><font face="calibri", size="2">'.$row["assmode"].'</td>  
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

