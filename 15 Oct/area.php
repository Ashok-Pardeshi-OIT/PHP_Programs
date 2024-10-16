<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Circle</title>

</head>
<body>
    <form action="" method="post">
        Enter the radius of the circle: <input type="number" name="radius" required> <br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $radius = $_POST['radius'];
        class Area 
        {
            public $r;
            public $a;
            public function accept($r) 
            {
                $this->r = $r; 
            }
            public function cal_area() 
            {
                $this->a = 3.14 * $this->r * $this->r; 
                return $this->a;
            }
        }
        $v1 = new Area();
        $v1->accept($radius);
        $a = $v1->cal_area();
        echo "The area of the circle with radius $radius is $a.";
    }
    ?>
</body>
</html>
