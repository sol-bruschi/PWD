<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivo .txt - TP3 Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Subir archivo .txt y mostrar su contenido</h2>

    <?php if ($mensaje): ?>
        <div class="alert <?= $contenidoArchivo ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($mensaje) ?>
        </div>
    <?php endif; ?>

    <form action="../../controlador/TP3/Ejercicio2.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="archivo" class="form-label">Selecciona un archivo .txt:</label>
            <input type="file" name="archivo" id="archivo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Subir y mostrar</button>
    </form>

    <?php if ($contenidoArchivo): ?>
        <h4 class="mt-4">Contenido del archivo:</h4>
        <textarea class="form-control" rows="15" readonly><?= htmlspecialchars($contenidoArchivo) ?></textarea>
    <?php endif; ?>
</div>
</body>
</html>