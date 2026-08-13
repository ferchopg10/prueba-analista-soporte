<?php
require_once __DIR__ . '/../config/conexion.php';

// Trae todos los países ordenados alfabéticamente
function obtenerPaises() {
    global $conexion;
    $sql = "SELECT Code, Name FROM country ORDER BY Name ASC";
    return $conexion->query($sql);
}

// Trae las ciudades de un país, de mayor a menor población
function obtenerCiudadesPorPais($codigoPais) {
    global $conexion;
    $sql = "SELECT Name, Population FROM city
            WHERE CountryCode = ?
            ORDER BY Population DESC";

    $consulta = $conexion->prepare($sql);
    $consulta->bind_param("s", $codigoPais);
    $consulta->execute();
    return $consulta->get_result();
}
?>