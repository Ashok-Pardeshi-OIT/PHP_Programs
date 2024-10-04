<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self processing</title>
</head>
<body>
    <form  method="post">
     Enter Radius <input type ="text" name="rds"><br>
     <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $r=$_POST['rds'];
            $a=3.14*$r*$r;
            echo"<h1>Area of circle =$a";
        }
    ?>
</body>
</html>