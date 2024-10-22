<?php
$a_no=$_GET['a_no'];
$a_name=$_GET['a_name'];
$d_join=$_GET['d_join'];
$a_sal=$_GET['a_sal'];
$a_add=$_GET['a_add'];
$con = mysqli_connect("localhost","root","","bca_programs", 3307);




$q2=mysqli_query($con,"insert into emp_slip_18 values($a_no,'$a_name','$d_join',$a_sal,'$a_add')");
echo "<center><b><h2> Values Inserted Successfully.....!!!</h2><b></center><br><a href=slip_18.html>back</a>";
?>