<?php

$choice = $_POST['choice'];

$connect = mysqli_connect("localhost", "root", "", "relationship", 3307);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

switch ($choice) {
    case 1: // Create new tables
        // Create Dept table
        $q1 = mysqli_query($connect, "CREATE TABLE dept (
            dno INT PRIMARY KEY,
            dname VARCHAR(50) NOT NULL,
            loc VARCHAR(50) NOT NULL
        )");
        
        // Create Emp table
        $q2 = mysqli_query($connect, "CREATE TABLE emp (
            eno INT PRIMARY KEY,
            ename VARCHAR(50) NOT NULL,
            designation VARCHAR(50) NOT NULL,
            salary DECIMAL(10, 2) CHECK (salary > 0),
            date_of_joining DATE NOT NULL,
            dno INT,
            FOREIGN KEY (dno) REFERENCES dept(dno)
        )");

        if ($q1 && $q2) {
            echo "<center><b><h2>Tables Created Successfully</h2></b></center>";
        } else {
            echo "<center><b><h2>Error Creating Tables: " . mysqli_error($connect) . "</h2></b></center>";
        }
        break;

    case 2: // Insert data into the table
        header("Location: emp_insert.html");
        break;

    case 3: // Update data from the table
        header("Location: emp_fetch.html");
        break;

    case 4: // Read data from the table
        $q4 = mysqli_query($connect, "SELECT * FROM Emp");
        if ($q4) {
            echo "<center>";
            echo "<table border='1' width='50%' height='20%'>";
            echo "<tr><th>Emp NO</th><th>Employee Name</th><th>Designation</th><th>Date of Joining</th><th>Salary</th><th>Dept No</th></tr>";
            while ($row = mysqli_fetch_array($q4)) {
                echo "<tr><td>{$row['eno']}</td><td>{$row['ename']}</td><td>{$row['designation']}</td><td>{$row['Date_Of_Joining']}</td><td>{$row['salary']}</td><td>{$row['dno']}</td></tr>";
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


    case  6: // Search data from the table
        header("LOcation: dept_insert.html");
        break;


    default:
        echo "<center><b><h2>Invalid Request</h2></b></center>";
}

mysqli_close($connect);

?>
