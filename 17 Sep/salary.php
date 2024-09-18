<h1>
<?php
    $bs=$_POST['basic_salary'];
	$hra=$bs*0.50;
	$ta=$bs*0.40;
    $da=$bs*0.30;
	$tax=$bs*0.05;
	$gs=($bs+$hra+$ta+$da)-$tax;
	echo"<br>Home Rental Allowance=".$hra;
	echo"<br>Travelling Allowance=".$ta;
	echo"<br>Dinner Allowance=".$da;
	echo"<br>TAX=".$tax;
	echo"<br>Gross Salary=".$gs;
?>
</h1>