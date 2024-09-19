<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$ch=$_GET['choice'];

switch($ch)
{
    case 1:
        if($a>$b && $a<$c)
        {
            echo" $a is between $b & $c";
        }
        else 
        {
            echo" $a is not  between $b & $c";
        }
    break;

    case 2:
        if ($a < $b && $a < $c) 
        {
            echo "$a is min";
        } elseif ($b < $a && $b < $c) 
        {
            echo "$b is min";
        } elseif ($c < $a && $c < $b) 
        {
            echo "$c is min";
        } elseif ($a == $b && $a < $c)
        {
            echo "$a & $b is min & equals";
        } elseif ($a == $c && $c < $b) 
        {
            echo "$a & $c is min & equals";
        } elseif ($c == $b && $b < $a) 
        {
            echo "$c & $b is min & equals";
        } elseif ($a == $b && $a == $c) 
        {
            echo "All are equals";
        } 
    break;

    case 3:
        if ($a > $b && $a > $c) 
        {
            echo "$a is max";
        } elseif ($b > $a && $b > $c) 
        {
            echo "$b is max";
        } elseif ($c > $a && $c > $b) 
        {
            echo "$c is max";
        } elseif ($a == $b && $a > $c)
        {
            echo "$a & $b is max & equals";
        } elseif ($a == $c && $c > $b) 
        {
            echo "$a & $c is max & equals";
        } elseif ($c == $b && $b > $a) 
        {
            echo "$c & $b is max & equals";
        } elseif ($a == $b && $a == $c) 
        {
            echo "All are equals";
        } 
    break;

    case 4:
        $a = $_GET['num1'];
        $m1 = $a;
        $b = $_GET['num2'];
        $m2 = $b;
        $c = $_GET['num3'];
        $m3 = $c;
        
        $total = $m1 + $m2 + $m3;
        $per = $total / 3;
        echo "Total = $total <br>Per = $per<br>";

        if ($per >= 70 && $per <= 100) 
        {
            echo "Distinction";
        } elseif ($per >= 60 && $per < 70) 
        {
            echo "First Class";
        } elseif ($per >= 55 && $per < 60) 
        {
            echo "Higher Second Class";
        } elseif ($per >= 50 && $per < 55) 
        {
            echo "Second Class";
        } elseif ($per >= 40 && $per < 50)  
        {
            echo "Pass";
        } elseif ($per >= 35 && $per < 40) 
        {
            echo "ATKT";
        } else 
        {
        echo "Fail";
        }

    break;

    case  5:
        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
            if ($a == $b && $b == $c) {
                echo "Equilateral triangle";
            }
            elseif (($a * $a) + ($b * $b) == ($c * $c) || ($b * $b) + ($c * $c) == ($a * $a) || ($c * $c) + ($a * $a) == ($b * $b)) {
                echo "Right angled triangle";
            }
            elseif ($a == $b || $b == $c || $c == $a) {
                echo "Isosceles triangle";
            } else {
                echo "Scalene triangle";
            }
        } else {
            echo "Not a triangle";
        }
    break;

    case 6:
        $a = $wt=$_GET['num1'];
        $b = $age=$_GET['num2'];
        $c = $hb = $_GET['num3'];
        if($wt>=55)
        {
            if($age>=18)
            {
                if($hb>=11)
                {
                    echo"eligible for blood donation";
                }
                else
                {
                    echo"Not eligible for blood donation";
                }
            }
            else
            {
                echo"age is not valid";
            }
        }
        else
        {
            echo"weight is not valid";
        }

    break;

    case 7:
        

}
?>