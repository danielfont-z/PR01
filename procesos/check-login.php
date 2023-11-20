<?php
    session_start();

    include("../herramientas/conexion.php");

    $email = $_SESSION['email'];
    $pwd = $_SESSION['pwd'];

    $sql = "SELECT email, pwd FROM tbl_usuarios WHERE email = ? AND pwd = ?";

    $pwdEncript = hash('sha256', $pwd);

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $pwdEncript);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row > 0) 
    {
        header("Location: ../view/exito.php");
    } 
    
    else 
    {
        header("Location: ../index.php?UserMal");
    }
?>
