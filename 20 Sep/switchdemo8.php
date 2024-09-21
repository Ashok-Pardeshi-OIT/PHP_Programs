<?php

$number = $_POST['num'];

$ch = $_POST['rbtn'];

switch($ch)
{
    case 1:
        for($i=1;$i<=intval($number/2);$i++)
        {
            if($number%$i==0)
            {
                echo"$i   ";
            }
        }
    break;   

    case 2:
        $flag=0;

        for($i=1;$i<intval($number/2);$i++)
        {
            if($number== ($i *($i+1)))
            {
                $flag=1;
                break;
            }
        }
        if($flag==1)
        {
            echo "$number is pronic  number";

        }else{
            echo "$number is not pronic number";
        }
    break;


    case 3:
        $div = 0;

        for ($i = 2; $i <= intval($number / 2); $i++) 
        {
            if ($number % $i == 0) 
            {
                $div = 1;
                break;
            }
        }

        if ($div == 0 && $number > 1) 
        {
            echo "$number is a prime number";
        }
        else
        {
            echo "$number is not a prime number";
        }

    break;      
    
    case 4:
        $sum=0;

        for($i=1;$i<=intval($number/2);$i++)
        {
            if($number%$i== 0)
            {
                $sum=$sum+$i;
            }
        }
        if($sum==$number)
        {
            echo "$number is a perfect number";
        }
        else
        {
            echo "$number is not a perfect number";
        }

    break;

    case 5:
        $f1=0;
        $f2=1;
        if($number<=0)
        {
           echo "$number is not a fibonacci number";
        }
        else if($number==1)
        {
            echo "$number is a fibonacci number";
        }
        else
        {
            echo"Fibonacci Series is $number: $f1  $f2 ";
            for( $i=3; $i<=$number; $i++)
            {
                $f3=$f1+$f2;
                echo "$f3  ";
                $f1=$f2;
                $f2=$f3;
            }
        }
    break;



}

?>