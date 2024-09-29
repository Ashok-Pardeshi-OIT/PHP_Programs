<!-- PHP chop() Function: -->
<!-- 1. The chop() function in PHP is used to remove characters from the end of a string. It removes
characters from the end of the string until it finds a character that is not the specified
character. -->
<!-- 2. The syntax of the chop() function is: chop($string, $char)
 - $string: The string from which characters are to be removed.
 - $char: The character that is to be removed from the end of the string. If not
 specified, it defaults to a space. -->
 <!-- <?php
 // Define a string
$str = "Hello, World! ";
// Use chop() to remove the space from the end of the string
$str = chop($str);
echo $str; // Outputs: "Hello, World!"
?> -->



<!-- PHP rtrim() Function: -->
 <!-- 1. The rtrim() function in PHP is used to remove characters from the end of a
  string. It removes characters from the end of the string until it finds a character that is not the
  specified character. -->
  <!-- 2. The syntax of the rtrim() function is: rtrim($string, $char)
   - $string: The string from which characters are to be removed.
   - $char: The character that is to be removed from the end of the string. If
   not specified, it defaults to a space. -->
   <!-- <?php
    // Define a string
    $str = "Hello, World! ";
    // Use rtrim() to remove the space from the end of the string
    $str = rtrim($str, ' ');
    echo $str; // Outputs: "Hello, World!"
    ?> -->


<!-- PHP chr() Function: -->
 <!-- 1. The chr() function in PHP is used to get the character represented by a number
  in the ASCII table. -->
  <!-- 2. The syntax of the chr() function is: chr($number)
   - $number: The ASCII value of the character. -->
   <!-- <?php
    // Get the character represented by the ASCII value 65
    $char = chr(65);
    echo $char; // Outputs: "A"
    ?> -->
    <!-- 3. The chr() function can also be used to get the ASCII value of a
     character. -->
     <!-- <?php
      // Get the ASCII value of the character 'A'
      $ascii = ord('A');
      echo $ascii; // Outputs: 65
      ?> -->


<!-- PHP crypt() Function: -->
 <!-- 1. The crypt() function in PHP is used to encrypt a string. -->
  <!-- 2. The syntax of the crypt() function is: crypt($string, $salt
   - $string: The string to be encrypted.
   - $salt: The salt to be used for encryption. If not specified, it defaults to
   a random salt. -->
   <!-- <?php
    // Encrypt a string
    $str = "Hello, World!";
    $salt = "my_salt";
    $encrypted = crypt($str, $salt);
    echo $encrypted;
    ?> -->
    <!-- 3. The crypt() function can also be used to check if a string is encrypted
     with a specific salt. -->
     <!-- <?php
      // Check if a string is encrypted with a specific salt
      $str = "Hello, World!";
      $salt = "my_salt";
      $encrypted = crypt($str, $salt);
      if (crypt($str, $salt) === $encrypted) {
        echo "The string is encrypted with the specified salt.";
        } else {
            echo "The string is not encrypted with the specified salt.";
            }
            ?> -->
            <!-- 4. The crypt() function can also be used to decrypt a string. -->
             <!-- <?php
              // Decrypt a string
              $str = "Hello, World!";
              $salt = "my_salt";
              $encrypted = crypt($str, $salt);
              $decrypted = crypt($encrypted, $salt);
              echo $decrypted;
              ?> -->
              <!-- 5. The crypt() function can also be used to generate a random salt. -->
               <!-- <?php
                // Generate a random salt
                $salt = substr(md5(uniqid(mt_rand(), true)), 0, 22
                );
                echo $salt;
                ?> -->
                <!-- 6. The crypt() function can also be used to check if a string is encrypted
                 with a specific algorithm. -->
                 <!-- <?php
                  // Check if a string is encrypted with a specific algorithm
                  $str = "Hello, World!";
                  $salt = "my_salt";
                  $encrypted = crypt($str, $salt);
                  if (preg_match('/^[a-zA-Z0-9./]+$/', $encrypted)) {
                    echo "The string is encrypted with the MD5 algorithm.";
                    } else {
                        echo "The string is not encrypted with the MD5 algorithm.";
                        }
                        ?> -->
                        <!-- 7. The crypt() function can also be used to check if a string is encrypted
                        with a specific mode. -->
                        <!-- <?php
                         // Check if a string is encrypted with a specific mode
                         $str = "Hello, World!";
                         $salt = "my_salt";
                         $encrypted = crypt($str, $salt);
                         if (preg_match('/^[a-zA-Z0-9./]+$/', $encrypted)) {
                            echo "The string is encrypted with the ECB mode.";
                            } else {
                                echo "The string is not encrypted with the ECB mode.";
                                }
                                ?> -->

<!-- PHP echo() Function: -->
<!-- The echo() function outputs one or more strings. -->
 <?php
 // Echo a string
 $str = "Hello, World!";
 echo $str;
 // Output: Hello, World!
 ?>
 <!-- PHP echo() Function: -->
  <?php
  // Echo a string with a newline character
  $str = "Hello, World!";
  echo $str . "\n";
  // Output: Hello, World!
  ?>
         
         
<!-- PHP explode() Function: -->
 <!-- The explode() function splits a string into an array. -->
<!-- The explode() function breaks a string into an array. 
The explode() function takes two arguments: a delimiter and a string. The delimiter is a character or  a string that separates the string into an array. 
The string is the string that is to be broken into an array. 
The explode() function returns an array of strings. 
The explode() function can be used to break a string into an array of words, an array of
lines, or an array of any other type of string. 
 used to break a string into an array of words, an array of characters, or an array of
substrings.
The explode() function can be used to break a string into an array of words. For example,
the following code breaks the string "Hello, World!" into an array of words: -->
<?php
// Break a string into an array of words
$str = "Hello, World!";
$words = explode(" ", $str);
print_r($words);
// Output: Array ( [0] => Hello, [1] => World! )
?>
<!-- The explode() function can be used to break a string into an array of characters. 
For example,the following code breaks the string "Hello, World!" into an array of characters: -->
<?php
// Break a string into an array of characters
$str = "Hello, World!";
$chars = explode("", $str);
print_r($chars);
?>


<?php
// Split a string into an array
$str = "Hello, World!";
$array = explode(" ", $str);
print_r($array);
// Output: Array ( [0] => Hello [1] => World! )
?>

<!-- PHP fprintf() Function: -->
 <!-- The fprintf() function is used to print formatted output to a file. -->  
   <!-- The fprintf() function takes two arguments: a file pointer and a format string.
   The file pointer is a variable that points to a file.
   The format string is a string that contains the format specifiers.
   The fprintf() function returns the number of characters printed.
   The fprintf() function can be used to print formatted output to a file. -->
   <?php
   // Open a file for writing
   $file = fopen("example.txt", "w");
   // Print formatted output to the file
   fprintf($file, "The value of %d is %f\n", 10,
   20.5);
   // Close the file
   fclose($file);
   ?>
   <!-- The fprintf() function can be used to print formatted output to a file.
    For example, the following code prints the value of a variable to a file: -->
    <?php
    // Open a file for writing
    $file = fopen("example.txt", "w");
    // Print formatted output to the file
    $x = 10;
    fprintf($file, "The value of x is %d\n", $x);
    // Close the file
    fclose($file);
    ?>


<!-- PHP implode() Function: -->
 <!-- The implode() function is used to join an array of strings into a single string. -->
  <!-- The implode() function takes two arguments: a separator and an array of strings.
   The separator is a string that is used to separate the strings in the array.
   The implode() function returns a single string that is the result of joining the strings in the array
   The implode() function can be used to join an array of strings into a single string. -->
   <?php
   // Create an array of strings
   $array = array("Hello", "World", "PHP");
   // Join the strings in the array into a single string
   $str = implode(" ", $array);
   print_r($str);
   // Output: Hello World PHP
   ?>

<!-- PHP join() Function: -->
 <!-- The join() function is used to join an array of strings into a single string. -->
  <!-- The join() function takes two arguments: a separator and an array of strings.
   The separator is a string that is used to separate the strings in the array.
   The join() function returns a single string that is the result of joining the strings in the array
   The join() function can be used to join an array of strings into a single string. -->
   <?php
   // Create an array of strings
   $array = array("Hello", "World", "PHP");
   // Join the strings in the array into a single string
   $str = join(" ", $array);
   print_r($str);
   // Output: Hello World PHP
   ?>

<!-- The join() function is an alias of the implode() function. -->

<!-- PHP lcfirst() Function: -->
 <!-- The lcfirst() function is used to convert the first character of a string to lowercase. -->
  <!-- The lcfirst() function takes a string as an argument and returns the string with the first
   character converted to lowercase. -->
   <?php
   // Create a string
   $str = "Hello";
   // Convert the first character of the string to lowercase
   $str = lcfirst($str);
   print_r($str);
   // Output: hello
   ?>


<!-- PHP levenshtein() Function: -->
 <!-- The levenshtein() function is used to calculate the Levenshtein distance between two
  strings. The Levenshtein distance is a measure of the minimum number of single-character
  edits (insertions, deletions or substitutions) required to change one word into the other.
  The levenshtein() function takes two strings as arguments and returns the Levenshtein
  distance between them. -->
  <?php
  // Create two strings
  $str1 = "kitten";
  $str2 = "sitting";
  // Calculate the Levenshtein distance between the two strings
  $distance = levenshtein($str1, $str2);
  print_r($distance);
  // Output: 3
  ?>


<!-- PHP localeconv() Function: -->
 <!-- The localeconv() function is used to get the locale-specific numeric formatting information. -->
  <!-- The localeconv() function returns an array containing the locale-specific numeric formatting information. -->
   <?php
   // Get the locale-specific numeric formatting information
   $info = localeconv();
   print_r($info);
   // Output: Array ( [decimal_point] => . [thousands_sep] => , [
   //  intval] => 0 [currency_symbol] => $ [mon_decimal_point]
   //  [positive_inf] => Infinity [negative_inf] => -Infinity [
   //  mon_thousands_sep] =>  [frac_digits] => 2 [p_cs
   // Prepend the locale-specific numeric formatting information to the string
   $str = "1234.56";
   $str = $info['decimal_point'] . $str;
   print_r($str);
   // Output: .1234.56
   ?>

<!-- PHP ltrim() Function: -->
 <!-- The ltrim() function is used to remove leading whitespace from a string. -->
  <?php
  // Create a string
  $str = "   Hello   ";
  // Remove leading whitespace from the string
  $str = ltrim($str);
  print_r($str);
  // Output: Hello   
  ?>

<!-- PHP md5() Function: -->
 <!-- The md5() function is used to generate a 32-character hexadecimal hash value from a string
  or a binary string. -->
  <?php
  // Create a string
  $str = "Hello";
  // Generate a 32-character hexadecimal hash value from the string
  $hash = md5($str);
  print_r($hash);
  // Output: 5d41402abc4b2a76b9719d911
  ?>

<!-- PHP md5_file() Function: -->
 <!-- The md5_file() function is used to generate a 32-character hexadecimal hash value from a
  file. -->
  <?php
  // Create a file
  $file = fopen("test.txt", "w");
  // Write some data to the file
  fwrite($file, "Hello");
  // Close the file
  fclose($file);
  // Generate a 32-character hexadecimal hash value from the file
  $hash = md5_file("test.txt");
  print_r($hash);
  // Output: 5d41402abc4b2a76b9719d911
  ?>




<?php
// Create a string
$str = "Hello";
// Remove leading whitespace from the string
$str = ltrim($str);
print_r($str);
// Output: Hello
// Create a string
$str = "Hello";
// Generate a 32-character hexadecimal hash value from the string
$hash = md5($str);
print_r($hash);
// Output: 5d41402abc4b2a76b9719d911

?>

