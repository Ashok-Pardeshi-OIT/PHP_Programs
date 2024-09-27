<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $number = $_POST['number'];

    // Generate a 6-digit OTP
    $otp = rand(100000, 999999);

    // Display the OTP
    echo "Your OTP is: " . $otp;
}
?>
