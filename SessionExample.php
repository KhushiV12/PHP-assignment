<?php
session_start();

$_SESSION["username"] = "Khushi Vinchhi";
$_SESSION["email"] = "khushi.vinchhi@example.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <h1>Session Example</h1>
    <p>Session variables are set.</p>
    <a href="session_display.php">Display Session Data</a>
</body>
</html>