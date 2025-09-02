<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = trim($_POST['edad']);
    $estudiante = isset($_POST['estudiante']) ? $_POST['estudiante'] : null;

    if ($edad === "") {
        $errores[] = "Debe ingresar su edad.";
    } elseif (!is_numeric($edad) || $edad < 0) {
        $errores[] = "La edad debe ser un número mayor o igual a 0.";
    } elseif ($estudiante === null) {
        $errores[] = "Debe indicar si es estudiante o no.";
    } else {
        if ($edad < 12) {
            $resultado = "El precio de la entrada es de $160.";
        } elseif ($edad >= 12 && $estudiante == "si") {
            $resultado = "El precio de la entrada es de $180.";
        } else {
            $resultado = "El precio de la entrada es de $300.";
        }
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio8.php';