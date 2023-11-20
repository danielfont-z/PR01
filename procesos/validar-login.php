<?php
    session_start();

    if (!isset($_POST["email"]) || !isset($_POST["pwd"])) 
    {
        header("Location: ../index.php?error=Has de rellenar el formulario");
        exit();
    } 

    else 
    {
        // Assuming you have variables $email and $password from your form
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $pwd;

        header("Location: ./check-login.php");
        exit();
    }
?>
