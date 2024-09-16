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
        $e=$_POST['nm5'];
        $f=$a+$b+$c+$d+$e;
        echo"Addition = $f";
    ?>
    </h1>
</body>
</html>