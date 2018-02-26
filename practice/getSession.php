<?php
session_start(); //starts or resumes a session

print_r($_SESSION)

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <h2> My favorite class is <?=$_SESSION['course']?> </h2>

    </body>
</html>