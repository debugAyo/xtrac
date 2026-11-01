
<div class="w3-row-padding">
<div class="w3-threequarter w3-border">

<h3 class="w3-center">Add Books</h3>

<table>
<tr><td><form method="post" action="">
       <button type="submit" class="new-btn w3-green"  name="list" value="New Book">New Book</button></form></td>
  <td><form method="post" action="">
      	 <button type="submit"  class="new-btn w3-blue"  name="list" value="Check-In">Check-In</button></form></td>
    </tr></table>
<div class=""><form action="shelf/auth_check_in.php" method="POST">
<p class="w3-text-blue">Add Check-Ins</p>
<input type="text" class="body-parag" name="pin" placeholder="Visitor's PIN" >
<input type="text" class="body-parag" name="tagno" placeholder="Book's Tag No" >
<label for="Date" class="w3-text-grey">Check-In Date</label>
<input type="date" name="chkin_date" class="w3-text-grey" value="">
<select class="body-parag" name="status">
<option class="w3-text-grey">Select Status</option>
<option class="w3-text-grey" value="On Shelf">Checked In</option>
</select>


<label for=""></label>

 <p><center><input type="submit" name="submit" value="Submit" class="s4-btn"><input type="reset" name="reset" value="Cancel" class="s4-btn"></center></p></form>
 </div>

  <div class="w3-quarter"></div></div>
