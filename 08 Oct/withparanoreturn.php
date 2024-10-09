<html>
<head>
<title>PHP Program To construct book using functions</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter Book1 title"/> </td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter Book1 author"/> </td>
</tr>
<tr>
<td> <input type="text" name="num3" value="" placeholder="Enter Book1 subject"/> </td>
</tr>
<tr>
<td> <input type="text" name="num4" value="" placeholder="Enter Book1 id"/> </td>
</tr>
<tr>
<td> <input type="text" name="num5" value="" placeholder="Enter Book2 title"/> </td>
</tr>
<tr>
<td> <input type="text" name="num6" value="" placeholder="Enter Book2 author"/></td>
</tr>
<tr>
<td> <input type="text" name="num7" value="" placeholder="Enter Book2 subject"/> </td>
</tr>
<tr>
<td> <input type="text" name="num8" value="" placeholder="Enter Book2 id"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
function book($tit, $aut, $sub, $id)
{
echo "Book Title: ".$tit;
echo "Book Author: ".$aut;
echo "Book Subject: ".$sub;
echo "Book Id: ".$id;
}

if(isset($_POST['submit']))
{
echo "BOOK 1 Details: "."</br>";

$t1 = $_POST['num1']."</br>";
$a1 = $_POST['num2']."</br>";
$s1 = $_POST['num3']."</br>";
$id1 = $_POST['num4']."</br>";
book($t1, $a1, $s1, $id1);
echo "BOOK 2 Details: "."</br>";
$t2 = $_POST['num1']."</br>";
$a2 = $_POST['num2']."</br>";
$s2 = $_POST['num3']."</br>";
$id2 = $_POST['num4']."</br>";
book($t1, $a1, $s1, $id1);
}
?>
</body>
</html>