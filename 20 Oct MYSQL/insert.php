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
$serverName = "localhost";
$port = "3307"; // Replace with your custom port number
$userName = "root";
$password = "";
$dbase="phpbatch";
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$email=$_POST['email'];
$connect = mysqli_connect($serverName, $userName, $password, $dbase,  $port);

if (!$connect)
 {
  die("Connection failed: " . mysqli_connect_error());
}

$S="insert into myguests(firstname,lastname,email) values('$fname','$lname','$email')";
if(mysqli_query($connect,$S))
echo "record save successfully";
else
echo " not save successfully";

}
 ?>
    </body>
</html>