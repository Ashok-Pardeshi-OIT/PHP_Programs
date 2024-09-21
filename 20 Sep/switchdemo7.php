<?php

$number1 = $_POST['num1'];
$number2 = $_POST['num2'];
$ch = $_POST['rbtn'];

switch($ch)
{
    case 1:
        $base = $_POST['num1'];
        $exponent = $_POST['num2'];
        $result = pow($base, $exponent);
        echo "Power = $result";
        break;

    case 2:
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $n = min($a, $b);
        $gcd = 1;
        for($i = 2; $i <= $n; $i++)
        {
            if($a % $i == 0 && $b % $i == 0)
            {
                $gcd = $i;
            }
        }
        $lcm = ($a * $b) / $gcd;
        echo "GCD = $gcd, LCM = $lcm";
        break;
}

?>