<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_Functions</title>
</head>
<body>
    <form method="post" action="">
        <label for="array1">Array 1 (format: key1=value1,key2=value2,...):</label><br>
        <input type="text" id="array1" name="array1"><br><br>
        <label for="array2">Array 2 (format: key1=value1,key2=value2,...):</label><br>
        <input type="text" id="array2" name="array2"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array1 = array();
        $array2 = array();

        // Convert input strings to arrays
        parse_str(str_replace(",", "&", $_POST['array1']), $array1);
        parse_str(str_replace(",", "&", $_POST['array2']), $array2);

        // Find the difference between the keys
        $diff = array_diff_key($array1, $array2);

        echo "Difference between two arrays is:<br>";
        print_r($diff);
    }
    ?>
</body>
</html>

