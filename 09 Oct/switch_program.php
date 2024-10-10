<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition, Subtraction, Multiplication, Division</title>
</head>
<body>
<form method="post">
    Enter a number 1<input type="text" name="num1"><br>
    Enter a number 2<input type="text" name="num2"><br>
    <input type="radio" name="r1" value=1>Addition <br>
    <input type="radio" name="r1" value=2>Subtraction <br>
    <input type="radio" name="r1" value=3>Multiplication <br>
    <input type="radio" name="r1" value=4>Division <br>
<br>
    <input type="submit" name="submit">
</form>
<?php

if (isset($_POST['submit'])) 
{
    function add($a, $b)
    {
        $c =  $a + $b;
        echo "Addition of " ."$a". " + "."$b". " = ".$c ."<br>";

    }
    function sub($a, $b)
    {
        $c =  $a / $b;
        echo "Subtraction of " ."$a". " / "."$b". " = ".$c."<br>";

    }
    function mul($a, $b)
    {
        $c =  $a * $b;
        echo "Multiplication of " ."$a". " * "."$b". " = ".$c."<br>";

    }
    function div($a, $b)
    {
        $c =  $a / $b;
        echo "Division of " ."$a". " / "."$b". " = ".$c."<br>";

    }
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch=$_POST['r1'];
		switch($ch)
		{
            case 1: add($a=60, $b=56) ;break;
            case 2: sub($a=60,$b=60) ;break;
            case 3: mul($a=6,$b=6) ;break;
            case 4: div($a=50,$b=100) ;break;
        }

}

?>
</body>
</html>