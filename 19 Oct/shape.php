<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="#" method="post">
    Enter radius : <input type="text" name="radius"> <br>
    Enter  height : <input type="text" name="height"> <br>
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    define ('PI', 3.14);
    if (isset($_POST['submit'])) 
    {
        $r = $_POST['radius'];
        $h =  $_POST['height'];
        interface shape
        {
            function area($r,$h);
            function vol($r,$h);
        }
        class cylinder implements shape
        {
            function area($r,$h)
            {
                $area = 2*PI*$r*($r+$h);
                echo "<h3>The area of cylinder is :$area</h3>";
            }
            function vol($r,$h)
            {
                $vol = PI*$r*$r*$h;
                echo "<h3>The volume of cylinder is :$vol</h3>";
            }
        }
        $c = new cylinder;
        $c->area($r,$h);
        $c->vol($r,$h);

    }
    ?>
    
</body>
</html>