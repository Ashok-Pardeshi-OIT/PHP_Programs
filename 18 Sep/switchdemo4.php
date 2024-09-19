<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$ch=$_GET['rbtn'];

switch($ch)
{
    case 1:
        if($a>$b)
        {
            echo"$a is max";
        }
        else if($a<$b)
        {
            echo"$b is max";
        }
        else
        {
            echo"Equal";
        }

    break;

    case 2:
        $a = $cp=$_GET['num1'];
        $b = $sp=$_GET['num2'];

        if($cp>$sp)
        {
            $loss=$cp-$sp;
            echo"Loss=$loss";
        }
        else if($sp>$cp)
        {
            $profit=$sp-$cp;
            echo"Profit=$profit";
        }
        else
        {
            echo"no profit no loss";
        }
    break;

    case 3:
        $a = $x=$_GET['num1'];
        $b = $y=$_GET['num2'];
        if($x>0 && $y>0)
        {
            echo"$x & $y in First Quadrant";
        }
        else if($x<0 && $y>0)
        {
            echo"$x & $y in Second Quadrant";
        }
        else if($x<0 && $y<0)
        {
            echo"$x & $y in Third Quadrant";
        }
        else if($x>0 && $y<0)
        {
            echo"$x & $y in Fourth Quadrant";
        }
        else if($x>0 && $y==0)
        {
            echo"$x  in +x axis";
        }
        else if($x<0 && $y==0)
        {
            echo"$x  in -x axis";
        }
        else if($x==0 && $y>0)
        {
            echo"$y  in +y axis";
        }
        else if($x==0 && $y<0)
        {
            echo"$y  in -y axis";
        }
        else
        {
        	echo"Origin";
        }


}

?>