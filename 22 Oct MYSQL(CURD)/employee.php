<?php

$choice = $_POST['choice'];

$connect = mysqli_connect("localhost", "root", "", "employee", 3307);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

switch ($choice) {
    case 1: // Create a new table
        $q = mysqli_query($connect, "CREATE TABLE employeeTable (
            emp_no INT, 
            ename VARCHAR(255),
            date_of_join DATE,
            salary INT,
            address VARCHAR(225)
        )");
        if ($q) {
            echo "<center><b><h2>Table Created Successfully</h2></b></center>";
        } else {
            echo "<center><b><h2>Error Creating Table: " . mysqli_error($connect) . "</h2></b></center>";
        }
        break;

    case 2: // Insert data into the table
        header("Location: emp_insert.html");
        break;

    case 3: // Update data from the table
        header("Location: emp_fetch.html");
        break;

    case 4: // Read data from the table
        $q4 = mysqli_query($connect, "SELECT * FROM employeeTable");
        if ($q4) {
            echo "<center>";
            echo "<table border='1' width='50%' height='20%'>";
            echo "<tr><th>Emp NO</th><th>Employee Name</th><th>Date of Joining</th><th>Salary</th><th>Address</th></tr>";
            while ($row = mysqli_fetch_array($q4)) {
                echo "<tr><td>{$row['emp_no']}</td><td>{$row['ename']}</td><td>{$row['date_of_join']}</td><td>{$row['salary']}</td><td>{$row['address']}</td></tr>";
            }
            echo "</table>";
            echo "</center>";
            echo "<center><a href='employee.html'>Click here to go back to the Home page</a></center>";
        } else {
            echo "<center><b><h2>Error Fetching Data: " . mysqli_error($connect) . "</h2></b></center>";
        }
        break;

    case 5: // Delete data from the table
        header("Location: emp_delete.php");
        break;

    default:
        echo "<center><b><h2>Invalid Request</h2></b></center>";
}

mysqli_close($connect);

?>
