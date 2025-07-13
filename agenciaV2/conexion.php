<?php
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Cambiar si tienes contraseña
$base_datos = "AGENCIA";

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
