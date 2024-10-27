<?php
echo "<h3>Employee Details</h3> ";
echo "<b>Employee Name : </b>".$_COOKIE['ename']."<br>";
echo "<b>Employee Address : </b>".$_COOKIE['eaddress']."<br>";
echo "<b>Employee Mobile No. : </b>".$_COOKIE['emobile']."<br>";
echo "<b>Policy no. : </b>".$_POST['p_no']."<br>";
echo "<b>Policy Name : </b>".$_POST['p_name']."<br>";
echo "<b>Premium : </b>".$_POST['premium']."<br>";
?>