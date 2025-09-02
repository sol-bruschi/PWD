<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - TP1</title>
</head>
<body>
    <h2>Ejercicio 7: Operaciones matemáticas</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio7.php">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <label for="operacion">Seleccione operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="">--Seleccione--</option>
            <option value="Suma">Suma</option>
            <option value="Resta">Resta</option>
            <option value="Multiplicacion">Multiplicación</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php if (!empty($errores)): ?>
        <ul style="color:red;">
            <?php foreach ($errores as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($resultado !== null): ?>
        <h3>El resultado de su operación es: <?= $resultado ?></h3>
    <?php endif; ?>
</body>
</html>