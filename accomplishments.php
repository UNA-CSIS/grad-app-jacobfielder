<?php
session_start();

$_SESSION['courses'] = $_POST['courses'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Accomplishments</title>
    </head>
    <body>
        <p>Please enter your personal accomplishments!</p>

        <form action="confirmation.php" method="POST">
            <textarea name="accomplishments" rows="6" cols="60" placeholder="Describe your accomplishments"></textarea>
            <br><br>
            <input type="submit" value="Continue to Confirmation">
        </form>

    </body>
</html>
