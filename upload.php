<!DOCTYPE html>
<html>
<body>

<h2>Listings</h2>
<form action="verify.php" method="post" enctype="multipart/form-data">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" required><br><br>
  <label for="lname">Platform</label><br>
  <input type="text" id="lname" name="plt" required><br><br>

   <label for="lname">Description</label><br>
  <textarea  name="desc" required></textarea><br><br>

   <label for="lname">Demographics</label><br>
  <textarea name="dem" required></textarea><br><br>

   <label for="lname">Price</label><br>
  <input type="text" id="lname" name="price" required><br><br>

  <label for="lname">state</label><br>
  <input type="text" id="lname" name="state" required><br><br>

  
  <label for="lname">city</label><br>
  <input type="text" id="lname" name="city" required><br><br>

  <label for="lname">postcode</label><br>
  <input type="text" id="lname" name="postcode" required><br><br>


   <label for="lname">Sub type</label><br>
 <select name="subtype" required>
  <option value="Per week">Per week</option>
  <option value="Per month">Per month</option>
  <option value="Per Year">Per Year</option>
</select>
<br><br>
      <label for="lname">Select image to upload:</label><br>
  <input type="file" name="fileToUpload" id="fileToUpload" required>
<br><br>

  <input type="hidden" id="lname" name="upf" value="true">
  <input type="submit" value="Submit">
</form> 




</body>
</html>


