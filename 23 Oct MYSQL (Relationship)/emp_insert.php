<?php
$connect = mysqli_connect("localhost", "root", "", "relationship", 3307);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

$e_no = $_POST['e_no'];
$e_name = $_POST['e_name'];
$desg = $_POST['desg'];
$d_join = $_POST['d_join'];
$e_sal = $_POST['e_sal'];
$d_no = $_POST['d_no'];

// Check if dno exists in dept table
$check_query = "SELECT * FROM dept WHERE dno = ?";
$stmt = mysqli_prepare($connect, $check_query);
mysqli_stmt_bind_param($stmt, 'i', $d_no);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // dno exists, proceed with insert
    $sql = "INSERT INTO emp (eno, ename, designation, date_of_joining, salary, dno) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'isssii', $e_no, $e_name, $desg, $d_join, $e_sal, $d_no);

    if (mysqli_stmt_execute($stmt)) {
        echo "<center><b><h2>Record Inserted Successfully</h2></b></center>";
    } else {
        echo "<center><b><h2>Error Inserting Record: " . mysqli_error($connect) . "</h2></b></center>";
    }
} else {
    echo "<center><b><h2>Error: Department number does not exist</h2></b></center>";
}

mysqli_close($connect);
?>
