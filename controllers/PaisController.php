<?php
require_once __DIR__ . '/../models/PaisModel.php';

// 1. Trae todos los países para llenar la lista desplegable
$paises = obtenerPaises();

// 2. Revisa si el usuario ya escogió un país
$paisSeleccionado = "";
$ciudades = null;

if (isset($_POST['pais']) && $_POST['pais'] != "") {
    $paisSeleccionado = $_POST['pais'];
    $ciudades = obtenerCiudadesPorPais($paisSeleccionado);
}

// 3. Muestra la pantalla
require_once __DIR__ . '/../views/index.php';
?>