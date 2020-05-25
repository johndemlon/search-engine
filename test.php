<?php 
 
$result= $_POST['search'];
$result= strtolower($result);

if (strpos($result, "dropbox") == "true")
header ('Location: http://www.dropbox.com');

if (strpos($result, "amazon") == "true")
header ('Location: http://www.amazon.com');

if (strpos($result, "google") == "true")
header ('Location: http://www.google.com');

if (strpos($result, "ebay") == "true")
header ('Location: http://www.ebay.com');

if (strpos($result, "wikipedia") == "true")
header ('Location: http://www.wikipedia.org');

if (strpos($result, "youtube") == "true")
header ('Location: http://www.youtube.com');

if (strpos($result, "hess toy truck") == "true")
header ('Location: https://hesstoytruck.com');

if (strpos($result, "lm7805") == "true")
header ('Location: http://www.learningaboutelectronics.com/Articles/What-is-a-LM7805-voltage-regulator');

echo "No results found for this search";
?>
<html>
<form method="post"> 
<h1>Product Search</h1>
<label>Enter Product Name  </label>
<input type="text"name="search" id="txtName"/><br><br> 
<input type="submit" name="submit" id="submit" value="Search"/> 
</form> 
</html>