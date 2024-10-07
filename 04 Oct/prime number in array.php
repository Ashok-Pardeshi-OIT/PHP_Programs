<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter array elements (separated by commas) <input type="text" name="arr1"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) 
    {
        $input = $_POST['arr1'];
        $a = explode(",", $input);

        $is_prime = function($input) 
        {
            if ($input <= 1) 
            {
                return false;
            }
            for ($i = 2; $i < $input; $i++) 
            {
                if ($input % $i == 0) 
                {
                    return false;
                }
            }
        return true;
    };

    $primes = [];
    $non_primes = [];

    foreach ($a as $number) 
    {
        if ($is_prime($number)) 
        {
            $primes[] = $number;
        } 
        else 
        {
            $non_primes[] = $number;
        }
    }

    echo "Prime numbers: " . implode(", ", $primes) . "<br>";
    echo "Non-prime numbers: " . implode(", ", $non_primes) . "<br>";
}

?>
</body>
</html>