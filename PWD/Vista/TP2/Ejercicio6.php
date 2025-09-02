<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - TP1</title>
</head>
<body>
    <h2>Ejercicio 6: Datos personales, estudios, sexo y deportes</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio6.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="0" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required><br><br>

        <p>Especifique su nivel de estudios:</p>
        <input type="radio" name="estudios" value="1" required> 1 - No tiene estudios<br>
        <input type="radio" name="estudios" value="2"> 2 - Estudios primarios<br>
        <input type="radio" name="estudios" value="3"> 3 - Estudios secundarios<br><br>

        <p>Sexo:</p>
        <input type="radio" name="sexo" value="Masculino" required> Masculino<br>
        <input type="radio" name="sexo" value="Femenino"> Femenino<br><br>

        <p>Deportes que practica:</p>
        <input type="checkbox" name="deportes[]" value="Futbol"> Futbol<br>
        <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="deportes[]" value="Tennis"> Tennis<br>
        <input type="checkbox" name="deportes[]" value="Voley"> Voley<br><br>

        <input type="submit" value="Aceptar">
    </form>

    <?php if (!empty($errores)): ?>
        <ul style="color:red;">
            <?php foreach ($errores as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($resultado !== null): ?>
        <h3><?= $resultado ?></h3>
    <?php endif; ?>
</body>
</html>