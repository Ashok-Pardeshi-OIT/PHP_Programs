<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter array elements (separated by commas) <input type="text" name="rds"><br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) 
{
    $r = $_POST['rds'];
    $a = explode(",", $r);
    $sum = 0;
    echo "Array elements are:<br>";
    foreach ($a as $value) 
    {
        $sum = $sum+(int)$value; // Convert to integer
        echo "$value<br>"; // Print the integer value
    }
    echo "Sum = $sum<br>";
    echo "<br>Reverse Array elements are:<br>";
    for ($i = count($a) - 1; $i >= 0; $i--) 
    {
        echo "$a[$i]<br>";
    }

    echo"Max array element are:<br><br>";
}              
?>

</body>
</html>