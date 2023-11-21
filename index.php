<?php

session_start();
if (!isset($_SESSION["user_logged"]) || $_SESSION["user_logged"] != true) {
    header("location: ./login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión</title>
    </head>

    <body>
        <p>dentro!</p>
    </body>
</html>