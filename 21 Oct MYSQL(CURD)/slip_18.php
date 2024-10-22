<?php
$r = $_GET['r'];
$con = mysqli_connect("localhost", "root", "", "bca_programs", 3307);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($r == 1) {
    $q = mysqli_query($con, "CREATE TABLE emp_slip_18 (
        empno INT,
        ename VARCHAR(10),
        date_of_join DATE,
        salary INT,
        address VARCHAR(20)
    )");
    echo "<center><b><h2>Table Created Successfully.....!!!</h2></b></center>";
} elseif ($r == 2) {
    header("Location: slip_18_insert.html");
} elseif ($r == 3) {
    header("Location: slip_18_fetch.html");
} elseif ($r == 4) {
    $q4 = mysqli_query($con, "SELECT * FROM emp_slip_18");
    echo "<center>";
    echo "<table border='1' width='30%' height='20%'>";
    echo "<h2><tr><td><b>Emp No</b></td><td><b>Employee Name</b></td><td><b>Date Of Joining</b></td><td><b>Salary</b></td><td><b>Address</b></td></tr></h2>";
    while ($row = mysqli_fetch_array($q4)) {
        echo "<tr><td>{$row['empno']}</td><td>{$row['ename']}</td><td>{$row['date_of_join']}</td><td>{$row['salary']}</td><td>{$row['address']}</td></tr>";
    }
    echo "</table>";
    echo "</center>";
} elseif ($r == 5) {
    header("Location: delete.php");
} else {
    echo "<center><b><h2>Invalid Request</h2></b></center>";
}
?>

