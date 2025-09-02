<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operacion = $_GET['operacion'];

if ($operacion == "Suma") {
    $resultado = $numero1 + $numero2;
} elseif ($operacion == "Resta") {
    $resultado = $numero1 - $numero2;
} elseif ($operacion == "Multiplicacion") {
    $resultado = $numero1 * $numero2;
}
echo "El resultado de su operacion es: $resultado";