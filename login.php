<?php

session_start();
session_destroy();
session_abort();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión</title>
    </head>

    <body>
        <form action="./procesos/validar-login.php" method="post">
            <div>
                <label for="email">Email:</label>
                <br>
                <input type="text" id="email" name="email" oninput="validarEmail(this)" style="width:20vw; border: radius 5px;">
                <br>
                <span id="email_error" class="error" style="color: red; font-weight: bolder;"></span>
            </div>

            <div>
                <label for="pwd">Contraseña:</label>
                <br>
                <input type="password" id="pwd" name="pwd" oninput="validarPwd(this)" style="width:20vw; border: radius 5px;">
                <br>
                <span id="pwd_error" class="error" style="color: red; font-weight: bolder;"></span>
            </div>

            <br>

            <a href="">Clic aquí para cambiar la contraseña</a>
            
            <br><br>

            <input type="submit" id="enviar" name="enviar" value="Enviar" disabled>
        </form>

        <script src="./js/validar-login.js"></script> <!-- Script que valida los campos del formulario -->

        <script>
            // Función para validar el formulario
            function validarFormulario() {
                var email = document.getElementById("email").value;
                var pwd = document.getElementById("pwd").value;
            
                // Verificar si todos los campos están llenos
                if (email !== "" && pwd !== "" ) 
                {
                    document.getElementById("enviar").disabled = false; // Habilitar el botón de envío
                } 
                
                else 
                {
                    document.getElementById("enviar").disabled = true; // Deshabilitar el botón de envío
                }
            }
            
            // Agregar eventos 'input' a los campos para llamar a la función de validación
            document.getElementById("email").addEventListener("input", validarFormulario);
            document.getElementById("pwd").addEventListener("input", validarFormulario);

            // Llamar a la función de validación inicialmente
            validarFormulario();
        </script>
    </body>
</html>