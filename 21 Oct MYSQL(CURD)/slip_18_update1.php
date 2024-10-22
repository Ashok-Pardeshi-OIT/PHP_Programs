<?php
$a_no=$_GET['a_no'];
$a_name=$_GET['a_name'];
$d_join=$_GET['d_join'];
$a_sal=$_GET['a_sal'];
$a_add=$_GET['a_add'];
$con = mysqli_connect("localhost","root","","bca_programs", 3307);
$r=mysqli_query($con,"update emp_slip_18 set empno=$a_no,ename='$a_name',date_of_join='$d_join',salary='$a_sal',address='$a_add' where empno=$a_no");
echo "<center><b><h2> Values updated Successfully.....!!!</h2><br><a href=slip_18.html>Back</a></center>";
?>