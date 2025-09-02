<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - TP1</title>
</head>
<body>
    <h2>Ejercicio 8: Precio de entrada</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio8.php">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" name="edad" id="edad" min="0" required><br><br>

        <p>¿Es estudiante?</p>
        <input type="radio" name="estudiante" value="si" required> Sí<br>
        <input type="radio" name="estudiante" value="no"> No<br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
        <button type="button" onclick="location.href='../../controlador/TP2/Ejercicio8.php'">Volver a consultar</button>
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