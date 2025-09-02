<?php
$mensaje = '';
$datosPelicula = [];
$imagenSubida = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $campos = ['titulo','actores','director','guion','produccion','anio','nacionalidad1','nacionalidad2','duracion','restricciones','sinopsis'];
    $faltan = [];
    foreach($campos as $campo){
        if(empty($_POST[$campo])){
            $faltan[] = $campo;
        } else {
            $datosPelicula[$campo] = $_POST[$campo];
        }
    }

    if(!empty($faltan)){
        $mensaje = "Faltan los siguientes campos: " . implode(", ", $faltan);
    } else {
        $dir = "imagenes/";
        if(!is_dir($dir)){
            mkdir($dir, 0777, true);
        }

        if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){
            $nombreTmp = $_FILES['imagen']['tmp_name'];
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $ext = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
            $permitidas = ['jpg','jpeg','png','gif'];

            if(!in_array($ext, $permitidas)){
                $mensaje = "El tipo de imagen no es válido. Solo JPG, PNG, GIF.";
            } else {
                $destino = $dir . $nombreArchivo;
                if(move_uploaded_file($nombreTmp, $destino)){
                    $imagenSubida = $destino;
                } else {
                    $mensaje = "Error al subir la imagen.";
                }
            }
        }
    }
}

include __DIR__ . '/../../vista/TP3/Ejercicio3.php';
