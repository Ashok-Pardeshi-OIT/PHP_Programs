<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static page</title>
</head>
<body>
<?php
    // No parameters, no return value
    function add1() {
        $a = 5;
        $b = 10;
        $c = $a + $b;
        echo "Addition1 = $c <br>";
    }

    // No parameters, with return value
    function add2() {
        $a = 15;
        $b = 15;
        $c = $a + $b;
        return $c;
    }

    // With parameters, no return value
    function add3($a, $b) {
        $c = $a + $b;
        echo "Addition3 = $c <br>";
    }

    // With parameters, with return value
    function add4($a, $b) {
        $c = $a + $b;
        return $c;
    }

    // Calling the functions
    add1();

    $result2 = add2();
    echo "Addition2 = $result2 <br>";

    add3(20, 30);

    $result4 = add4(25, 35);
    echo "Addition4 = $result4 <br>";
?>
</body>
</html>