<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = trim($_POST['nombre']);
    $apellido  = trim($_POST['apellido']);
    $edad      = trim($_POST['edad']);
    $direccion = trim($_POST['direccion']);

    // Validación nativa
    if ($nombre === "" || $apellido === "" || $edad === "" || $direccion === "") {
        $errores[] = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($edad) || $edad < 0) {
        $errores[] = "La edad debe ser un número mayor o igual a 0.";
    } else {
        if ($edad < 18) {
            $resultado = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion. Soy menor de edad.";
        } else {
            $resultado = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion. Soy mayor de edad.";
        }
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio4.php';