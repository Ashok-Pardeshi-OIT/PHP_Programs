<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter array elements (separated by commas) <input type="text" name="arr1"><br>
    <input type="submit" name="submit">
</form>
<?php
// With built-in function 
// if (isset($_POST['submit'])) 
// {
//     $input = $_POST['arr1'];
//     $a = explode(",", $input);
//     $max_value = max($a); // Find the maximum value from the entire array
//     echo "Max from given array: $max_value<br>";
//     $min_value = min($a);
//     echo "Min from given array: $min_value<br>";
// }

// Without built-in function 
if (isset($_POST['submit'])) {
    $input = $_POST['arr1'];
    $a = explode(",", $input);
    
    echo "Given Array elements are: ";
    foreach ($a as $value) {
        echo "$value ";
    }
    echo "<br>";
    
    $max_value = $a[0]; // Initialize max value with the first element
    $min_value = $a[0]; // Initialize min value with the first element
    
    foreach ($a as $value) {
        if ($value > $max_value) {
            $max_value = $value;
        }
        if ($value < $min_value) {
            $min_value = $value;
        }
    }
    
    echo "Max from given array: $max_value<br>";
    echo "Min from given array: $min_value<br>";
}
?>
</body>
</html>