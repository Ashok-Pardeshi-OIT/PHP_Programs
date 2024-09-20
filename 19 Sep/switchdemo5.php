<?php

$a=$_POST['num1'];//2
$b=$_POST['num2'];//7
$c=$_POST['num3'];//4
$d=$_POST['num4'];//7
$ch=$_POST['rbtn'];

switch($ch)
	{
	case 1:
		$num=($a*$d)+($b*$c); //(2/7)+(7/4) =(a/b)+(c/d) =(a*d)+(b*c)/(b*d) =(2*7)+(7*4)/(7*7) =14+28/49  =42/49.
		$den=($b*$d);
		echo "Addition = $num/$den";
		break;
	case 2:
		$num=($a*$d)-($b*$c);
		$den=($b*$d);
		echo"Substraction = $num/$den";
		break;
	case 3:
		$num=($a*$c);
		$den=($b*$d);
		echo"Multiplication = $num/$den";
		break;
		default:echo"Invalid choice";
	}
?>