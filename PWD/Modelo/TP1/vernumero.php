<?php
if(0>$_POST['numero']){
    echo"<h3> El número enviado es negativo.</h3>";
}
elseif(0<$_POST['numero']){
    echo"<h3> El número enviado es positivo.</h3>";
}
else{
    echo"<h3> El número enviado es cero.</h3>";
}
?>
<p><a href="Ejercicio1.html">Volver al formulario</a></p>