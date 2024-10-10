<?php
// Get the current day of the week as a number (0 for Sunday, 6 for Saturday)
$dayOfWeek = date('w');

// Initialize the background color variable
$bgColor = 'white'; // Default color

// Use a switch statement to determine the background color
switch ($dayOfWeek) {
    case 0: // Sunday
        $bgColor = 'lightblue';
        break;
    case 1: // Monday
        $bgColor = 'lightgreen';
        break;
    case 2: // Tuesday
        $bgColor = 'lightcoral';
        break;
    case 3: // Wednesday
        $bgColor = 'lightyellow';
        break;
    case 4: // Thursday
        $bgColor = 'lightpink';
        break;
    case 5: // Friday
        $bgColor = 'lightgray';
        break;
    case 6: // Saturday
        $bgColor = 'lightgoldenrodyellow';
        break;
}

// Set the background color in the HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color by Day</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            color: black;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Today's Background Color</h1>
    <p>It's <?php echo date('l'); ?> today!</p>
</body>
</html>