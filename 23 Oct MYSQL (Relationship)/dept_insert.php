<?php
$connect = mysqli_connect("localhost", "root", "", "relationship", 3307);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

$d_no = $_POST['d_no'];
$d_name = $_POST['d_name'];
$d_loc = $_POST['d_loc'];

$sql = "INSERT INTO dept (dno, dname, loc) VALUES ('$d_no', '$d_name', '$d_loc')";

if (mysqli_query($connect, $sql)) {
    echo "<center><b><h2>Record Inserted Successfully</h2></b></center>";
} else {
    echo "<center><b><h2>Error Inserting Record: " . mysqli_error($connect) . "</h2></b></center>";
}

mysqli_close($connect);
?>
