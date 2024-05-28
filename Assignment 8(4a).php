<?php
$currentYear = date("Y");

if (($currentYear % 4 == 0 && $currentYear % 100 != 0) || ($currentYear % 400 == 0)) {
    echo "$currentYear is a leap year.";
} else {
    echo "$currentYear is not a leap year.";
}
?>