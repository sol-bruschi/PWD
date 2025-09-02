<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = trim($_POST['numero1']);
    $numero2 = trim($_POST['numero2']);
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : null;

    if ($numero1 === "" || $numero2 === "") {
        $errores[] = "Ambos números son obligatorios.";
    } elseif (!is_numeric($numero1) || !is_numeric($numero2)) {
        $errores[] = "Los valores ingresados deben ser números.";
    } elseif ($operacion === null) {
        $errores[] = "Debe seleccionar una operación.";
    } else {
        switch ($operacion) {
            case "Suma":
                $resultado = $numero1 + $numero2;
                break;
            case "Resta":
                $resultado = $numero1 - $numero2;
                break;
            case "Multiplicacion":
                $resultado = $numero1 * $numero2;
                break;
            default:
                $errores[] = "Operación no válida.";
                break;
        }
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio7.php';