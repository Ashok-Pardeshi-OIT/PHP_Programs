<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four Functions in One Class</title>
</head>
<body>
    <form action="" method="post">
        Enter a number: <input type="text" name="num" value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>"> <br> <br>
        Enter a base for power calculation: <input type="text" name="base" value="<?php if(isset($_POST['base'])) echo $_POST['base']; ?>"> <br><br>
        Enter an exponent for power calculation: <input type="text" name="exponent" value="<?php if(isset($_POST['exponent'])) echo $_POST['exponent']; ?>"> <br><br>
        Enter array elements (comma separated): <input type="text" name="array" value="<?php if(isset($_POST['array'])) echo $_POST['array']; ?>"> <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $n = $_POST['num'];
        $base = $_POST['base'];
        $exponent = $_POST['exponent'];
        $array = explode(',', $_POST['array']);

        class NumberOperations 
        {
            public $n;

            function __construct($n)
            {
                $this->n = $n;
            }

            // Simple function
            function isPalindrome()
            {
                $num = $this->n;
                $rev = strrev($num);
                if ($num == $rev) {
                    echo "Number is a palindrome<br>";
                } else {
                    echo "Number is not a palindrome<br>";
                }
            }

            // Parameterized function
            function calculatePower($base, $exponent)
            {
                $result = pow($base, $exponent);
                echo "$base raised to the power of $exponent is: " . $result . "<br>";
            }

            // Returning function
            function sumOfArray($array)
            {
                return array_sum($array);
            }

            // Simple function
            function isArmstrong()
            {
                $num = $this->n;
                $sum = 0;
                $len = strlen((string)$num);
                while ($num > 0) {
                    $digit = $num % 10;
                    $sum += pow($digit, $len);
                    $num = (int)($num / 10);
                }
                if ($sum == $this->n) {
                    echo "Number is an Armstrong number<br>";
                } else {
                    echo "Number is not an Armstrong number<br>";
                }
            }
        }

        $operations = new NumberOperations($n);

        $operations->isPalindrome(); // Simple function
        $operations->calculatePower($base, $exponent); // Parameterized function
        echo "Sum of array elements: " . $operations->sumOfArray($array) . "<br>"; // Returning function
        $operations->isArmstrong(); // Simple function
    }
    ?>
</body>
</html>
