<?php
 $servername = "localhost";
 $port = "3307";
 $username = "root";
 $password = "";
 $dbname = "registration";

 // Create connection
 $connect = new mysqli($servername, $username, $password, $dbname, $port);
// Assuming $connect is your MySQL connection
$q = mysqli_query($connect, "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    dob DATE,
    email VARCHAR(255),
    mobile VARCHAR(20),
    website VARCHAR(255),
    userName VARCHAR(255),
    pass VARCHAR(255),
    address VARCHAR(255),
    gender VARCHAR(10),
    register_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

if ($q) {
    echo "<center><b><h2>Table Created Successfully</h2></b></center>";
} else {
    echo "<center><b><h2>Error Creating Table: " . mysqli_error($connect) . "</h2></b></center>";
}
?>
