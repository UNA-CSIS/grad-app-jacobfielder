<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Grad App</title>
    </head>
    <body>
        Please enter your first and last name.
        <form action="checklist.php" method="POST">
            First Name: <input type="text" name="Fname"><br>
            Last Name: <input type="text" name="Lname"><br>
            <input type="submit">
        </form>
    </body>
</html>
