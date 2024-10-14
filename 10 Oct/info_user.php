<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
</head>
<body>
    <h2>Enter User Details</h2>
    <?php
    $name = $address = $gender = $username = $password = $country = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['ename']);
        $address = htmlspecialchars($_POST['address']);
        $gender = htmlspecialchars($_POST['gender']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $country = htmlspecialchars($_POST['country']);
    }
    ?>
    <form action="" method="post">
        <label for="ename">Name:</label>
        <input type="text" id="ename" name="ename" value="<?php echo $name; ?>" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="40" required><?php echo $address; ?></textarea><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>Male
        <input type="radio" id="female" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>Female
        <input type="radio" id="others" name="gender" value="Others" <?php if ($gender == "Others") echo "checked"; ?>>Others
        <br><br>
        
        <label for="username">UserName:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>" required><br><br>
        
        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select a country</option>
            <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
            <option value="USA" <?php if ($country == "USA") echo "selected"; ?>>USA</option>
            <option value="UK" <?php if ($country == "UK") echo "selected"; ?>>UK</option>
            <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>>Australia</option>
            <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
        </select>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
