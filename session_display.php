<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Session Data</title>
</head>
<body>
    <h1>Display Session Data</h1>
    <p>Username: <?php echo $_SESSION["username"]; ?></p>
    <p>Email: <?php echo $_SESSION["email"]; ?></p>
</body>
</html>