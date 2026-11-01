<?php
// Inialize session
session_start();

if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	header ('Location:../index.php');
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>

<?php include 'config/header.php';?>

<div class="hero-image  w3-border-grey w3-border-top ">

  <?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM user_login WHERE username = '" . $_SESSION['username'] . "'");
while($row = mysqli_fetch_array($result)) {
$fname = $row['fname'];
$categ = $row['dept'];
$calphone = $row['phone'];
$caladdress = $row['con_add'];
$calemail = $row['email'];
$gender = $row['sex'];
$appcode = $row['staff_id'];

/*Here, $appcode represents student's admission number*/
}
$date=date('Y-m-d');
?>

<div class="w3-row-padding">
<div class="w3-quarter w3-padding-large w3-black"> 
<h4 class="w3-border-bottom w3-border-grey w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-briefcase w3-text-light-grey w3-hover-text-light-green"></i> MANAGEMENT</h4>
<div class="left list-group">
	<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-sitemap fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Dashboard</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Procurement Trends"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Procurement Trends</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Status Chart"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Status Chart</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Financial Analysis"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Financial Analysis</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Technical Report"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Technical Report</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Phased Budgeting"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Phased Budgeting</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Status Reporting"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Status Reporting</button></form>
			   	  
      </div>
    </div>
	
</div>
<form method="post" action=""><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" name="list" value="Barcode Generation" style="border:0px solid; padding: 6px 8px; cursor:pointer;font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-barcode fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px; font-weight:bold"></i> Barcode Generation</button></form>	
	<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-group fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Add New Asset</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Add Item"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Add Item</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Software Association"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Software Association</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Parts Association"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Parts Association</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Invoice Association"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Invoice Association</button></form>
       	  <form action="" method="post"><input type="hidden" name="list" value="Contract Association"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Contract Association</button></form>
		       	  
      </div>
    </div>
	
</div>
<form method="post" action=""><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" name="list" value="Asset Tracking" style="border:0px solid; padding: 6px 8px; cursor:pointer;font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-mixcloud fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px; font-weight:bold"></i> Asset Tracking</button></form>
<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-group fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Asset Listing</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="View All Assets"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> View All Assets</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="View Assets by Category"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> View Assets by Category</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="View Assets by Dependency"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> View Assets by Dependency</button></form>      	  
      </div>
    </div>
	
</div>	
	
<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-sitemap fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Depreciation Management</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Depreciation Summary"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i>  Depreciation Summary</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Depreciation Calculator"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Depreciation Calculator</button></form>
	        	  
      </div>
    </div>
	
</div>
	
	<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-sitemap fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Budget Management</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Budget Listing"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Budget Listing</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Operational Expenses"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Operational Expenses</button></form>
	 <form action="" method="post"><input type="hidden" name="list" value="Software and Licensing Budget"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Software and Licensing Budget</button></form>
       <form action="" method="post"><input type="hidden" name="list" value="Hardware Budget"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Hardware Budget</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Special Projects"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Special Projects</button></form>
	 
       	  
      </div>
    </div>
	
</div>


<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-support fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px"></i> Incident Management</button>
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
		  <form action="" method="post"><input type="hidden" name="list" value="Supports Management"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Supports Management</button></form>
          <form action="" method="post"><input type="hidden" name="list" value="Ticket Management"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Tickets Management</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Tickets Listing"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Tickets Listing</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Create New Ticket"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Create New Ticket</button></form>
       	  <form action="" method="post"><input type="hidden" name="list" value="Ticket Tracking"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Ticket Tracking</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Compliance Management"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Compliance Management</button></form>
       	  
      </div>
    </div>
	
</div>

<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-cog fa-spin fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px"></i> Settings</button>
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
		  <form action="" method="post"><input type="hidden" name="list" value="Network Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Network Settings</button></form>
          <form action="" method="post"><input type="hidden" name="list" value="Department Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Department Settings</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Privilege Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Privilege Settings</button></form>
		  		  <form action="" method="post"><input type="hidden" name="list" value="Users Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Users Settings</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Assets Category Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Assets Category Settings</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Supports Category Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Supports Category Settings</button></form>
       	  <form action="" method="post"><input type="hidden" name="list" value="Financial Account Settings"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Financial Account Settings</button></form>
		  
      </div>
    </div>
	
</div>

   
   <div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-group fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Events Logging</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="View Recent"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> View Recent</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="View All"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> View All</button></form>
		  
      </div>
    </div>
	
</div>
   
   <form method="post" action="logout.php"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" name="list" value="Logout" style="border:0px solid; padding: 6px 8px; cursor:pointer;font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-sign-out fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Logout</button></form>
</div>
  </div>
  

  <div class="w3-threequarter">
<?php

 $list ='';

  echo '<p class="w3-light-grey w3-padding-large w3-text-grey w3-hover-text-light-green" style="margin-top: -1.2%; font-size:14px;text-align:right; letter-spacing:1px"><i class="fa fa-user w3-text-grey w3-hover-text-black" style="font-size:24px;"></i> '.$fname.'</p>';

				
			if (isset($_POST['list'])) {
				$list = $_POST['list'];
			
			
			if ($list == '')
			{

			}
			
/*These commands are used to add assets and other assets' dependencies*/
		if ($list=='Barcode Generation') {
			include 'barcode_gen.php';
			}
		if ($list=='Barcode Generation Form') {
			include 'barcode_test.php';
			
			}
		
			if ($list=='Add Item') {
			include 'asset_categ.php';
			
			}
			
			if ($list=='Software Association') {
			include 'soft_associative_categ.php';
			
			}
			if ($list=='Software Associative Category') {
			include 'software_ass.php';
			
			}
			
			if ($list=='Software Assoc Form') {
			include 'auth_software_ass.php';
			
			}
			if ($list=='Parts Association') {
			include 'parts_associative_categ.php';
			
			}
			if ($list=='Parts Associative Category') {
			include 'parts_ass.php';
			
			}
			if ($list=='Parts Assoc Form') {
			include 'auth_parts_ass.php';
			
			}
			
			if ($list=='Invoice Association') {
			include 'invoice_associative_categ.php';
			
			}
			if ($list=='Invoice Associative Category') {
			include 'invoice_ass.php';
			
			}
			
			if ($list=='Invoice Assoc Form') {
			include 'auth_invoice_ass.php';
			
			}
			
			if ($list=='Contract Association') {
			include 'contract_associative_categ.php';
			
			}
			
			if ($list=='Contract Associative Category') {
			include 'contract_ass.php';
			
			}
		
			if ($list=='Contract Assoc Form') {
			include 'auth_contract_ass.php';
			
			}
			
			if ($list=='Add New Asset') {
			include 'asset_categ.php';
			
			}

/*These define the different categories of asset tracking methods*/

			if ($list=='Asset Tracking') {
			include 'track_categ.php';
			
			}
			
			if ($list=='Asset ID') {
			include 'ass_categ_id.php';
			
			}
			if ($list=='Asset Status') {
				include 'ass_categ_stat.php';
			}
			if ($list=='Asset Name') {
			include 'ass_categ_name.php';
				
			}
			if ($list=='Asset Category') {
			include 'ass_categ_typ.php';
			}

			if ($list=='Asset Location') {
			include 'ass_categ_locat.php';
				
			}
			if ($list=='Asset Serial No') {
			include 'ass_categ_serial.php';
			}
/*Tracking forms will be processed with each of the follwoing commands*/

			if ($list=='Track Asset ID') {
			include 'auth_item_trac.php';
			
			}
			if ($list=='Track Asset Status') {
				include 'auth_ass_categ_stat.php';
			}
			if ($list=='Track Asset Name') {
			include 'auth_ass_categ_name.php';
				
			}
			if ($list=='Track Asset Category') {
			include 'auth_ass_categ_typ.php';
			}

			if ($list=='Track Asset Location') {
			include 'auth_ass_categ_locat.php';
				
			}
			if ($list=='Track Asset Serial') {
			include 'auth_ass_categ_serial.php';
			}
	
			/*Processing Building Assets Form */
			
			if ($list=='Buildings') {
			include 'build_ass.php';
			
			}
			if ($list=='Buildings Form') {
			include 'auth_buildass.php';
			
			}
			
			/*Processing Consumable Assets Form */
			
			if ($list=='Consumables') {
			include 'consum_ass.php';
			}
			
			if ($list=='Consumables Form') {
			include 'auth_sto_consumass.php';
			}
			
			/*Processing Electronics Assets Form */
			
			if ($list=='Electronic Appliances') {
			include 'elect_ass.php';
			}
			
			if ($list=='Electronics Asset Form') {
			include 'auth_elect_ass.php';
			}
			
			/*Processing Furniture Assets Form */
			
			if ($list=='Furniture') {
			include 'furn_ass.php';
			}
			
			if ($list=='Furniture Asset Form') {
			include 'auth_furn_ass.php';
			}
			
			/*Processing IT Infrastructure Assets Form */
			
			if ($list=='IT Infrastructure') {
			include 'add_item.php';
			}
			
			if ($list=='ICT Asset') {
			include 'auth_add_item.php';
			}
			
			/*Processing Land Assets Form */
			
			if ($list=='Real Estate') {
			include 'land_ass.php';
			}
			
			if ($list=='Land Asset Form') {
			include 'auth_land_ass.php';
			}
			
			/*Processing Plant and Equipment Assets Form */
			
			if ($list=='Plant and Equipment') {
			include 'plant_ass.php';
			}
			
			if ($list=='Equipment Asset Form') {
			include 'auth_plant_ass.php';
			}
			
			/*Processing Vehicle Assets Form */
			
			if ($list=='Vehicles') {
			include 'auto_ass.php';
			}	
			
			if ($list=='Vehicle Asset Form') {
			include 'auth_auto_ass.php';
			}

		/* Preview Assets in each category with the commands below */

			if ($list=='View All Assets') {
			include 'all_item_prev.php';
			//include 'page.php';
			}
			
			if ($list=='View Assets by Category') {
			include 'asset_categ_prev.php';
			//include 'page.php';
			}
			
			if ($list=='Preview Asset Category') {
			include 'auth_asset_categ_prev.php';
			//include 'page.php';
			
			}
			
			if ($list=='Software Dependencies Preview') {
			include 'soft_prev.php';
			}
			if ($list=='Parts Dependencies Preview') {
			include 'parts_prev.php';
			}
			if ($list=='Invoice Details Preview') {
			include 'invoice_prev.php';
			}
			
			if ($list=='Contract Association Preview') {
			include 'contract_prev.php';
			}
			if ($list=='Add New Asset Preview') {
			include 'mylisting.php';
			}
			if ($list=='Assets Listing Preview') {
			include 'ass_cat_view.php';
		
			}
			
			/*Events Logging */
			
			if ($list=='View Recent') {
			include 'syslog.php';
			
			}
			if ($list=='View All') {
			include 'syslog_all.php';
		
			}			
			
			if ($list=='Procurement Trends') {
			//include 'plotter/index.php';
			include 'plotter.php';
			}
			if ($list=='Status Chart') {
			//include 'plotter/new.php';
			include 'new.php';
			}
		
			if ($list=='Technical Report') {
			include 'page.php';
			}
			if ($list=='Phased Budgeting') {
			include 'phased_budg.php';
			}
		
			if ($list=='Status Reporting') {
			include 'report_page.php';
			}
			/*Financial Analysis */
			
			if ($list=='All Assets Financial Status') {
			include 'all_fin_stat.php';
			}
			if ($list=='Asset Financial Status') {
			include 'fin_stat.php';
			}
			
			/*Depreciation Calculator and Analyzer*/			
			
			if ($list=='Depreciation Calculator') {
			include 'deprecat_analyzer.php';
			}
			if ($list=='Depreciation Calculator Form') {
			include 'auth_deprecat_analyzer.php';
			}
			
			if ($list=='Depreciation Summary') {
			include 'all_fin_stat.php';
			}
			
			if ($list=='Financial Reports') {
			include 'financial_report.php';
			//include 'expense_acct.php';
			//exit();
			} 
			
			if ($list=='Expense') {
			//include 'expense_acct.php';
			include 'daily_expense.php';
			//exit();
			}

			
			/*Strategic Budeting */
			
			if ($list=='Budget Listing') {
			include 'budget.php';
			}
			
			if ($list=='Comprehensive Budget') {
			include 'auth_budget_refr.php';
			//include 'det_budget.php';
			}
			if ($list=='Summarized Budget') {
			//include 'auth_budget_refr.php';
			include 'det_budget.php';
			}
			if ($list=='Editable Budget') {
			include 'budget_edit.php';
			}
			
			if ($list=='Operational Expenses') {
			include 'op_exp.php';
			}
			
			if ($list=='Operational Expenses Form') {
			//include 'op_exp.php';
			include 'auth_budg_general.php';
			}
			
			if ($list=='Software and Licensing Budget') {
			include 'bugt_software.php';
			}

			if ($list=='Software and Licensing Budget Form') {
			//include 'bugt_software.php';
			include 'auth_budg_general.php';
			}
			
			if ($list=='Hardware Budget') {
			include 'bugt_hardware.php';
				
			}
			
			if ($list=='Hardware Budget Form') {
			//include 'auth_budghard.php';
			include 'auth_budg_general.php';
			}
			
			if ($list=='Special Projects') {
			include 'bugt_sproject.php';
			}
			
			if ($list=='Special Projects Form') {
			//include 'bugt_sproject.php';
			include 'auth_budg_general.php';
			}
			
			if ($list=='Budget Edit') {
			include 'budg_edit.php';
			}
			if ($list=='Budget Edit Form') {
			include 'auth_budg_edit.php';
			}
			if ($list=='Budget Delete') {
			include 'budg_delete.php';
			}
			if ($list=='Budget Delete Form') {
			include 'auth_budg_delete.php';
			}
			
		/*Incident Management */
		
			if ($list=='Create New Ticket') {
			include 'new_tick.php';
			//exit();
			}
			
			if (($list=='Tickets Listing') && ($categ!='Client')) {
			//include 'view_tick.php';
			include 'view_tick.php';
			//exit();
			}
			
			if ($list=='Supports Management') {
			/*include 'sample.php';*/
			include 'view_artisan.php';
			//exit();
			}
			
			if ($list=='Ticket Tracking') {
			/*include 'sample.php';*/
			/*include 'update_tick.php';*/
			include 'trac_tick.php';
			//exit();
			}
			
			/*Network Settings */
		
			if ($list=='Network Settings') {
			include '../settings/index.php';
			}
			
			if ($list=='Network Settings Form') {
			include '../settings/net_config.php';
			}
			
			/*Department Settings */
		
			if ($list=='Department Settings') {
			include '../settings/department.php';
			}
			
			if ($list=='Department Settings Form') {
			include '../settings/auth_department.php';
			}
			
			/*Privilege Settings */
		
			if ($list=='Privilege Settings') {
			include '../settings/acct_prvg_levels.php';
			}
			
			if ($list=='Privilege Settings Form') {
			include '../settings/auth_acct_prvg_levels.php';
			}
			
			/*User Settings */
		
			if ($list=='Users Settings') {
			include '../application/signup.php';
			}
			
			if ($list=='Users Settings Form') {
			include '../application/auth_signup.php';
			}
			
			if ($list=='Manage User') {
			include 'user_man.php';
			}
			if ($list=='Edit User') {
			include 'edit_user.php';
			}
			if ($list=='Delete User') {
			include 'delete_user.php';
			}
			
			if ($list=='Assurance') {
			include 'quality.php';	
			/*include 'remote_cam_view.php';
			include 'elearn_videos.php';
			include 'temp_answer.php';
			exit();*/
			}
			
			if ($list=='Communication Reports') {
			include 'communications_report.php';
			//include 'temp_answer.php';
			//exit();
			}
			
			if ($list=='Communications') {
			include 'information.php';
			//include 'temp_answer.php';
			//exit();
			}
			
			if ($list == 'Change Management Reports')
			{
				
			include 'change_request_report.php';
			//include '../geo_locator/index.php';
			}

			if ($list == 'Request')
			{
			include 'change.php';
			//include '../geo_locator/index.php';
			}
		

			
			
			if ($list=='Groups Registration') {
			include 'grp_reg.php';
			//exit();
			}
			
			if ($list=='Group Registration Form') {
			include 'auth_grp_reg.php';
			//exit();
			}
			
			if ($list=='Users Registration') {
			include 'user_reg.php';
			//exit();
			}
			
			if ($list=='User Registration Form') {
			include 'auth_user_reg.php';
			//exit();
			}
			
			if ($list=='Business Plans Submission') {
			include 'biz_plan_sub.php';
			//exit();
			}
			
			if ($list=='Business Plan Form') {
			include 'auth_biz_plan_sub.php';
			//exit();
			}
		
			if ($list=='Groups Loan Application') {
			include 'group_loan_app.php';
			//exit();
			}
			
			if ($list=='Group Loan Application Form') {
			include 'auth_group_loan_app.php';
			//exit();
			}
			
			if ($list=='Groups Training Scheme') {
			/*include 'sample.php';*/
			include 'group_training_sch.php';
			//exit();
			}
			
			if ($list=='Group Training Scheme Form') {
			/*include 'sample.php';*/
			include 'auth_group_training_sch.php';
			//exit();
			}
			
			if ($list=='Market Linkages') {
			include 'market_links.php';
			//exit();
			}
			
			if ($list=='Filter by Class') {
			include 'auth_track_class.php';
			//exit();
			}
			
			if ($list=='Filter by Subject') {
			include 'auth_track_subject.php';
			//exit();
			}
			
			if ($list=='No of Rows to Display') {
			include 'auth_track_no_rows.php';
			//exit();
			}
			
			if ($list=='Official Remark') {
			
			include 'auth_remark.php';
			//exit();
			}
			}
					else {
	 echo '<center><img src="../images/worldmap.png" width="60%" style="opacity:0.7;"></center>';
   
	}
	
	?>
				
  </div>
   <div class="w3-quarter">
  </div>
  
 </div>
 

<div class="w3-row-padding">
  <div class="w3-col w3-container m4 l4"></div>
   <div class="w3-col w3-container m5 l5"> </div>
    <div class="w3-col w3-container m5 l5"></div>
     <div class="w3-col w3-container m4 l4"></div>
   </div>
   </div>
<div class="w3-row">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m10 l10"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>
  <div class="w3-row">
 <div class="w3-col w3-container m1 l1"></div>
 <div class="w3-col w3-container m10 l10"></div>
 <div class="w3-col w3-container m1 l1"></div>
 </div>
 
<?php include 'config/footer.php'; ?>