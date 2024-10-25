<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
// Define variables and set to empty values
$nameErr = $dobErr = $emailErr = $mobileErr = $websiteErr = $userNameErr = $passErr = $addressErr = $genderErr = "";
$name = $dob = $email = $mobile = $website = $userName = $pass = $address = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate DOB
    if (empty($_POST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Mobile No
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match("/^[0-9]{10}$/",$mobile)) {
            $mobileErr = "Invalid mobile number";
        }
    }

    // Validate Website URL
    if (empty($_POST["website"])) {
        $websiteErr = "Website URL is required";
    } else {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL";
        }
    }

    // Validate Username
    if (empty($_POST["userName"])) {
        $userNameErr = "Username is required";
    } else {
        $userName = test_input($_POST["userName"]);
    }

    // Validate Password
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8}$/", $pass)) {
            $passErr = "Password must be exactly 8 characters long and include at least one letter and one number";
        }
    }


    // Validate Address
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // If no errors, proceed with database insertion
    if (empty($nameErr) && empty($dobErr) && empty($emailErr) && empty($mobileErr) && empty($websiteErr) && empty($usernameErr) && empty($passwordErr) && empty($addressErr) && empty($genderErr)) {
        // Database connection
        $servername = "localhost";
        $port = "3307";
        $username = "root";
        $password = "";
        $dbname = "registration";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (name, dob, email, mobile, website, userName, pass, address, gender)
        VALUES ('$name', '$dob', '$email', '$mobile', '$website', '$userName', '$pass', '$address', '$gender')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <center>
        <h2>Registration form</h2>
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><span class="error"><?php echo $nameErr; ?></span><br>
        DOB: <input type="date" name="dob" value="<?php echo $dob; ?>"><span class="error"><?php echo $dobErr; ?></span><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>"><span class="error"><?php echo $emailErr; ?></span><br>
        Mobile No: <input type="text" name="mobile" value="<?php echo $mobile; ?>"><span class="error"><?php echo $mobileErr; ?></span><br>
        Website URL: <input type="url" name="website" value="<?php echo $website; ?>"><span class="error"><?php echo $websiteErr; ?></span><br>
        Username: <input type="text" name="userName" value="<?php echo $userName; ?>"><span class="error"><?php echo $userNameErr; ?></span><br>
        Password: <input type="password" name="pass"><span class="error"><?php echo $passErr; ?></span><br>
        Address: <textarea name="address"><?php echo $address; ?></textarea><span class="error"><?php echo $addressErr; ?></span><br>
        Gender: 
        <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male
        <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>> Female
        <span class="error"><?php echo $genderErr; ?></span><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
      </center>
    </form>
</body>
</html>
