<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedImage = $_POST['image'];
    echo "<style>body { background-image: url('$selectedImage'); }</style>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Set</title>
</head>
<body>
    <h1>Background Image Set</h1>
    <p>The background image has been set to: <?php echo htmlspecialchars($selectedImage); ?></p>
    <a href="index.html">Go back</a>
</body>
</html>
