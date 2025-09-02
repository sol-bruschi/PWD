<?php
$errores = [];
$datos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $campos = ['titulo','actores','director','guion','produccion','anio','nacionalidad1','nacionalidad2','duracion','restricciones','sinopsis'];
    foreach($campos as $campo){
        $datos[$campo] = trim($_POST[$campo] ?? '');
    }

    foreach(['titulo','actores','director','guion','produccion','nacionalidad1','nacionalidad2','sinopsis'] as $campo){
        if ($datos[$campo] === '') $errores[] = "El campo $campo es obligatorio.";
    }

    if ($datos['anio'] === '' || !is_numeric($datos['anio']) || strlen($datos['anio']) > 4) {
        $errores[] = "El año debe ser numérico y máximo 4 dígitos.";
    }

    if ($datos['duracion'] === '' || !is_numeric($datos['duracion']) || strlen($datos['duracion']) > 3) {
        $errores[] = "La duración debe ser numérica y máximo 3 dígitos.";
    }

    if ($datos['restricciones'] === '') {
        $errores[] = "Debe seleccionar una restricción de edad.";
    }
}

include __DIR__ . '/../../vista/TP2/Ejercicio4.2.php';