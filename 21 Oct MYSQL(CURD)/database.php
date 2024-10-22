<?php
$serverName = "localhost";
$port = "3307"; // Replace with your custom port number
$userName = "root"; // Using the root user
$password = ""; // If there's no password, keep this empty

$connect = mysqli_connect($serverName, $userName, $password, "", $port);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully <br>";

$s = "CREATE DATABASE bca_programs";
if (mysqli_query($connect, $s)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connect);
}

mysqli_close($connect);
?>