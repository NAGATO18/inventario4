<?php
$conexion = new mysqli("localhost", "root", "", "controlstk");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
