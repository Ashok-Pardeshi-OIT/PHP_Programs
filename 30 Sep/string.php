<?php
$str1 = $_POST['string1'];
$str2 = $_POST['string2'];
$separator = $_POST['separator'];
$op = $_POST['op'];
switch($op)
{
    case '1':
        if(strcasecmp($str1, $str2) == 0)
        {
          echo  "Both Strings are equal";
        }
        else if (strcasecmp($str1, $str2) > 0)
        {
            echo "String 1 is greater than String 2";
        }
        else
        {
            echo "String 1 is smaller than String 2";
        }

    break;

    case 2:
        $n = str_word_count($str1);
        echo  "Number of words in String 1 is $n";
    break;

    case 3:
        $a = str_split($str1);
        foreach ($a as $w)
            echo "$w<br>";
    break;

    case 4:
        $s = strcspn($str1, $str2);
        echo "The length of the initial segment of string 1 not containing any characters from string 2 is: " . $s;

    break;

    case 5:
        // explode(separator,string,limit)
       // Split the string $str1 into an array using the explode function
       // explode() function
       $array = explode($separator, $str1);
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            break;
    // The issue you’re encountering is due to the way you’re trying to print the array. In PHP, you cannot directly echo an array because it will result in the “Array to string conversion” warning. Instead, you should use print_r or var_dump to display the contents of the array

    case 6:
        // another way to print without array 
        $array = explode($separator, $str1);
        foreach($array as $b)
        echo $b."<br>";
    break;

    case 7:
        // implode() function:
        // The implode() function returns a string concatenated with the elements of an array.
        // implode(separator,array)
        $array = explode(" ", $str1);
        echo implode($separator, $array);
        break;

    

    default:
        echo "Invalid operation selected.";
        break;



}
?>