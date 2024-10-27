<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIC Information</title>
</head>
<body>
    <form action="slip_7_Q4_2.php" method="post">
        <center>
            <h2>Enter LIC Information :</h2>
            <table>
                <tr>
                    <td>Policy No. :</td>
                    <td><input type="text" name="p_no"></td>
                </tr>
                <tr>
                    <td>Policy Name :</td>
                    <td><input type="text" name="p_name"></td>
                </tr>
                <tr>
                    <td>Premium</td>
                    <td><input type="text"name="premium"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="submit" value="Submit">
        </center>
    </form>
</body>
</html>

<?php
$_SESSION['ename']=$_POST['ename'];
$_SESSION['eaddress']=$_POST['eaddress'];
$_SESSION['emobile']=$_POST['emobile'];
?>