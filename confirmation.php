<?php
session_start();

$_SESSION['accomplishments'] = $_POST['accomplishments'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation Page</title>
    </head>
    <body>
        <form action="results.php" method="POST">
        Name: <?php echo $_SESSION['Fname'] . ' ' . $_SESSION['Lname']; ?>
        <br>
        
        Courses: <?php 
        foreach ($_SESSION['courses'] as $course) {
            echo $course . ", ";
        }
        ?>
        <br>
        
        Accomplishments: <?php echo $_SESSION['accomplishments']; ?>
        <br>
        <input type="submit" value="Submit Application">
        </form>
    </body>
</html>
