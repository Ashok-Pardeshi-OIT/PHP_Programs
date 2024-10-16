<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Operations</title>
</head>
<body>
    <form action="" method="post">
        Enter 1 number: <input type="text" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>"> <br> <br>
        Enter 2 number: <input type="text" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>"> <br> <br>
        Enter 3 number: <input type="text" name="num3" value="<?php if(isset($_POST['num3'])) echo $_POST['num3']; ?>"> <br> <br>
        Enter a base for power calculation: <input type="text" name="base" value="<?php if(isset($_POST['base'])) echo $_POST['base']; ?>"> <br><br>
        Enter a string to count vowels: <input type="text" name="vowelString" value="<?php if(isset($_POST['vowelString'])) echo $_POST['vowelString']; ?>"> <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $base = $_POST['base'];
        $vowelString = $_POST['vowelString'];

        class ParaMethodDemo
        {
            public $n, $x;

            function __construct($n, $x = null)
            {
                $this->n = $n;
                $this->x = $x;
            }

            function maxFromTwo($a, $b)
            {
                return ($a > $b) ? $a : $b;
            }

            function factorial()
            {
                $fact = 1;
                for ($i = 1; $i <= $this->n; $i++) {
                    $fact *= $i;
                }
                return $fact;
            }

            function reverse()
            {
                $rev = 0;
                $num = $this->n;
                while ($num > 0) {
                    $rev = $rev * 10 + $num % 10;
                    $num = (int)($num / 10);
                }
                return $rev;
            }

            function isArmstrong()
            {
                $sum = 0;
                $num = $this->n;
                $len = strlen((string)$num);
                while ($num > 0) {
                    $digit = $num % 10;
                    $sum += pow($digit, $len);
                    $num = (int)($num / 10);
                }
                return ($sum == $this->n) ? "Number is Armstrong" : "Number is not Armstrong";
            }

            function isMagic()
            {
                $num = $this->n;
                while ($num > 9) {
                    $sum = 0;
                    while ($num > 0) {
                        $sum += $num % 10;
                        $num = (int)($num / 10);
                    }
                    $num = $sum;
                }
                return ($num == 1) ? "Number is Magic" : "Number is not Magic";
            }

            function maxFromThree($a, $b, $c)
            {
                return max($a, $b, $c);
            }

            function isDisarium()
            {
                $sum = 0;
                $num = $this->n;
                $len = strlen((string)$num);
                while ($num > 0) {
                    $digit = $num % 10;
                    $sum += pow($digit, $len);
                    $num = (int)($num / 10);
                    $len--;
                }
                return ($sum == $this->n) ? "Number is Disarium" : "Number is not Disarium";
            }

            function isPrime()
            {
                if ($this->n <= 1) return "Number is not prime";
                for ($i = 2; $i <= sqrt($this->n); $i++) {
                    if ($this->n % $i == 0) return "Number is not prime";
                }
                return "Number is prime";
            }

            function countVowels($str)
            {
                $vowels = 0;
                $str = strtolower($str);
                for ($i = 0; $i < strlen($str); $i++) {
                    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
                        $vowels++;
                    }
                }
                return $vowels;
            }
        }

        $operations = new ParaMethodDemo($num1, $base);

        echo "Max from 2 numbers ($num1, $num2): " . $operations->maxFromTwo($num1, $num2) . "<br>";
        echo "Factorial of $num1: " . $operations->factorial() . "<br>";
        echo "Reverse of $num1: " . $operations->reverse() . "<br>";
        echo $operations->isArmstrong() . "<br>";
        echo $operations->isMagic() . "<br>";
        echo "Max from 3 numbers ($num1, $num2, $num3): " . $operations->maxFromThree($num1, $num2, $num3) . "<br>";
        echo $operations->isDisarium() . "<br>";
        echo $operations->isPrime() . "<br>";
        echo "Vowels in '$vowelString': " . $operations->countVowels($vowelString) . "<br>";
    }
    ?>
</body>
</html>
