<!DOCTYPE html>
<html>
<body>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(15, 0);
} catch(Exception $e) {
  echo "<br>"."Unable to divide.";
}
finally{
   echo "<br>"."Proceess complete.";
}
echo "<br>"."Rest of Code";
?>

</body>
</html>