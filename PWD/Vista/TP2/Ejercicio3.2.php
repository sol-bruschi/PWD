<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - TP3</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f2f2f2; display: flex; justify-content: center; padding-top: 50px; }
        .login-container { background: #fff; padding: 20px 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; }
        button { width: 100%; padding: 10px; }
        .error { color: red; margin-bottom: 10px; }
        .resultado { font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="../../controlador/TP2/Ejercicio3.2.php">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" required>

            <button type="submit">Ingresar</button>
        </form>

        <?php if (!empty($errores)): ?>
            <div class="error">
                <ul>
                    <?php foreach ($errores as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($resultado !== null): ?>
            <div class="resultado"><?= $resultado ?></div>
        <?php endif; ?>
    </div>
</body>
</html>