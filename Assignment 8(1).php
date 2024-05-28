<!DOCTYPE html>
<html>
<head>
    <title>Associative Arrays in PHP</title>
</head>
<body>
    <?php
    $student = array(
        "name" => "John",
        "age" => 20,
        "grade" => "A"
    );

    echo "Student Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br>";

    $student["age"] = 21;

    $student["city"] = "New York";

    echo "<br>Updated Student Information:<br>";
    foreach ($student as $key => $value) {
        echo "$key: $value<br>";
    }

    unset($student["grade"]);

    echo "<br>Student Information after removing grade:<br>";
    foreach ($student as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
</body>
</html>