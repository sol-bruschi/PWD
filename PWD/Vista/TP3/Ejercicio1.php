<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivo - TP3 Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Subir archivo (.doc o .pdf, máximo 2MB)</h2>
    <?php if($mensaje): ?>
        <div class="alert <?= $linkArchivo ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($mensaje) ?>
            <?php if($linkArchivo): ?>
                <br><a href="<?= $linkArchivo ?>" target="_blank"><?= basename($linkArchivo) ?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <form action="../../controlador/TP3/Ejercicio1.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="archivo" class="form-label">Selecciona un archivo:</label>
            <input type="file" name="archivo" id="archivo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Subir archivo</button>
    </form>
</div>
</body>
</html>