<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll Number Details</title>
</head>
<body>
    <h2>Enter Roll Number</h2>
    <form method="post" action="">
        <label for="rollno">Roll Number:</label>
        <input type="text" id="rollno" name="rollno" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rollno = htmlspecialchars($_POST['rollno']);
        getStudentDetails($rollno);
    }

    function getStudentDetails($rollno) {
        // Extract parts of the roll number
        $facultyCode = substr($rollno, 0, 2);
        $yearCode = substr($rollno, 2, 1);
        $actualNumber = substr($rollno, 3, 3);

        // Determine faculty
        switch ($facultyCode) {
            case 'BS':
                $faculty = 'B.Sc.';
                break;
            case 'BC':
                $faculty = 'BCA';
                break;
            case 'BA':
                $faculty = 'BA';
                break;
            default:
                $faculty = 'Unknown';
                break;
        }

        // Determine year
        switch ($yearCode) {
            case '1':
                $year = '1st';
                break;
            case '2':
                $year = '2nd';
                break;
            case '3':
                $year = '3rd';
                break;
            default:
                $year = 'Unknown';
                break;
        }

        // Print the details
        echo "<h3>Student Details</h3>";
        echo "Roll Number: $rollno<br>";
        echo "Faculty: $faculty<br>";
        echo "Year: $year<br>";
        echo "Actual Roll Number: $actualNumber<br>";
    }
    ?>
</body>
</html>
