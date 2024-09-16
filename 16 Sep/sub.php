<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
        $a=$_POST['nm1'];
        $b=$_POST['nm2'];
        $c=$_POST['nm3'];
        $d=$_POST['nm4'];
        $e=$a-$b-$c-$d;
        echo"Subtraction = $e";
    ?>
    </h1>
</body>
</html>