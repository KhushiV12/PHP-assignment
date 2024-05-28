<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Leap Year Checker</h2>
    <form method="post" action="">
        <label>Enter a year:</label>
        <input type="text" name="year">
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $year = $_POST['year'];

    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
}
?>