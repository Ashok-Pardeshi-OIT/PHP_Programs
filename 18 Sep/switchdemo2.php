<h1>
<?php
    $num=$_GET['val'];
    $ch=$_GET['rbtn'];
    switch($ch)
    {
        case 1:
            if($num%2==0)
            {
                echo "$num is even number";
            }
            else
            {
                echo "$num is odd number";
            }
        break;

        case 2:
            if($num%17==0)
            {
                echo "Divisible by 17";
            }
            else
            {
                echo "Not divisible by 17";
            }
        break;

        case 3:
            if($num%5==0 && $num%7==0)
            {
            echo"$num is divisible by 5 and 7";
            }
            else
            {
            echo"$num is not divisible by 5 and 7";
            }   
        break;

        case 4:
            if($num%5==0 || $num%7==0)
            {
            echo"$num is divisible by 5 or 7";
            }
            else
            {
            echo"$num is not divisible by 5 or 7";
            }   
        break;

        case 5:
            if($num%4==0)
            {
                echo"$num is leap year";
            }
            else
            {
                echo"$num is not leap year";
            }
        break;

        case 6:
            if($num>0)
            {
                echo"$num is positive number";
            }
            else if($num<0)
            {
                echo"$num is negative number";
            }
            else
            {
                echo"$num is Zero number";
            }
        break;

        case 7:
            $num = $_GET['val'];
            $unit = $num; // separate variable for unit
            
            if ($unit <= 100) {
                $ElectricityCharge = $unit * 3.44;
                echo "Electricity charge : $ElectricityCharge<br>";
            } elseif ($unit >= 101 && $unit <= 300) {
                $ElectricityCharge = $unit * 7.34;
                echo "Electricity charge : $ElectricityCharge<br>";
            } elseif ($unit >= 301 && $unit <= 500) {
                $ElectricityCharge = $unit * 10.36;
                echo "Electricity charge : $ElectricityCharge<br>";
            } elseif ($unit >= 501 && $unit <= 1000) {
                $ElectricityCharge = $unit * 11.82;
                echo "Electricity charge : $ElectricityCharge<br>";
            } else {
                $ElectricityCharge = $unit * 11.92;
                echo "Electricity charge : $ElectricityCharge<br>";
            }
            
            $UC = $unit * 1.38;
            $EC = ((102 + $ElectricityCharge + $UC) * 0.16);
            $total = 102 + $ElectricityCharge + $UC + $EC;
            
            echo "$unit Charge = $UC<br>";
            echo "Tax = $EC<br>";
            echo "Total bill = $total<br>";

        break;

            // If you input 100, here's what the output would be:
            // Electricity charge: 344 (since 100 units * 3.44)
            // $unit Charge: 138 (since 100 units * 1.38)
            // Tax: 93.44 (since (102 + 344 + 138) * 0.16)
            // Total bill: 683.84 (since 102 + 344 + 138 + 93.44)

            // output:
            // Electricity charge : 344
            // 100 Charge = 138
            // Tax = 93.44
            // Total bill = 677.44
            
        case 8:
            $num = $_GET['val'];
            $age = $num; // separate variable for age

            if($age>=18)
            {
                echo "You are eligible for voting";
            }
            else
            {
                echo "You are not eligible for voting";
            }
        break;

        case 9:
            $num=$_GET['val'];
            $amt=$num; // separate variable for amount
        
            if($amt<1000)
            {
                echo" NO disc";
            }
            else if($amt>=1000 && $amt<2000)
            {
                $disc=$amt*0.05;
                $total=$amt-$disc;
                echo"Discounded Amount=$disc<br>Total=$total";
            }
            else if($amt>=2000 && $amt<5000)
            {
                $disc=$amt*0.07;
                $total=$amt-$disc;
                echo"Discounded Amount=$disc<br>Total=$total";
            }
            else 
            {
                $disc=$amt*0.10;
                $total=$amt-$disc;
                echo"Discounded Amount=$disc<br>Total=$total";
            }
        break;

        case 10:
            $num=$_GET['val'];
            $pin=$num; // separate variable for pin number

            if($pin==1234)
            {
                echo"PIN is correct";
            } 
            else
            {
                echo"PIN is incorrect";
            }     

    }
?>
</h1>