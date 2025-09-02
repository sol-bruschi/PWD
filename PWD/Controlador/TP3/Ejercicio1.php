<?php
$mensaje = '';
$linkArchivo = '';

$carpetaDestino = __DIR__ . '/../../uploads/';

if (!file_exists($carpetaDestino)) {
    mkdir($carpetaDestino, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombreArchivo = basename($archivo['name']);
    $tipoArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
    $tamanoArchivo = $archivo['size'];

    $extensionesValidas = ['doc', 'pdf'];

    if (!in_array($tipoArchivo, $extensionesValidas)) {
        $mensaje = "Error: Solo se permiten archivos .doc o .pdf";
    } elseif ($tamanoArchivo > 2 * 1024 * 1024) {
        $mensaje = "Error: El archivo excede el tamaño máximo permitido (2MB)";
    } else {
        $rutaDestino = $carpetaDestino . $nombreArchivo;
        if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
            $mensaje = "Archivo subido correctamente.";
            $linkArchivo = "../../uploads/$nombreArchivo";
        } else {
            $mensaje = "Error al guardar el archivo.";
        }
    }
}

include __DIR__ . '/../../vista/TP3/Ejercicio1.php';