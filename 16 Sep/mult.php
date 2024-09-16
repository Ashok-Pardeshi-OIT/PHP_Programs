<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Page</title>
</head>
<body>
    <h1>
     <?php
        $a=$_POST['nm1'];
        $b=$_POST['nm2'];
        $c=$a*$b;
        echo"Multiplication = $c";
    ?>
    </h1>
</body>
</html>