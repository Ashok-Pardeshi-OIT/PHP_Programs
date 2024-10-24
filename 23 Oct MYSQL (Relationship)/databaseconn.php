<?php

$serverName = "localhost";
$port = "3307";
$userName = "root";
$password = "";

$connect  = mysqli_connect($serverName, $userName, $password, "", $port);

// Check connection
if(!$connect)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected  successfully <br>";

$sql = "create database relationship";

if(mysqli_query($connect, $sql)){
    echo "<br> Database created successfully";
}else{
    echo "<br> Error creating database: " . mysqli_error($connect);
}

mysqli_close($connect);
?>