<?php
session_start();

$_SESSION['Fname'] = $_POST['Fname'];
$_SESSION['Lname'] = $_POST["Lname"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Course Selection</title>
    </head>
    <body>
        <h2>Welcome, <?php echo $_SESSION['Fname'] . ' ' . $_SESSION['Lname']; ?></h2>
        <h3>Please check off the courses you have completed.</h3>

        <form action="accomplishments.php" method="POST">

            <input type="checkbox" id="course_oop" name="courses[]" value="Object-oriented programming">
            <label for="course_oop">Object-oriented programming</label>
            <br>
            <input type="checkbox" id="course_sad" name="courses[]" value="Systems analysis & design">
            <label for="course_sad">Systems analysis & design</label>
            <br>
            <input type="checkbox" id="course_adv" name="courses[]" value="Advanced programming">
            <label for="course_adv">Advanced programming</label>
            <br>
            <input type="checkbox" id="course_net" name="courses[]" value="Introduction to Networking">
            <label for="course_adv">Introduction to Networking</label>
            <br>
            <input type="checkbox" id="course_sec" name="courses[]" value="Introduction to Computer Security">
            <label for="course_adv">Introduction to Computer Security</label>
            <br>

            <input type="submit" value="Continue to Accomplishments">
            
        </form>
    </body>
</html>
