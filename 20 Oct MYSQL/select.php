<html>
    <body>
    <form action="" method="post">
    Enter Id<input type="text" name="id" value="<?php if(isset($_POST['id']))echo $_POST['id']; ?> "> <br>
    <input type="submit" value="Show" name="submit">
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

$connect = mysqli_connect($serverName, $userName, $password, $dbase, $port);

if (!$connect)
 {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($connect, $sql);
echo"<table border=1>";
echo"<tr><td>ID</td><td>First Name</td><td>Last name</td><td>Email</td></tr>";
if (mysqli_num_rows($result) > 0) 
{
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr><td>". $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]."</td><td>".$row["email"]. "</td></tr>";
} 
} 
else 
{
  echo "0 results";
}
}
?>
</body>
</html>