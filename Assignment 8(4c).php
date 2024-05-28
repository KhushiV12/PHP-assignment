<!DOCTYPE html>
<html>
<head>
    <title>Odd Even Checker</title>
</head>
<body>
    <h2>Odd Even Checker</h2>
    <form method="post" action="">
        <label>Enter a number:</label>
        <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
}
?>