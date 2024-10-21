<?php
$serverName = "localhost";
$port = "3307"; // Replace with your custom port number
$userName = "root"; // Using the root user
$password = ""; // If there's no password, keep this empty
$dbName = "phpbatch";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $dbName, $port);

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
echo  "Connected successfully <br>";

$s = "create table MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT  NULL, email VARCHAR(50),  reg_date TIMESTAMP DEFAULT  CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP)";
if(mysqli_query($connect, $s))
echo  "Table created successfully  <br>";
else
echo "Table not created: ";

mysqli_close($connect);
?>