<h1>
<?php
$l=$_POST['nm1'];
$b=$_POST['nm2'];
$h=$_POST['nm3'];
$l1=$_POST['nm4'];
$h1=$_POST['nm5'];
$l2=$_POST['nm6'];
$h2=$_POST['nm7'];
$area=(2*($l*$b + $l*$h + $b*$h))-(($l1*$h1)-($l*$b)-(2*($l2*$h2)));
echo"<br>Area to be painted=".$area;
?>
</h1>
