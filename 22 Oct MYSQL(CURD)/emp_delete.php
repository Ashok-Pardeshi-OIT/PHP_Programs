<?php
$message = "";

if (isset($_POST['submit'])) {
    $serverName = "localhost";
    $port = "3307"; // Replace with your custom port number
    $userName = "root";
    $password = "";
    $dbase = "employee";
    $id = $_POST['id'];

    $connect = mysqli_connect($serverName, $userName, $password, $dbase, $port);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the record exists
    $checkQuery = "SELECT * FROM employeeTable WHERE emp_no='$id'";
    $result = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        // Record exists, proceed to delete
        $S = "DELETE FROM employeeTable WHERE emp_no='$id'";
        if (mysqli_query($connect, $S)) {
            $message = "<div style='text-align: center; margin-top: 20px;'><h2 style='color: green;'>Record deleted successfully</h2></div>";
        } else {
            $message = "<div style='text-align: center; margin-top: 20px;'><h2 style='color: red;'>Record not deleted successfully</h2></div>";
        }
    } else {
        // Record does not exist
        $message = "<div style='text-align: center; margin-top: 20px;'><h2 style='color: red;'>Record does not exist</h2></div>";
    }

    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete  Record</title>
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
    <?php if ($message == ""): ?>
        <form action="" method="post">
            <label for="id">Enter Id:</label>
            <input type="text" id="id" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>" required> <br>
            <input type="submit" value="Delete" name="submit">
        </form>
    <?php else: ?>
        <?php echo $message; ?>
    <?php endif; ?>
</body>
</html>
