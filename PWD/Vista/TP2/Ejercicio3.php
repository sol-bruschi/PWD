<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - TP1</title>
</head>
<body>
    <h2>Ejercicio 3: Formulario de datos personales</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio3.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="0" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required><br><br>

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