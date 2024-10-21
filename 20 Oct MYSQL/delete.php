<html>
    <body>
    <form action="" method="post">
    Enter Id<input type="text" name="id" value="<?php if(isset($_POST['id']))echo $_POST['id']; ?> "> <br>
    <input type="submit" value="Delete" name="submit">
    </form>
       
<?php
if(isset($_POST['submit']))
{
$serverName = "localhost";
$port = "3307"; // Replace with your custom port number
$userName = "root";
$password = "";
$dbase="phpbatch";
$id=$_POST['id'];

$connect = mysqli_connect($serverName, $userName, $password, $dbase,  $port);

if (!$connect)
 {
  die("Connection failed: " . mysqli_connect_error());
}

$S="delete from myguests where id='$id'";
if(mysqli_query($connect,$S))
echo "record delete successfully";
else
echo "not delete successfully";

}
 ?>
    </body>
</html>