<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamically page</title>
</head>
<body>
    <form method="post">
    <label for="num1">Number 1:</label><input type="text" name="num1" >
    <br><br>
    <label for="num1">Number 2:</label><input type="texft" name="num2">
    <br><br>
    <input type="submit" name="submit">
    </form>

    <?php
       if (isset($_POST['submit'])) 
       {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            // No parameters, no return value
            function add1() {
                global $num1, $num2;
                $c = $num1 + $num2;
                echo "Addition1 = $c <br>";
            }

            // No parameters, with return value
            function add2() {
                global $num1, $num2;
                $c = $num1 + $num2;
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

            add3($num1, $num2);

            $result4 = add4($num1, $num2);
            echo "Addition4 = $result4 <br>";
        }
    ?>
</body>
</html>

</body>
</html>