<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - TP1</title>
</head>
<body>
    <h2>Ejercicio 2: Validación de cursada</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio2.php">
        <label for="horas">Ingrese las horas de cursada:</label>
        <input type="number" name="horas" id="horas" min="1" required><br><br>

        <label for="dias">Ingrese los días de cursada:</label>
        <input type="number" name="dias" id="dias" min="1" required><br><br>

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
        <p style="color:green;"><?= $resultado ?></p>
    <?php endif; ?>
</body>
</html>