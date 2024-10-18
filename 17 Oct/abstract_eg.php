<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Volume  of a Sphere, Cylinder and Cone</title>
</head>
<body>
    <form action="" method="post">
        Enter radius : <input type="text" name="radius"> <br>
        Enter  height : <input type="text" name="height"> <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    define ('PI', 3.14);
    if (isset($_POST['submit'])) 
    {
        $radius = $_POST['radius'];
        $height =  $_POST['height'];

        abstract  class Shape
        {
            public $radius;
            public $height;

            abstract function calc_area($r, $h);
            abstract function calc_vol($r, $h);
        }

        class sphere extends Shape
        {
            function calc_area($r, $h)
            {
                return 4 * PI * $r  * $r;
            }
            function  calc_vol($r, $h)
            {
                return (4/3) * PI * $r * $r * $r;
            }

        }
        class cylinder extends Shape
        {
            function calc_area($r, $h)
            {
                return  2 * PI * $r * ($r + $h);
            }
            function  calc_vol($r, $h)
            {
                return PI * $r * $r * $h;
            }

        }

        class cone extends Shape
        {
            function calc_area($r, $h)
            {
                return  0.5* $r * $r + $h;
            }

            function calc_vol($r, $h)
            {
                return $r * $r * $r * $h;
            }

        }

        $r = $_POST['radius'];
        $h = $_POST['height'];

        $ob = new cone();
        echo "Area of cone is ".$ob->calc_area($r, $h);
        echo "<br>";

        echo  "Volume of cone is ".$ob->calc_vol($r, $h);
        echo "<br>";

        $ob =  new cylinder();
        echo  "Area of cylinder is ".$ob->calc_area($r, $h);
        echo "<br>";

        echo  "Volume of cylinder is ".$ob->calc_vol($r, $h);
        echo "<br>";

        $ob = new sphere();
        echo "Area of sphere is ".$ob->calc_area($r, $h);
        echo "<br>";

        echo "Volume of sphere is ".$ob->calc_vol($r, $h);
        echo "<br>";

    }

    ?>
</body>
</html>