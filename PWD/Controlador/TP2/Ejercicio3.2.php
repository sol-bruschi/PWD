<?php
$resultado = null;
$errores = [];

$usuarios = [
    ["usuario" => "irina", "clave" => "1234"],
    ["usuario" => "juan", "clave" => "abcd"],
    ["usuario" => "ana", "clave" => "pass"]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuarioIngresado = trim($_POST['usuario'] ?? '');
    $claveIngresada = trim($_POST['clave'] ?? '');

    if ($usuarioIngresado === '' || $claveIngresada === '') {
        $errores[] = "Debe ingresar usuario y contraseña.";
    } elseif (strlen($claveIngresada) < 8 || !preg_match('/[A-Za-z]/', $claveIngresada) || !preg_match('/\d/', $claveIngresada) || $claveIngresada === $usuarioIngresado) {
        $errores[] = "La contraseña debe tener mínimo 8 caracteres, incluir letras y números, y no puede ser igual al usuario.";
    } else {
        $logueado = false;
        foreach ($usuarios as $usuario) {
            if ($usuario['usuario'] === $usuarioIngresado && $usuario['clave'] === $claveIngresada) {
                $logueado = true;
                break;
            }
        }
        $resultado = $logueado
            ? "Bienvenido, " . htmlspecialchars($usuarioIngresado) . "!"
            : "Error: Usuario o contraseña incorrectos.";
    }
}

include __DIR__ . '/../../vista/TP3/Ejercicio3.2.php';