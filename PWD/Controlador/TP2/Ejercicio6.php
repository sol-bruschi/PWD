<?php
$resultado = null;
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = trim($_POST['nombre']);
    $apellido  = trim($_POST['apellido']);
    $edad      = trim($_POST['edad']);
    $direccion = trim($_POST['direccion']);
    $estudios  = isset($_POST['estudios']) ? $_POST['estudios'] : null;
    $sexo      = isset($_POST['sexo']) ? $_POST['sexo'] : null;
    $deportes  = isset($_POST['deportes']) ? $_POST['deportes'] : [];

    if ($nombre === "" || $apellido === "" || $edad === "" || $direccion === "") {
        $errores[] = "Todos los campos personales son obligatorios.";
    } elseif (!is_numeric($edad) || $edad < 0) {
        $errores[] = "La edad debe ser un número mayor o igual a 0.";
    } elseif ($estudios === null) {
        $errores[] = "Debe seleccionar un nivel de estudios.";
    } elseif ($sexo === null) {
        $errores[] = "Debe seleccionar un sexo.";
    } else {
        $mayorEdad = ($edad < 18) ? "Soy menor de edad" : "Soy mayor de edad";
        switch ($estudios) {
            case '1': $tipoEstudio = "No tiene estudios"; break;
            case '2': $tipoEstudio = "Estudios primarios"; break;
            case '3': $tipoEstudio = "Estudios secundarios"; break;
            default: $tipoEstudio = "No especificado"; break;
        }

        $cantidadDeportes = count($deportes);
        $textoDeportes = ($cantidadDeportes > 0) 
            ? "Cantidad de deportes que practica: $cantidadDeportes"
            : "No seleccionó ningún deporte";

        $resultado = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion. $mayorEdad.<br/>"
                   . "Nivel de estudios: $tipoEstudio<br/>"
                   . "Sexo: $sexo<br/>"
                   . "$textoDeportes";
    }
}

include __DIR__ . '/../../vista/TP1/Ejercicio6.php';