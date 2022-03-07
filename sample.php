<!DOCTYPE html>
<html>
<body>

<?php
    
function myfunction() {
  $x = 5; // local scope
  $y = 10;
  $z = $x + $y;
  echo "<p>Variable x inside function is: $z</p>";
} 

myfunction(); // call the function
    
//using x outside the function will generate an error
 echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
