<?php
		
		include 'dbconnect.php';
			
$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'cpi' FROM proj_review HAVING refno='PEF2018Q001' "; 
$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
//$total = $row['SUM(sn)'];
$total = $row['cpi'];

}


//$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'spi' FROM proj_review GROUP BY que1 HAVING refno='PEF2018Q001' "; 
$query = "SELECT  *, COUNT(sn) FROM proj_review GROUP BY que1 HAVING refno='PEF2018Q001' "; 

//$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
//while($row = mysqli_fetch_array($result)){

$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
 
$percnt = (($row['COUNT(sn)']*100)/$total);
//$percnt = (($row['spi']*100)/$total);

		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['que1'];
		    $jsonArrayItem['a'] = number_format($percnt,2)."%";
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}

//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>'
	
	?>

		
<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>

<html>
<head>
</head>
<body>


	<div style="height: 10px; width:850px"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="" align="center" cellpadding="4" cellspacing="1">
		<thead>
		<tr>
			<th colspan="4">
			<p align="left">
			<font face="arial" style="font-size: 11pt" color="#999999">DISASTER RECOVERY SENSITIZATION CHART  based on 
			(</font><font face="arial" style="font-size: 11pt" color="#CC0000">%</font><font face="arial" style="font-size: 11pt" color="#999999">)</font><hr style="background-color: #800000" noshade color="#008000"></th>
												
			</tr>
												
		</thead>
		<tbody>

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
  
 labels: ['Series A'],
 barColors: function (row, series, type) {
    if (type === 'bar') {
      var blue = Math.ceil(225 * row.y / this.ymax);
      return 'rgb(0,0,' + blue + ')';
    }
    else {
      return '#000';
    }
  }

 

});
</script>

</body>
</html>

<?php
		
		include 'dbconnect.php';
			
$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'cpi' FROM proj_review HAVING refno='PEF2018Q001' "; 
$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
//$total = $row['SUM(sn)'];
$total = $row['cpi'];

}


//$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'spi' FROM proj_review GROUP BY que2 HAVING refno='PEF2018Q001' "; 
$query = "SELECT  *, COUNT(sn) FROM proj_review GROUP BY que2 HAVING refno='PEF2018Q001' "; 

//$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
//while($row = mysqli_fetch_array($result)){

$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
 
$percnt = (($row['COUNT(sn)']*100)/$total);
//$percnt = (($row['spi']*100)/$total);


		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['que2'];
		    $jsonArrayItem['a'] = number_format($percnt,2)."%";
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}

//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>'
	
	?>

		
<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>

<html>
<head>
</head>
<body>


	<div style="height: 10px; width:850px"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="" align="center" cellpadding="4" cellspacing="1">
		<thead>
		<tr>
			<th colspan="4">
			<p align="left">
			<font face="arial" style="font-size: 11pt" color="#999999">AQUILLA SENSITIZATION CHART  based on 
			(</font><font face="arial" style="font-size: 11pt" color="#CC0000">%</font><font face="arial" style="font-size: 11pt" color="#999999">)</font><hr style="background-color: #800000" noshade color="#008000"></th>
									
			</tr>
												
		</thead>
		<tbody>

<div id="myfirstchart2" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart2',
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
  
 labels: ['Series A'],
 barColors: function (row, series, type) {
    if (type === 'bar') {
      var blue = Math.ceil(225 * row.y / this.ymax);
      return 'rgb(0,0,' + blue + ')';
    }
    else {
      return '#000';
    }
  }

});
</script>

</body>
</html>
<?php
		
		include 'dbconnect.php';
			
$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'cpi' FROM proj_review HAVING refno='PEF2018Q001' "; 
$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
//$total = $row['SUM(sn)'];
$total = $row['cpi'];

}


//$query = "SELECT  *, FORMAT(COUNT(sn), 2) AS 'spi' FROM proj_review GROUP BY que2 HAVING refno='PEF2018Q001' "; 
$query = "SELECT  *, COUNT(sn) FROM proj_review GROUP BY que5 HAVING refno='PEF2018Q001' "; 

//$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
//while($row = mysqli_fetch_array($result)){

$result = $conn->query($query);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
 
$percnt = (($row['COUNT(sn)']*100)/$total);
//$percnt = (($row['spi']*100)/$total);


		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['que5'];
		    $jsonArrayItem['a'] = number_format($percnt,2)."%";
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}

//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>'
	
	?>

		
<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>

<html>
<head>
</head>
<body>


	<div style="height: 10px; width:850px"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="" align="center" cellpadding="4" cellspacing="1">
		<thead>
		<tr>
			<th colspan="4">
			<p align="left">
			<font face="arial" style="font-size: 11pt" color="#999999">CYBERSECURITY SENSITIZATION CHART based on 
			(</font><font face="arial" style="font-size: 11pt" color="#CC0000">%</font><font face="arial" style="font-size: 11pt" color="#999999">)</font><hr style="background-color: #800000" noshade color="#008000"></th>
									
			</tr>
												
		</thead>
		<tbody>

<div id="myfirstchart3" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart3',
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
  
 labels: ['Series A'],
 barColors: function (row, series, type) {
    if (type === 'bar') {
      var blue = Math.ceil(225 * row.y / this.ymax);
      return 'rgb(0,0,' + blue + ')';
    }
    else {
      return '#000';
    }
  }


});
</script>

</body>
</html>

