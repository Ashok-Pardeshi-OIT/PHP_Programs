<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <form method="post">
    Enter array elements (separated by commas) <input type="text" name="rds"><br>
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

        // array() Function :
        $cars=array("Volvo","BMW","Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br><br>";


        // array_change_key_case() Function :
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        print_r(array_change_key_case($age,CASE_UPPER));
        echo "<br><br>";


        // array_chunk() Function :
        $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
        print_r(array_chunk($cars,2));
        echo "<br><br>";

    


        // array_column() Function :
        $a = array(
            array(
              'id' => 5698,
              'first_name' => 'Peter',
              'last_name' => 'Griffin',
            ),
            array(
              'id' => 4767,
              'first_name' => 'Ben',
              'last_name' => 'Smith',
            ),
            array(
              'id' => 3809,
              'first_name' => 'Joe',
              'last_name' => 'Doe',
            )
          );
          
        $last_names = array_column($a, 'last_name');
        print_r($last_names);
        echo "<br><br>";


        // array_combine() Function :
        $fruits = array("apple", "banana", "cherry");
        $colors = array("red", "yellow", "pink");
        $combined = array_combine($fruits, $colors);
        print_r($combined);
        echo "<br><br>";

        

        // array_count_values() Function :
        $fruits = array("apple", "banana", "apple", "orange", "banana", "banana");
        $count = array_count_values($fruits);  
        print_r($count);
        echo "<br><br>";


        // array_diff() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("e"=>"red","f"=>"green","g"=>"blue");

        $result=array_diff($a1,$a2);
        echo "<br><br>";
        print_r($result);


        // array_diff_assoc() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("e"=>"red","f"=>"green","g"=>"blue");

        $result=array_diff_assoc($a1,$a2);
        print_r($result);
        echo "<br><br>";



        // array_diff_key() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","c"=>"blue","d"=>"pink");
            
        $result=array_diff_key($a1,$a2);
        print_r($result);
        echo "<br><br>";



        // array_diff_uassoc() Function :
        function myfunction($a,$b)
        {
        if ($a===$b)
            {
              return 0;
            }
              return ($a>$b)?1:-1;
        }
            
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("d"=>"red","b"=>"green","e"=>"blue");
            
        $result=array_diff_uassoc($a1,$a2,"myfunction");
        print_r($result);
        echo "<br><br>";



        // array_diff_ukey() Function :

        function key_compare_func($key1, $key2)
        {
            if ($key1 == $key2)
                return 0;
            else if ($key1 > $key2)
                return 1;
            else
                return -1;
        }
            
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
            
        var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
        echo "<br><br>";


        // array_fill() Function :
        $a1=array_fill(3,4,"red");
        print_r($a1);
        echo "<br><br>";
        


        // array_fill_keys() Function :
        $keys=array("a","b","c","d");
        $a1=array_fill_keys($keys,"blue");
        print_r($a1);
        echo "<br><br>";


        // array_filter() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $result=array_filter($a1, function($value) {
            return $value==="green";
        });
        print_r($result);
        echo "<br><br>";



        // array_flip() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $result=array_flip($a1);
        print_r($result);
        echo "<br><br>";


        
        // array_intersect() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","b"=>"green","e"=>"blue");
        
        $result = array_intersect($a1,$a2);
        print_r($result);
        echo "<br><br>";


        // array_intersect_assoc() Function :
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","b"=>"green","e"=>"blue");

        $result = array_intersect_assoc($a1,$a2);
        print_r($result);
        echo "<br><br>";


    }

    ?>
</body>
</html>
