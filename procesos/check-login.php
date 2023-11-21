<?php

    include("../herramientas/conexion.php");

    session_start();

    $email = mysqli_escape_string($conn, $_SESSION['email']);
    
    $pwd = mysqli_escape_string($conn, $_SESSION['pwd']);

    $sql = "SELECT email FROM tbl_usuarios WHERE email = ?";

    //$pwdEncript = hash('sha256', $pwd); NO UTILICÉIS HASH, USAD PASSWORD_HASH PARA ENCRIPTAR
    //para verificar esta pwd, usar password_verify($passwordSinEncriptar, $passwordEncriptada)

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt_get_users);
    mysqli_close($conn);

    if ($row > 0) 
    { 
        if (password_verify($pwd, $row["pwd"])) { //password correcta
            //header("Location: ../view/exito.php");
        } else { //password incorrecta
            header("Location: ../index.php?badPassword=true");
        }
        exit();

    } else {
        header("Location: ../index.php?userDontExists=true");
        exit();
    }
?>
