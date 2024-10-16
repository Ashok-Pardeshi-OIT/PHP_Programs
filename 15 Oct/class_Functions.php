<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four functions in one class</title>
</head>
<body>
    <?php
     if(isset($_POST['submit']))
     {
        class NumberOperations 
        {
            public $n;

            function __construct($n)
            {
                $this->n = $n;
            }

            // Simple function
            function sumOfDigits()
            {
                $sum = 0;
                $num = $this->n;
                while ($num > 0) 
                {
                    $sum += $num % 10;
                    $num = (int)($num / 10);
                }
                echo "Sum of digits: " . $sum . "<br>";
            }   

            // Parameterized function
            function fibonacci($terms)
            {
                $n1 = 0;
                $n2 = 1;
                $count = 0;
                echo "Fibonacci series: ";
                while ($count < $terms) 
                {
                    echo $n1 . " ";
                    $n3 = $n1 + $n2;
                    $n1 = $n2;
                    $n2 = $n3;
                    $count++;
                }
                echo "<br>";
            }

            // Returning function
            function gcd($a, $b)
            {
                if ($b == 0) 
                {
                    return $a;
                } 
                else 
                {
                    return $this->gcd($b, $a % $b);
                }
            }

            // Simple function
            function isPerfectNumber()
            {
                $sum = 0;
                for ($i = 1; $i < $this->n; $i++) 
                {
                    if ($this->n % $i == 0) 
                    {
                        $sum += $i;
                    }
                }
                if ($sum == $this->n) 
                {
                    echo "Number is a perfect number<br>";
                } 
                else 
                {
                    echo "Number is not a perfect number<br>";
                }
            }
        }

        // Example usage:
        $n = 28; // Example number
        
        $operations = new NumberOperations($n);
        $operations->sumOfDigits(); // Simple function
        $operations->fibonacci(10); // Parameterized function
        echo "GCD of 48 and 18: " . $operations->gcd(48, 18) . "<br>"; // Returning function
        $operations->isPerfectNumber(); // Simple function

     }
    ?>
</body>
</html>