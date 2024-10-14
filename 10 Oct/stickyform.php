<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>
<form method="post">
    Enter array elements (separated by commas) <input type="text" name="rds" value="<?php if(isset($_POST['rds'])) echo $_POST['rds']; ?>"><br>
    <input type="submit" name="submit">
    </form>
    <?php
    if(isset ($_POST['submit']))
    {
        $r = $_POST['rds'];
        $a = explode(",", $r);

        echo "Array elements are:<br>";
        foreach ($a as $value) 
        {
            echo "$value<br>";
        }
    }
    ?>
</body>
</html>