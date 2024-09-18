<h1>
<?php
$a=$_POST['nm1'];
$b=$_POST['nm2'];
echo"Before swapping a= $a  b=$b";
$c=$a;//a=10 b=20 c=10
$a=$b;// a=20
$b=$c;//b=10
echo"<br>After swapping a= $a b=$b";
?>
</h1>
