<?php

$number = $_POST['num'];
$ch = $_POST['rbtn'];

switch($ch)
{
    case 1:
        $f1=1;
        for($i=$number; $i>1; $i--)
        {
            $f1=$f1*$i;
         }
        echo"Factorial=$f1";
    break;

    case 2:
        for($i=1;$i<=10;$i++)
        {
            $f1=$number*$i;
            echo"<br>$number*$i=$f1";
        }
    break;

    case 3:
        function multiply($a, $b) 
        {
          $result = 0;
          for ($i = 0; $i < $b; $i++) 
          {
            $result += $a;
          }
        return $result;
        }
        for ($i = 1; $i <= 10; $i++) 
        {
          $f1 = multiply($number, $i);
          echo "<br>$number * $i = $f1";
        }
    break;

  

    case 4:
        echo"<br> Even <br>";
        for($i=0; $i<=$number; $i=$i+2)
        {
            echo "$i    ";
        }
    break;

    case 5:
        echo "<br> Odd <br>";
        for ($i = 1; $i <= $number; $i++) {
            if ($i % 2 != 0) {
                echo "$i    ";
            }
        }
        break;

    case 6:
        $sum=0;
        for($i=1;$i<=$number;$i++)
        {
           $sum=$sum+$i;
        }

        echo"$number number sum is $sum";
    break;

    case 7:
        $sum=0;
        for($i=2;$i<=$number;$i=$i+2)
        {
            $sum=$sum+$i;
        }
        echo"Sum Of Even Number is $sum";

    break;

    case 8:
        $sum=0;
        for($i=1;$i<=$number;$i=$i++)
        {
          if($i % 2 != 0)
          {
            $sum=$sum+$i;
          }
        }
        echo"Sum Of Odd Number is $sum";
    break;

}
?>