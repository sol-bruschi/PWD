<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cinem@s - TP3 Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .form-container { max-width: 900px; margin: 50px auto; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .is-invalid { border-color: red; }
        .result { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 5px; }
        .titulo-azul { color: blue; }
    </style>
</head>
<body>
<div class="form-container">
    <h2 class="text-center mb-4">Cinem@s - Cargar Película</h2>

    <?php if($mensaje): ?>
        <div class="alert <?= $imagenSubida || !empty($datosPelicula) ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($mensaje) ?>
        </div>
    <?php endif; ?>

    <form id="peliculasForm" method="post" action="../../controlador/TP3/Ejercicio3.php" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="col">
                <label for="actores" class="form-label">Actores</label>
                <input type="text" class="form-control" id="actores" name="actores" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" required>
            </div>
            <div class="col">
                <label for="guion" class="form-label">Guion</label>
                <input type="text" class="form-control" id="guion" name="guion" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="produccion" class="form-label">Producción</label>
                <input type="text" class="form-control" id="produccion" name="produccion" required>
            </div>
            <div class="col">
                <label for="anio" class="form-label">Año</label>
                <input type="text" class="form-control" id="anio" name="anio" maxlength="4" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="nacionalidad1" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad1" name="nacionalidad1" required>
            </div>
            <div class="col">
                <label for="nacionalidad2" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad2" name="nacionalidad2" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="duracion" class="form-label">Duración (min)</label>
                <input type="text" class="form-control" id="duracion" name="duracion" maxlength="3" required>
            </div>
            <div class="col">
                <label class="form-label">Restricciones de edad</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="restricciones" id="todoPublico" value="Todo público" required>
                    <label class="form-check-label" for="todoPublico">Todo público</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="restricciones" id="mayores7" value="Mayores de 7 años">
                    <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="restricciones" id="mayores18" value="Mayores de 18 años">
                    <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen de la película</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
        <button type="reset" class="btn btn-secondary w-100 mt-2">Borrar</button>
    </form>

    <?php if(!empty($datosPelicula)): ?>
        <div class="result mt-4">
            <h4 class="titulo-azul">Datos ingresados:</h4>
            <?php foreach($datosPelicula as $clave => $valor): ?>
                <p><strong><?= ucfirst($clave) ?>:</strong> <?= htmlspecialchars($valor) ?></p>
            <?php endforeach; ?>
            <?php if($imagenSubida): ?>
                <p><strong>Imagen:</strong><br><img src="../../controlador/TP3/<?= $imagenSubida ?>" style="max-width:300px;"></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>