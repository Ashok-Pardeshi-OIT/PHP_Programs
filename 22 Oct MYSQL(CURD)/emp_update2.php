<?php
$a_no = $_POST['a_no'];
$a_name = $_POST['a_name'];
$d_join = $_POST['d_join'];
$a_sal = $_POST['a_sal'];
$a_add =  $_POST['a_add'];

$connect =  mysqli_connect("localhost","root","", "employee", 3307);

$choice = mysqli_query($connect, "update employeeTable set emp_no=$a_no,ename='$a_name',date_of_join='$d_join', salary='$a_sal', address='$a_add' where emp_no=$a_no");

echo "<center><b><h2>Record  Updated Successfully.....!!!</h2></b><br> <a href=employee.html>Click here to go back to the Home page</a></center>";

?>