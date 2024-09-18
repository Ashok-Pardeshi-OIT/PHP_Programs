<h1>
<?php
$a=$_POST['nm1'];
$b=$_POST['nm2'];
echo"Before swapping a= $a  b=$b";
$a=$a+$b;//a=10 b=20  a=30
$b=$a-$b;//b=30-20=10
$a=$a-$b;//a=30-10=20
echo"<br>After swapping a= $a b=$b";
?>
</h1>
