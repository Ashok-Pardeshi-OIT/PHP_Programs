<?php
session_start();
echo "<h3>Employee Details</h3> ";
echo "<b>Employee Name : </b>".$_SESSION['ename']."<br>";
echo "<b>Employee Address : </b>".$_SESSION['eaddress']."<br>";
echo "<b>Employee Mobile No. : </b>".$_SESSION['emobile']."<br>";
echo "<b>Policy no. : </b>".$_POST['p_no']."<br>";
echo "<b>Policy Name : </b>".$_POST['p_name']."<br>";
echo "<b>Premium : </b>".$_POST['premium']."<br>";
?>