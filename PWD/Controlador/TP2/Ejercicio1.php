<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = trim($_POST['numero']);

    if ($numero === "") {
        $errores[] = "Por favor ingrese un número.";
    } elseif (!is_numeric($numero)) {
        $errores[] = "Debe ingresar un valor numérico válido.";
    } else {
        // Lógica de TP1
        if ($numero < 0) {
            $resultado = "El número enviado es negativo.";
        } elseif ($numero > 0) {
            $resultado = "El número enviado es positivo.";
        } else {
            $resultado = "El número enviado es cero.";
        }
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio1.php';