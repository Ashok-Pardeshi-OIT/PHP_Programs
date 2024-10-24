<?php
$a_no = $_GET['a_no'];
$con = mysqli_connect("localhost", "root", "", "bca_programs", 3307);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = mysqli_query($con, "SELECT * FROM emp_slip_18 WHERE empno = $a_no");
$row = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="slip_18_update1.php" method="get">
        <center>
            <h2>Update Employee Details</h2>
            <table>
                <tr>
                    <td>Employee No:</td>
                    <td><input type="text" name="a_no" value="<?php echo $row['empno']; ?>" required></td>
                </tr>
                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" name="a_name" value="<?php echo $row['ename']; ?>" required></td>
                </tr>
                <tr>
                    <td>Date Of Join:</td>
                    <td><input type="text" name="d_join" value="<?php echo $row['date_of_join']; ?>" required></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="text" name="a_sal" value="<?php echo $row['salary']; ?>" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="a_add" value="<?php echo $row['address']; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Update" name="submit"></td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
