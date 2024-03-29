<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbserver="localhost"; // Servidor
$dbusername="root"; // Nombre de usuario
$dbpassword=""; // Contraseña del usuario
$dbbasedatos="db_pr01_restaurante"; // Base de datos a la que nos queremos conectar

// Con el bloque Try / Catch buscamos errores.
try 
{
    $conn = @mysqli_connect($dbserver, $dbusername, $dbpassword, $dbbasedatos); // Se establece la conexión a la base de datos con los parámetros que hemos implementado.
} 
catch (Exception $e)
{
    echo "Error en la conexión con la base de datos: " . $e->getMessage() . "<br>"; // Si han saltado excepciones muestra los errores almacenados en $e.
    die();
}
?>