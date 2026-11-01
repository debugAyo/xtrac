<table cellpadding="0" cellspacing="0" width="1079" height="218">
	<!-- MSTableType="layout" -->
	<tr>
		<td height="218" valign="top" width="970">
		<p style="margin-left: 40px">
		
		<?php
		
		include 'dbconnect.php';
		
		//$query = "SELECT * FROM finance_acct";
		//$query = "SELECT  *, FORMAT(SUM(cpirow), 3) AS 'cpi', FORMAT(SUM(spirow), 3) AS 'spi' FROM my_projekts GROUP BY descone HAVING projtitl = 'Aquila II'";	
		$query = "SELECT  *, FORMAT(SUM(cpirow), 3) AS 'cpi', FORMAT(SUM(spirow), 3) AS 'spi' FROM my_projekts GROUP BY descone";			
		$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		 // $crat = ($row['cpi'] * $row['spi']);
		    $jsonArrayItem = array();
		    $jsonArrayItem['date'] = $row['milesdate'];
		    $jsonArrayItem['cpi'] = $row['cpi'];
		    $jsonArrayItem['spi'] = $row['spi'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}
		//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>';
	?>



<!doctype html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
<body>

<div id="graph"></div>
<pre id="code" class="prettyprint linenums">
<script>

var day_data = <?php echo json_encode($jsonArray); ?>

Morris.Line({
  element: 'graph',
  grid: false,
  data: day_data,
  xkey: 'date',
  ykeys: ['cpi', 'spi'],
  labels: ['cpi', 'spi']
});

</script>
</pre>
</body>

</html>


</td>
	</tr>
</table>

