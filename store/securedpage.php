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
		  <form action="" method="post"><input type="hidden" name="list" value="Assets Status Chart"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Assets Status Chart</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Technical Analysis"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Technical Analysis</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Budget Dashboard"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Budget Dashboard</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Gap Analysis"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Gap Analysis</button></form>
			   	  
      </div>
    </div>
	
</div>
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
	<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-group fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Requests</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Requisition Form"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Requisition Form</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Requisitions"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Requisitions</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Requisition Status"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Requisition Status</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Requisition Tracking"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-globe" style="font-size:font-size:20px"></i> Requisition Tracking</button></form>
		       	  
      </div>
    </div>
	
</div>
<div class="dropdown" style="width:100%;">
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-group fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Inventory</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Inventory Issuing"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Inventory Issuing</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Issued Inventory"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Issued Inventory</button></form>
     	  
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
    	<button type="submit" name="submit" class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"><i class="fa fa-sitemap fa-fw w3-text-light-green" arial-hidden="true" style="font-size:font-size:20px;"></i> Store Check</button>
			
			<div class="dropdown-content">
   
      <div class="w3-padding-medium w3-white">
          <form action="" method="post"><input type="hidden" name="list" value="Shelf Management"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> Shelf Management</button></form>
		  <form action="" method="post"><input type="hidden" name="list" value="Disposal Management"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-file-video-o" style="font-size:font-size:20px"></i> Disposal Management</button></form>
		   <form action="" method="post"><input type="hidden" name="list" value="New Arrivals"><input type="hidden" name="appcode" value="<?php echo $appcode;?>"><button type="submit" name="submit" class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"><i class="fa fa-cloud" style="font-size:font-size:20px"></i> New Arrivals</button></form>
		   	  
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

			if ($list=='Requisition Form') {
			include 'request_form.php';
			//exit();
			}
			
			if ($list=='Requisition Form Processing') {
			include 'auth_request.php';
			//exit();
			}
			if ($list=='Requisitions') {
			include 'sto_req_det.php';
			//exit();
			}
			if ($list=='Requisition Status') {
			include 'sto_req_stat.php';
			//exit();
			}
			if ($list=='Requisition Tracking') {
			include 'sto_req_track.php';
			//exit();
			}
			if ($list=='Shelf Management') {
			include 'sto_shelf_man.php';
			}
			
			if ($list=='Delete') {
			include 'sto_auth_assdelete.php';
			}
			
			if ($list=='Edit Item') {
			include 'sto_auth_assedit.php';
			}
			
			if ($list=='Disposal Management') {
			include 'sto_parts_prev.php';
			}
			if ($list=='New Arrivals') {
			include 'sto_new_arr.php';
			}
					
			if ($list=='Track') {
			include 'auth_sto_req_track.php';
			//exit();
			}
			
			if ($list=='Search') {
			include 'auth_sto_item_track.php';
			//exit();
			}	

			if ($list=='Inventory Issuing') {
			include 'sto_invent_issu.php';
			//exit();
			}
			if ($list=='Issued Inventory') {
			include 'sto_issu_invent.php';
			//exit();
			}			
			##########################################

		
			if ($list=='Add Item') {
			include '../users_prof/asset_categ.php';
			
			}
			if ($list=='Software Association') {
			include '../users_prof/soft_associative_categ.php';
			
			}
			if ($list=='Software Associative Category') {
			include '../users_prof/software_ass.php';
			
			}
			
			if ($list=='Software Assoc Form') {
			include '../users_prof/auth_software_ass.php';
			
			}
			if ($list=='Parts Association') {
			include '../users_prof/parts_associative_categ.php';
			
			}
			if ($list=='Parts Associative Category') {
			include '../users_prof/parts_ass.php';
			
			}
			if ($list=='Parts Assoc Form') {
			include '../users_prof/auth_parts_ass.php';
			
			}
			
			if ($list=='Invoice Association') {
			include '../users_prof/invoice_associative_categ.php';
			
			}
			if ($list=='Invoice Associative Category') {
			include '../users_prof/invoice_ass.php';
			
			}
			
			if ($list=='Invoice Assoc Form') {
			include '../users_prof/auth_invoice_ass.php';
			
			}
			
			if ($list=='Contract Association') {
			include '../users_prof/contract_associative_categ.php';
			
			}
			
			if ($list=='Contract Associative Category') {
			include '../users_prof/contract_ass.php';
			
			}
		
			if ($list=='Contract Assoc Form') {
			include '../users_prof/auth_contract_ass.php';
			
			}
			
			if ($list=='Add New Asset') {
			include '../users_prof/asset_categ.php';
			
			}

/*These define the different categories of Asset Listing methods*/

			if ($list=='Asset Tracking') {
			include '../users_prof/track_categ.php';
			
			}

			if ($list=='Asset Listing') {
			include '../users_prof/track_categ.php';
			
			}
			
			if ($list=='Asset ID') {
			include '../users_prof/ass_categ_id.php';
			
			}
			if ($list=='Asset Status') {
				include '../users_prof/ass_categ_stat.php';
			}
			if ($list=='Asset Name') {
			include '../users_prof/ass_categ_name.php';
				
			}
			if ($list=='Asset Category') {
			include '../users_prof/ass_categ_typ.php';
			}

			if ($list=='Asset Location') {
			include '../users_prof/ass_categ_locat.php';
				
			}
			if ($list=='Asset Serial No') {
			include '../users_prof/ass_categ_serial.php';
			}
/*Tracking forms will be processed with each of the follwoing commands*/

			if ($list=='Track Asset ID') {
			include 'sto_auth_item_trac.php';
			
			}
			if ($list=='Track Asset Status') {
				include '../users_prof/auth_ass_categ_stat.php';
			}
			if ($list=='Track Asset Name') {
			include '../users_prof/auth_ass_categ_name.php';
				
			}
			if ($list=='Track Asset Category') {
			include '../users_prof/auth_ass_categ_typ.php';
			}

			if ($list=='Track Asset Location') {
			include '../users_prof/auth_ass_categ_locat.php';
				
			}
			if ($list=='Track Asset Serial') {
			include '../users_prof/auth_ass_categ_serial.php';
			}
	
			
			/*Processing Consumable Assets Form */
			
			if ($list=='Consumables') {
			include '../users_prof/consum_ass.php';
			}
			
			if ($list=='Consumables Form') {
			/*include 'auth_sto_consumass.php';*/
			include '../users_prof/auth_consumass.php';
			}
			
			/*Processing Electronics Assets Form */
			
			if ($list=='Electronic Appliances') {
			include '../users_prof/elect_ass.php';
			}
			
			if ($list=='Electronics Asset Form') {
			include '../users_prof/auth_elect_ass.php';
			}
			
			/*Processing Furniture Assets Form */
			
			if ($list=='Furniture') {
			include '../users_prof/furn_ass.php';
			}
			
			if ($list=='Furniture Asset Form') {
			include '../users_prof/auth_furn_ass.php';
			}
			
			/*Processing IT Infrastructure Assets Form */
			
			if ($list=='IT Infrastructure') {
			include '../users_prof/add_item.php';
			}
			
			if ($list=='ICT Asset') {
			include '../users_prof/auth_add_item.php';
			}
			
			/*Processing Land Assets Form */
			
			if ($list=='Real Estate') {
			include '../users_prof/land_ass.php';
			}
			
			if ($list=='Land Asset Form') {
			include '../users_prof/auth_land_ass.php';
			}
			
			/*Processing Plant and Equipment Assets Form */
			
			if ($list=='Plant and Equipment') {
			include '../users_prof/plant_ass.php';
			}
			
			if ($list=='Equipment Asset Form') {
			include '../users_prof/auth_plant_ass.php';
			}
			
			/*Processing Vehicle Assets Form */
			
			if ($list=='Vehicles') {
			include '../users_prof/auto_ass.php';
			}	
			
			if ($list=='Vehicle Asset Form') {
			include '../users_prof/auth_auto_ass.php';
			}

		/* Preview Assets in each category with the commands below */

			if ($list=='View All Assets') {
			//include 'sto_all_item_prev.php';
			//include 'page.php';
			include '../users_prof/all_item_prev.php';
			}
			
			if ($list=='View Assets by Category') {
			include 'sto_asset_categ_prev.php';
			//include 'page.php';
			}
			
			if ($list=='Preview Asset Category') {
			include 'sto_auth_asset_categ_prev.php';
			//include 'page.php';
			
			}
			
			if ($list=='Software Dependencies Preview') {
			include '../users_prof/soft_prev.php';
			}
			if ($list=='Parts Dependencies Preview') {
			include '../users_prof/parts_prev.php';
			}
			if ($list=='Invoice Details Preview') {
			include '../users_prof/invoice_prev.php';
			}
			
			if ($list=='Contract Association Preview') {
			include '../users_prof/contract_prev.php';
			}
			if ($list=='Add New Asset Preview') {
			include '../users_prof/mylisting.php';
			}
			if ($list=='Assets Listing Preview') {
			include '../users_prof/ass_cat_view.php';
		
			}
			
			/*Incident Management */
		
			if ($list=='Create New Ticket') {
			include '../users_prof/new_tick.php';
			//exit();
			}
			
			if (($list=='Tickets Listing') && ($categ!='Client')) {
			//include 'view_tick.php';
			include '../users_prof/view_tick.php';
			//exit();
			}
			
			if ($list=='Supports Management') {
			/*include 'sample.php';*/
			include '../users_prof/view_artisan.php';
			//exit();
			}
			
			if ($list=='Ticket Tracking') {
			/*include 'sample.php';*/
			/*include 'update_tick.php';*/
			include '../users_prof/trac_tick.php';
			//exit();
			}
								
			/*Use these links to generate Graphical Analysis of Data where applicable*/
			if ($list=='Procurement Trends') {
			//include 'plotter/index.php';
			include '../users_prof/plotter.php';
			}
			if ($list=='Assets Status Chart') {
			//include 'plotter/new.php';
			include '../users_prof/new.php';
			}
		
			if ($list=='Technical Analysis') {
			include '../users_prof/tech_analysis.php';
			}
			if ($list=='Gap Analysis') {
			include '../users_prof/gap_analysis.php';
			}
			if ($list=='Budget Dashboard') {
			include '../users_prof/budg_dashboard.php';
			}
			
			
			if ($list=='Project Definition') {
			include 'proj_definition.php';
			//exit();
			}
			
			if ($list=='Project Definition Form') {
			include 'auth_proj_definition.php';
			//exit();
			}
			
			
			if ($list=='Completed Interventions') {
			//include 'complete_interv.php';
			include 'complete_prog.php';
			//exit();
			}
			
			if ($list=='Complete') {
			include 'complete_interv.php';
			
			//exit();Completed Intervention Form
			}
				if ($list=='Completed Intervention Form') {
			include 'auth_complete_interv.php';
			
			//exit();
			}
			
			if ($list=='Ongoing Interventions') {
			include 'ongoing_prog.php';
			//exit();
			}
			
			if ($list=='Ongoing') {
			include 'ongoing_interv.php';
			//exit();
			}
			if ($list=='Ongoing Intervention Form') {
			include 'auth_ongoing_interv.php';
			//exit();
			}
			
			if ($list=='Landscape Analysis') {
			include 'landscape_analysis.php';
			//exit();
			}
			
			if ($list=='Progress Reports') {
			include 'progress_report.php';
			//exit();
			}
			if ($list=='Project ID') {
			/*include 'sample.php';*/
			include 'project_report.php';
			//exit();
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
			if ($list=='Risk Assessment Reports') {
			/*include 'sample.php';*/
			include 'risk_assessment_report.php';
			//exit();
			}
			if ($list=='Assessment') {
			include 'risks.php';
			//include 'exam.php';
			//exit();
			}
			if ($list=='Resource Allocation Reports') {
			include 'resource_allocate_report.php';
			//include 'temp_answer.php';
			//exit();
			}
			
			if ($list=='Resources') {
			include 'resources.php';
			//include 'temp_answer.php';
			//exit();
			}
			
			if ($list=='Quality Assurance Reports') {
			include 'quali_assurance_report.php';
			//include 'elearn_visual.php';
			//exit();
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