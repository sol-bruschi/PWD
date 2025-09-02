<?php
$mensaje = '';
$contenidoArchivo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombreArchivo = basename($archivo['name']);
    $tipoArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    if ($tipoArchivo !== 'txt') {
        $mensaje = "Error: Solo se permiten archivos de texto (.txt)";
    } else {
        $rutaTemp = $archivo['tmp_name'];
        $contenido = file_get_contents($rutaTemp);

        if ($contenido !== false) {
            $mensaje = "Archivo cargado correctamente: $nombreArchivo";
            $contenidoArchivo = $contenido;
        } else {
            $mensaje = "Error al leer el archivo.";
        }
    }
}

include __DIR__ . '/../../vista/TP3/Ejercicio2.php';