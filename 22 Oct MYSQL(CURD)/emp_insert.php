<?php
$a_no = $_POST['a_no'];
$a_name = $_POST['a_name'];
$d_join = $_POST['d_join'];
$a_sal = $_POST['a_sal'];
$a_add = $_POST['a_add'];

$connect = mysqli_connect("localhost", "root",  "", "employee", 3307);

$query2 = mysqli_query($connect, "insert into employeeTable values($a_no,'$a_name','$d_join',$a_sal,'$a_add')");

echo "<center><b><h2>Data Inserted Successfully.....!!!</h2></b></center><br><a href=employee.html>Click Here to Go Back</a>";

?>