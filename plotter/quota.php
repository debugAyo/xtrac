<?php
		
		include 'dbconnect.php';
		
		//$query = "SELECT * FROM finance_acct";
		$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devstat";		
		$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['value'] = $row['COUNT(sn)'];
		    $jsonArrayItem['label'] = $row['devstat'];
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
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <script src="examples/lib/example.js"></script>
  <link rel="stylesheet" href="examples/lib/example.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="morris.css">
</head>
<body>

<div id="graph"></div>
<pre id="code" class="prettyprint linenums">
<script>
Morris.Donut({
  element: 'graph',
  
 data:<?php echo json_encode($jsonArray); ?>,
 
 //formatter: function (x) { return x + "%"}
}).on('click', function(i, row){
  console.log(i, row);
});
</script>
</pre>
</body>
</html>

