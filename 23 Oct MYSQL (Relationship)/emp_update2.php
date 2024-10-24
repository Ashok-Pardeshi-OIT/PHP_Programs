<?php
$e_no = $_POST['e_no'];
$e_name = $_POST['a_name'];
$desg = $_POST['desg'];
$d_join = $_POST['d_join'];
$e_sal = $_POST['e_sal'];
$d_no =  $_POST['d_no'];

$connect =  mysqli_connect("localhost","root","", "relationship", 3307);

$choice = mysqli_query($connect, "update emp set emp_no=$a_no,ename='$a_name',date_of_join='$d_join', salary='$a_sal', address='$a_add' where emp_no=$a_no");

echo "<center><b><h2>Record  Updated Successfully.....!!!</h2></b><br> <a href=employee.html>Click here to go back to the Home page</a></center>";

?>