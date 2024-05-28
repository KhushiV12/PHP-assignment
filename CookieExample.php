<?php
$cookie_name = "user";
$cookie_value = "Khushi";
setcookie($cookie_name, $cookie_value, time() + (3600), "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h1>Cookie Example</h1>
    <p>A cookie is set for the user.</p>
    <a href="cookie_display.php">Display Cookie Data</a>
</body>
</html>