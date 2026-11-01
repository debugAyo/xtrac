<?php
		
		include '../link/connect.php';
		
$sql = "SELECT *, COUNT(id) AS gender_pop FROM live_report WHERE consent='Yes' && protitle_id='$dropdown' GROUP BY gender";

		$result = $conn->query($sql);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['gender'];
		    $jsonArrayItem['a'] = $row['gender_pop'];
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
<link rel="stylesheet" href="../plotter/css/morris.css">
<script src="../plotter/js/jquery.min.js"></script>
<script src="../plotter/js/raphael-min.js"></script>
<script src="../plotter/js/morris.min.js"></script>
</head>

<body>

<div id="exchart" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'exchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  
  data: <?php echo json_encode($jsonArray);?>,
  
  // The name of the data record attribute that contains x-values.
  //xkey: 'cron_time',
  
  xkey: ['y'],
  
  // A list of names of data record attributes that contain y-values.
   //ykeys: ['images_processed', 'images_failed'],
  
  ykeys: ['a'],
 
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  //labels: ['Images Processed', 'Images Failed'],
  
 labels: ['Total'],
 
  /* To customize the bar colors, use the functions below:*/
 
barColors: function (row, series, type) {
    if (type === 'bar') {
      var green = Math.ceil(255 * row.y / this.ymax);
      return 'rgb(0,' + green + ',0)';
    }
    else {
      return '#000';
    }
  } 
 
 
 
});
</script>

</body>
</html>


