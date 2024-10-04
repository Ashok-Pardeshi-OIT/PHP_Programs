<?php
$str1 = $_POST['string1'];
$str2 = $_POST['string2'];
$separator = $_POST['separator'];
$op = $_POST['op'];

switch($op)
{
   case 1:
    // program to read a paragraph and a word, delete that word wherever it has occurred
    $words = explode($separator, $str1);
    $newstr = '';
    foreach ($words as $word) 
    {
        if ($word != $str2) 
        {
            $newstr .= $word . $separator;
        }
    }
    $newstr = rtrim($newstr, $separator);
    echo $newstr;
    break;

    case 2:
        // program to print the reverse of the given string
        $str1 = strrev($str1);
        echo "Reverse  of the string is: $str1";
    break;

    case 3:
        // program to find a word and print its position of given string
        $pos = strpos($str1, $str2);
        if ($pos !== false) 
        {
            echo "String '$str2' found in string '$str1' at position $pos.";
        } else 
        {
        echo "String '$str2' not found in string '$str1'";
        }
    break;

    case 4:
        // program to read a string, a substring which is to be replaced and a substring which is to be place and print the modified string
        
        $str = $_POST['string1'];
        $find = $_POST['string2'];
        $replace = $_POST['separator'];
        echo "Given String : ".$str."</br>";
        echo "Modified word : ".$find."</br>";
        echo "Replace word : ".$replace."</br>";

        //To modify the given string
        $sen = str_replace("$find", "$replace", $str);
        echo "The modifed String is: ".$sen;

    


}
?>