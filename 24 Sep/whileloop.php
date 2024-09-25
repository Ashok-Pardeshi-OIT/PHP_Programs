<?php

$number = $_POST['num'];

$ch = $_POST['rbtn'];

switch($ch)
{
    case 1 :    
        $sum = 0;
        $originalNumber = $number; // Store the original number
        
        while ($number > 0) {
            $n1 = $number % 10;
            $number = intval($number / 10);
            $sum += $n1;
        }
        
        while ($sum > 9) {
            $number = $sum;
            $sum = 0;
            while ($number > 0) {
                $n1 = $number % 10;
                $number = intval($number / 10);
                $sum += $n1;
            }
        }
        
        if ($sum == 1) {
            echo "$originalNumber is a magic number";
        } else {
            echo "$originalNumber is not a magic number";
        }

        break;
        

        case 2:
            $i=1;
            while($i<=10)
            {
                $f1=$number*$i;
                echo "<br>$number*$i=$f1";;
                $i++;
            }
        break;

        case 3:
            $sum=0;
            while($number>0)
            {
                $n1=$number%10;
                $number = intval($number/10);
                $sum=$sum+$n1;
            }
                echo"Sum of digit = $sum"; 
        break;

        case 4:
            $sum=0;
            while($number>0)
            { 
              $n1=$number%10;
              $number=intval($number/10);
              $sum=$sum*10+$n1;
            }
            echo "Reverse number = $sum"; 
        break;
        
        case 5:
            $sum=0;
            $originalNumber=$number;
            while($number>0)
            {
                $n1=$number%10;
                $number=intval($number/10);
                $sum=$sum+($n1*$n1*$n1);

            }
            if($originalNumber==$sum)
            {
                echo "$originalNumber is Armstrong number";
            }
            else
            {
               echo "$originalNumber is not Armstrong number";
            }
        break;

        case 6:
            $sum=0;
            $originalNumber=$number;
            while($number>0)
            {
                $n1=$number%10;
                $number =intval($number/10);
                $sum=($sum*10)+$n1;
            }
            if($originalNumber==$sum)
            {
                echo "$originalNumber is Palindrome number";
            }
            else
            {
                echo "$originalNumber is not Palindrome number";
            }
        break;

        case 7:
            // Sum of first and last digit:
            $sum = 0;
            // find $lastDigit
            $lastDigit = $number % 10;
            // find $firstDigit
            while ($number >= 10) 
            {
                $number = intval($number/10);
            }
            $firstDigit = $number;
            
            $sum = $firstDigit + $lastDigit;
            echo  "Sum of first and last digit = $sum";
        break;

        case 8:
            // count no of odd digit ,even digit,Zero digit
            $zero=0;
            $even=0;
            $odd=0;
            while($number>0)
            {
                $n1=$number%10;
                $number=intval($number/10);
                if($n1==0)
                $zero++;
                else if($n1%2==0)
                $even++;
                else
                $odd++;
            }
            echo"<br>No of Zero digit =$zero";
            echo"<br>No of Even digit =$even";
            echo"<br>No of Odd digit =$odd";

        break;

        case 9:
            // count no of digit in number
            $count=0;
            while($number>0)
            {
                $count++;
                $number=intval($number/10);
            }
            echo"<br>No of digit in number =$count";
        break;

        case 10:
            // count no of prime digit
            $prime=0;
            $originalNumber=$number;
            while($originalNumber>0)
            {
                $n1=$originalNumber%10;
                $originalNumber=intval($originalNumber/10);
                if($n1>1)
                {
                    $count=0;
                    for($i=2;$i<$n1;$i++)
                    {
                        if($n1%$i==0)
                        $count++;
                    }
                    if($count==0)
                    $prime++;
                }
            }
            echo "<br>No of prime digit = $prime";
        break;

        case 11:
            // i/p 123
            // o/p one two three
            $sum=0;
            while($number>0)//123
            {
                $n1=$number%10;
                $number=intval($number/10);
                $sum=$sum*10+$n1;
            }
            $number=$sum;//321
            while($number>0)//321
            {
                $n1=$number%10;
                $number=intval($number/10);
                switch($n1)
                {
                    case 0:echo"Zero ";break;
                    case 1:echo"One ";break;
                    case 2:echo"Two ";break;
                    case 3:echo"Three ";break;
                    case 4:echo"Four ";break;
                    case 5:echo"Five ";break;
                    case 6:echo"Six  ";break;
                    case 7:echo"Seven ";break;
                    case 8:echo"Eight ";break;
                    case 9:echo"Nine ";break;
                }
            }
        break;

        case 12:
            // Strong or Krishnmurthy number or not
            $sum=0;
            $originalNumber=$number;                      //145
            while($number>0)                             //145>0               14>0         1>0
            {
                $f1=1;
                $n1=$number%10;                       //5                   //4            //1
                $number=intval($number/10);          //14                  //1            //0

                for($i=$n1;$i>1;$i--)
                {
                    $f1=$f1*$i;                  //120                    //24          //1
                }
                $sum=$sum+$f1;                  ///120                  // 144        //145
            }
            if($originalNumber==$sum)
            {
                echo "The number $originalNumber is a strong number";
            }
            else
            {
                echo "The number $originalNumber is not a strong number";
            }
        break;

        case 13:
            // Disarium number or not
            $sum = 0;
            $originalNumber = $number; // 135
            $numberOfDigits = strlen((string)$number);
            $tempNumber = $number;
            
            while ($tempNumber > 0) {
                $n1 = $tempNumber % 10; // Get the last digit
                $sum += pow($n1, $numberOfDigits); // Raise the digit to the power of the number of digits
                $tempNumber = intval($tempNumber / 10); // Remove the last digit
                $numberOfDigits--; // Decrease the power for the next digit
            }
            
            if ($sum == $originalNumber) {
                echo "The number $originalNumber is a Disarium number";
            } else {
                echo "The number $originalNumber is not a Disarium number";
            }

        break;

        case 14:
            // Kaprekar's routine or not
            $sum = 0;
            $originalNumber = $number; // 45
            $numberOfDigits=0;
            $tempNumber = $number;
            $count = 0;
            $flag = 0;
            while ($tempNumber > 0) {
                $n1 = $tempNumber % 10; // Get the last digit
                $sum += pow($n1, $numberOfDigits); // Raise the digit to the power
                $tempNumber = intval($tempNumber / 10); // Remove the last digit
                $numberOfDigits--; // Decrease the power for the next digit
                $count++;
                }
                $tempNumber = $number;
                $tempNumber = str_split($tempNumber);
                sort($tempNumber);
                $tempNumber = implode('', $tempNumber);
                $tempNumber = (int)$tempNumber;
                $sum2 = 0;
                $numberOfDigits = strlen((string)$number);
                $tempNumber2 = $number;
                while ($tempNumber2 > 0) {
                    $n1 = $tempNumber2 % 10; // Get the last digit
                    $sum2 += pow($n1, $numberOfDigits); // Raise the digit to the
                    $tempNumber2 = intval($tempNumber2 / 10); // Remove the last digit
                    $numberOfDigits--; // Decrease the power for the next digit
                    }
                    if ($sum == $number && $sum2 == $number) {
                        echo "The number $originalNumber is a Kaprekar's number";
                        } else {
                            echo "The number $originalNumber is not a Kaprekar's number";
                            }
        break;

        case 15:
            // Magic number or not
            $sum = 0;
            $originalNumber = $number; // Store the original number
            
            while ($number > 0) {
                $n1 = $number % 10;
                $number = intval($number / 10);
                $sum += $n1;
            }
            
            while ($sum > 9) {
                $number = $sum;
                $sum = 0;
                while ($number > 0) {
                    $n1 = $number % 10;
                    $number = intval($number / 10);
                    $sum += $n1;
                }
            }
            
            if ($sum == 1) {
                echo "$originalNumber is a magic number";
            } else {
                echo "$originalNumber is not a magic number";
            }

            
    

        
        
}
?>