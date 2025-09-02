<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = trim($_POST['nombre']);
    $apellido  = trim($_POST['apellido']);
    $edad      = trim($_POST['edad']);
    $direccion = trim($_POST['direccion']);

    if ($nombre === "" || $apellido === "" || $edad === "" || $direccion === "") {
        $errores[] = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($edad) || $edad < 0) {
        $errores[] = "La edad debe ser un número mayor o igual a 0.";
    } else {
        $resultado = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
    }
}
include __DIR__ . '/../../vista/TP1/Ejercicio3.php';
