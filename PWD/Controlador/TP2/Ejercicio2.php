<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horas = trim($_POST['horas']);
    $dias  = trim($_POST['dias']);

    if ($horas === "" || $dias === "") {
        $errores[] = "Por favor complete todos los campos.";
    } elseif (!is_numeric($horas) || $horas < 1) {
        $errores[] = "Las horas de cursada deben ser un número mayor o igual a 1.";
    } elseif (!is_numeric($dias) || $dias < 1) {
        $errores[] = "Los días de cursada deben ser un número mayor o igual a 1.";
    } else {
        $resultado = "Cursada válida: $horas horas, $dias días por semana.";
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio2.php';
