<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor Example</title>
</head>
<body>
   <form action="" method="post">
   Enter the radius of the circle: <input type="number" name="radius" required> <br> <br>
   Enter the height of the cylinder: <input type="number" name="height" required> <br> <br>
   <input type="submit" name="submit" value="Submit">
   </form>
   <?php
   if(isset($_POST['submit']))
   {
    $radius = $_POST['radius'];
    $height = $_POST['height'];

    class Area
    {
        public $r;
        public $a;
        public function __construct($r)
        {
            $this->r = $r;
        }
        public function cal_area()
        {
            $this->a = 3.14*$this->r*$this->r;
            echo "Area" .$this->a;
        }

    }
    class Volume extends Area
    {
        public $h;
        public $v;
        public function __construct($r, $h)
        {
            $this->r = $r;
            $this->h = $h;
        }
        public function cal_vol()
        {

            $this->v = $this->a*$this->h;
            echo "<br>Volume = ".$this->v;

        }

    }

    $v1 = new Volume($radius, $height);
    $v1->cal_area();
    $v1->cal_vol();

   }
   ?>
</body>
</html>