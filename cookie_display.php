<?php
if(isset($_COOKIE['user'])) {
    echo "<p>Welcome " . $_COOKIE['user'] . "!</p>";
} else {
    echo "<p>No cookie found!</p>";
}
?>