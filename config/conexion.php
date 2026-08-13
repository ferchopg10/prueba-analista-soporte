<?php
$servidor = "localhost";
$usuario  = "root";
$clave    = "";
$base     = "world";

$conexion = new mysqli($servidor, $usuario, $clave, $base);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>

