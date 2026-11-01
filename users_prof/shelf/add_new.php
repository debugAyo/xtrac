
<div class="w3-row-padding ">
<div class="w3-threequarter w3-border">

<h3 class="w3-center">Add Books</h3>

<table>
<tr><td><form method="post" action="">
       <button type="submit" class="new-btn w3-green"  name="list" value="New Book">New Book</button></form></td>
  <td><form method="post" action="">
      	 <button type="submit"  class="new-btn w3-blue"  name="list" value="Check-In">Check-In</button></form></td>
    </tr></table>
<div><form action="shelf/auth_add_new.php" method="POST" enctype="multipart/form-data">
<p class="w3-text-green">Add New Book</p>
<input type="text" class="body-parag" name="tagno" placeholder="Book Tag No" >
<input type="text" class="body-parag" name="batch" placeholder="Batch No" >
<input type="text" class="body-parag" name="title" placeholder="Book Title" >
<input type="text" class="body-parag" name="author" placeholder="Author" >
<select class="body-parag" name="categ" class="w3-text-grey">
<option class="w3-text-grey">Select Category</option>
<option class="w3-text-grey">Account</option>
<option class="w3-text-grey">Arts</option>
<option class="w3-text-grey">Business</option>
<option class="w3-text-grey">Education</option>
<option class="w3-text-grey">Fiction</option>
<option class="w3-text-grey">ICT</option>
<option class="w3-text-grey">Language</option>
<option class="w3-text-grey">Law</option>
<option class="w3-text-grey">Literature</option>
<option class="w3-text-grey">Mathematics</option>
<option class="w3-text-grey">Poetry</option>
<option class="w3-text-grey">Religion</option>
<option class="w3-text-grey">Science</option>
</select>
<input type="text" class="body-parag" name="locat" placeholder="Location" >
<input type="date" class="body-parag" name="prodate" placeholder="Date Procured" class="w3-text-grey">
<input type="text" class="body-parag" name="cost" placeholder="Price" >
<input type="text" class="body-parag" name="isbn" placeholder="ISBN" >
<p>
  <input type="file" class="file" aria-label="File browser example" name="pic">
</p>
<select class="body-parag" name="status">
<option class="w3-text-grey">Select Status</option>
<option class="w3-text-grey">On Shelf</option>
</select>

<label for=""></label>

 <p><center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></p></form>
 </div>

  <div class="w3-quarter"></div></div>
