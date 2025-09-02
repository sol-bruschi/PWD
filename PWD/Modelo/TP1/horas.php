<?php
$horas = (int) $_GET['horas'];
$dias  = (int) $_GET['dias'];

if ($horas >= 0 && $dias > 0) {
    $cursada = [];
    for ($i = 0; $i < $dias; $i++) {
        $cursada[] = $horas;
    }

    $totalHoras = array_sum($cursada);
    echo "<h3>La cursada semanal es de <b>$totalHoras</b> horas.</h3>";
}