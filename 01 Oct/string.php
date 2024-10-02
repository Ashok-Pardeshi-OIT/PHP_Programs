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
    
    case 8:
        // concatenate string:
        echo "Concatenate String : " . $str1."&nbsp". $str2;
        break;

    case 9:
        // read a string and print the occurences of each character
        $count = array_count_values(str_split($str1));
        foreach ($count as $key => $value) {
            echo "Character: $key, Occurrences: $value<br>";
            }
        break;
    
    case 10:
        // help of dynamically, which will find length of any string Don’t use the STRLEN ( ) function
        $len = 0;
        for ($i = 0; $i < strlen($str1); $i++) 
        {
            $len += 1;
        }
        echo "Length of string is: $len";
        break;
    
    case 11:
        // check whether the given string is palindrome or not
        $b = strrev($str1);
        //To calculate reverse of the given string
        $string_reverse = str_split($b);
        $palin = '';
        // To read string
        foreach($string_reverse as $value)
        {
            $palin = $value;
        }
        //To compare given string and reverse string
        if($str1 == $palin)
        {
            echo "Given String ".$str1." is Palindrome";
        }
        else
        {
            echo "Given String ".$str1." is not Palindrome";
        }
        break;
        
    case 12:
        // Write a program to read ‘n’ names and print the names which are occurred more than once:

        //Converts the string into lowercase
        $str1 = strtolower($str1);
        //Split the string into words using built-in function
        $words = explode(" ", $str1);
        // To print Original string
        echo "Original string: "."</br>";
        echo $str1."</br>";
        echo("Duplicate words in a given string :</br>");
        for($i = 0; $i < count($words); $i++)
        {
            $count = 1;
            for($j = $i+1; $j < count($words); $j++)
            {
                if( $words[$i] == $words[$j])
                {
                    $count++;
                    //Set words[j] to 0 to avoid printing visited word
                    $words[$j] = "0";
                }
            }

                //Displays the duplicate word if count is greater than 1
                if($count > 1 && $words[$i] != "0")
                {
                    echo ($words[$i]);
                    echo ("</br>");
                }
        }
    break;

    case 13:
        if($str1 == $str2)
        {
            echo "Both Strings are same.";
        }
        else
        {
            echo "Both Strings are not same.";
        }
    break;

    

    default:
        echo "Invalid operation selected.";
        break;



}
?>