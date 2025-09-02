<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - TP1</title>
</head>
<body>
    <h2>Ejercicio 1: Número positivo, negativo o cero</h2>

    <form method="post" action="../../controlador/TP2/Ejercicio1.php">
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" required>
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