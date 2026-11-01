

<?php
		
		include 'dbconnect.php';
		
		//$query = "SELECT * FROM finance_acct";
		$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devstat";		
		$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['devstat'];
		    $jsonArrayItem['a'] = $row['COUNT(sn)'];
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




<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>

<div id="myfirstchart" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  
  data: <?php echo json_encode($jsonArray);?>,
  


  // The name of the data record attribute that contains x-values.
  //xkey: 'cron_time',
  xkey: 'y',
  
  // A list of names of data record attributes that contain y-values.
   //ykeys: ['images_processed', 'images_failed'],
  
 ykeys: ['a'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  //labels: ['Images Processed', 'Images Failed'],
  
 labels: ['Series A']
});
</script>

</body>
</html>

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

<script>
Morris.Donut({
  element: 'graph',
  
 data:<?php echo json_encode($jsonArray); ?>,
 
//formatter: function (x) { return x + "%"}
}).on('click', function(i, row){
  console.log(i, row);
});
</script>

</body>
</html>


