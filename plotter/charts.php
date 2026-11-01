<?php

require_once ('../jpgraph-4.4.1/src/jpgraph.php');

require_once ('../jpgraph-4.4.1/src/jpgraph_bar.php');

//Set the data

$series1=array(20,40,60,80,100);
$series2=array(500,600,700,550,430);


//$series2=array($twenty,$forty,$sixty,$eighty,$hundred);

//Declare object to draw the chart

$graph = new Graph(500,300);

//Clear all

$graph->ClearTheme();

//Set some setting for the chart

$graph->SetScale('textlin');

$graph->SetMarginColor('white');

$graph->title->Set('Accumulated bar chart with gradient');

 

//Create the first bar

$plot1 = new BarPlot($series1);

$plot1->SetFillGradient('orange','cyan',GRAD_VERT);

$plot1->SetColor('darkred');

 

// Create the second bar

$plot2 = new BarPlot($series2);

$plot2->SetFillGradient('blue','green',GRAD_VERT);

$plot2->SetColor('darkgreen');

 

//And join them in an accumulated bar

$gaccplot = new AccBarPlot([$plot1,$plot2]);

$graph->Add($gaccplot);

// Display the graph

$graph->Stroke();


?>