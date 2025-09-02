<?php
    $edad = $_POST['edad'];
    $estudianteSi = @$_POST['estudianteSi'];
    $estudianteNo = @$_POST['estudianteNo'];

    if ($edad < 12){
        echo "El precio de la entrada es de $160.";
    }
    elseif ($edad >= 12 && $estudianteSi){
        echo "El precio de la entrada es de $180.";
    }
    else {
        echo "El precio de la entrada es de $300.";
    }