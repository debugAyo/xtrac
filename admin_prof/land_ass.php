<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("editor1");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
	
  </head>
  <body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Real Estate Assets</h3>	


<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Land Asset Form" >
<label for "asset-id">Item ID</label>
<input type="text"name="asset_id" placeholder="ASSET ID" >
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>	
<label for "asset-name">Property Name</label>
<input type="text"name="asset_name" placeholder="Property name">
<label for "asset-image">Property Image</label>
<input type="file" class="file" name="ass_pic" >
<label>Property Address</label> 
<input type="text" name="location" placeholder="Exact location including street, city, state, and postal code">
<p><label>Property Type</label> 
<select name="ass_typ" >
	<option>Select Property Type</option>
	<option>Agricultural</option>
	<option>Commercial</option>
	<option>Industrial</option>
	<option>Mixed-Use</option>
	<option>Residential</option>
	<option>Special Purpose</option>
	<option>Transitional</option>
	<option>Vacant</option>
	</select></p>
<label>Ownership Information</label>
<input type="text" name="owner" placeholder="Name of the current owner or entity.">
<label>Vendor Information</label>
<input type="text" name="vendor" placeholder="Name of the seller.">
<label>Purchase Date</label>
<input type="date" name="procdate" class="date" placeholder="When the item was bought.">
<label>Purchase Price</label>
<input type="text" name="purprice" placeholder="Price paid for the item.">
<label>Legal Issues</label> 
<input type="text" name="legal_iss" placeholder="Any ongoing or past legal issues related to the property">
<label>Legal Description</label> 
<textarea rows="4" cols="3" name="descrpt" class="ckeditor">
<table width="100%"><tr><td><b>Lot or Parcel No.</b></td><td><b>Size (sqm)</b></td><td><b>Case ID</b></td><td><b>Legal Team</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'descrpt' );
      CKEDITOR.add            
   </script>
<label>Size and Dimensions</label> 
<input type="text" name="dimension" placeholder="Total area (in acres or square meter) and dimensions of the land">
<label>Buildings/Structures</label>
<textarea name="pro_struct" class="ckeditor">
<table width="100%"><tr><td><b>Type of Structure</b></td><td><b>Size (sqm)</b></td><td><b>No. of floors</b></td><td><b>Age and condition</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'pro_struct' );
      CKEDITOR.add            
   </script>
<label>Utilities</label> 
<textarea name="utility" class="ckeditor">
<table width="100%"><tr><td><b>Water supply</b></td><td><b>Sewerage</b></td><td><b>Electricity</b></td><td><b>Gas</b></td><td><b>HVAC</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'utility' );
      CKEDITOR.add            
   </script>
<label>Landscaping</label> 
<textarea name="landscape" class="ckeditor">
<table width="100%"><tr><td><b>Landscaping Type</b></td><td><b>Irrigation System</b></td><td><b>Outdoor Features</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'landscape' );
      CKEDITOR.add            
   </script>
<label>Interior Fixtures</label>
<textarea name="interior" class="ckeditor">
<table width="100%"><tr><td><b>Kitchen appliances</b></td><td><b>Bathroom fixtures</b></td><td><b>Lighting fixtures</b></td><td><b>Built-in furniture</b></td></tr></table>
</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'interior' );
      CKEDITOR.add            
   </script>
<label>Exterior Fixtures</label>
<textarea name="exterior" class="ckeditor">
<table width="100%"><tr><td><b>Lighting</b></td><td><b>Security Systems</b></td><td><b>Outdoor Features</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'exterior' );
      CKEDITOR.add            
   </script>

<label>Title Deeds</label> 
<input type="file" name="ass_docs" class="file" placeholder="Documentation proving ownership and legal description">
<label>Surveys and Maps</label> 
<input type="file" name="ass_pic" class="file" placeholder="Any land surveys, property maps, or architectural plans">
<label>Permits and Licenses</label> 
<input type="file" name="permit" class="file" placeholder="Records of any building permits, zoning permits, or operational licenses">
<label>Maintenance Records</label> 
<input type="file" name="maint_inst" class="file" placeholder="Logs of repairs and maintenance work performed on the property">
<label>Property Valuation</label> 
<input type="text" name="pro_eval" placeholder="Estimated market value of the land and improvements">
<label>Depreciation</label> 
<input type="text" name="deprecat" placeholder="Information on the depreciation of structures and equipment, if applicable">
<label>Insurance Details</label> 
<input type="file" name="insure_det" class="file" placeholder="Coverage details and policy information for the property">
<label>Environmental Assessments</label> 
<input type="file" name="env_assess" class="file" placeholder="Reports on environmental impact, contamination, or other factors">

<label>Tenancy Details</label>
<textarea name="tenancy_det" class="ckeditor">
<table width="100%"><tr><td><b>Name</b></td><td><b>Phone No.</b></td><td><b>Email</b></td><td><b>Tenancy Rate</b></td></tr></table>

</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'tenancy_det' );
      CKEDITOR.add            
   </script>

<label>Property Management</label> 
<input type="text" name="pro_man" placeholder="Contact details of identities managing the property">
<p><label for "asset-reg">Tenancy Lifespan</label>
<select name="end_life" >
	<option>0 year</option>
	<option>10 year</option>
	<option>20 years</option>
	<option>30 years</option>
	<option>40 years</option>
	<option>50 years</option>
	<option>60 years</option>
	<option>70 years</option>
	<option>80 years</option>
	<option>90 years</option>
	<option>99 years</option>
	
	</select></p>
<p><label for "asset-reg">Occupancy Status</label>
<select name="dev_stat" >
	<option>Select Status</option>
	<option>Active</option>
	<option>Expired</option>
	<option>Renewed</option>
	<option>Terminated</option>
	</select></p>
<input type="hidden" class="w3-text-grey" name="log_usr" readonly value="<?php echo $fname;?>">
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>
</form>