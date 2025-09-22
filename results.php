<?php
session_start();

$courses = $_SESSION['courses'];
$accomplishments = $_SESSION['accomplishments'];

$totalCourses = 5;
$takenCourses = count($courses);

function evaluateApplication($accomplishments, $totalCourses, $takenCourses) {
    $requiredKeyword = "PHP";
    $minPercentage = 0.5;

    $hasKeyword = stripos($accomplishments, $requiredKeyword) !== false;
    $meetsCourses = ($takenCourses / $totalCourses) >= $minPercentage;

    return $hasKeyword && $meetsCourses;
}

$accepted = evaluateApplication($accomplishments, $totalCourses, $takenCourses);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
    </head>
    <body>
        <h3>
            <?php
            if ($accepted) {
                echo "Congratulations! You are accepted for a phone interview.";
            } else {
                echo "Sorry, your application was rejected.";
            }
            ?>
        </h3>
    </body>
</html>
