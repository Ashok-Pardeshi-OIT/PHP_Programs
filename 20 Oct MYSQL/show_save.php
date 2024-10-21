<html>
    <body>
        <form action="" method="post">
First Name<input type="text" name="fn" 
value="<?php if(isset($_POST['fn']))echo $_POST['fn']; ?> ">
<br>
Last Name<input type="text" name="ln" 
value="<?php if(isset($_POST['ln']))echo $_POST['ln']; ?> ">
<br>
Email<input type="email" name="email" 
value="<?php if(isset($_POST['email']))echo $_POST['email']; ?> ">
<br>
            <input type="submit" value="Save" name="submit">
        </form>

        
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$port = "3307"; // Replace with your custom port number
$username = "root";
$password = "";
$dbase="phpbatch";
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$email=$_POST['email'];

$connect = mysqli_connect($servername, $username, $password, $dbase,  $port);

if (!$connect)
 {
  die("Connection failed: " . mysqli_connect_error());
}

$S="insert into myguests(firstname,lastname,email) values('$fname','$lname','$email')";
if(mysqli_query($connect,$S))
echo "record save successfully";
else
echo " not save successfully";

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