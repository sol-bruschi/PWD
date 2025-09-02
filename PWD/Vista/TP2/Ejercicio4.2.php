<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cinem@s - TP3 Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding: 20px; }
        .form-container { max-width: 900px; margin: auto; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .error { color: red; }
        .result { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 5px; }
        .titulo-azul { color: blue; }
    </style>
</head>
<body>
<div class="form-container">
    <h2 class="text-center mb-4">Cinem@s</h2>

    <?php if(!empty($errores)): ?>
        <div class="error mb-3">
            <ul>
                <?php foreach($errores as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" action="../../controlador/TP2/Ejercicio4.2.php">
        <div class="row mb-3">
            <div class="col">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($datos['titulo'] ?? '') ?>">
            </div>
            <div class="col">
                <label>Actores</label>
                <input type="text" name="actores" class="form-control" value="<?= htmlspecialchars($datos['actores'] ?? '') ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label>Director</label>
                <input type="text" name="director" class="form-control" value="<?= htmlspecialchars($datos['director'] ?? '') ?>">
            </div>
            <div class="col">
                <label>Guion</label>
                <input type="text" name="guion" class="form-control" value="<?= htmlspecialchars($datos['guion'] ?? '') ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label>Producción</label>
                <input type="text" name="produccion" class="form-control" value="<?= htmlspecialchars($datos['produccion'] ?? '') ?>">
            </div>
            <div class="col">
                <label>Año</label>
                <input type="text" name="anio" class="form-control" maxlength="4" value="<?= htmlspecialchars($datos['anio'] ?? '') ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label>Nacionalidad 1</label>
                <input type="text" name="nacionalidad1" class="form-control" value="<?= htmlspecialchars($datos['nacionalidad1'] ?? '') ?>">
            </div>
            <div class="col">
                <label>Nacionalidad 2</label>
                <input type="text" name="nacionalidad2" class="form-control" value="<?= htmlspecialchars($datos['nacionalidad2'] ?? '') ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label>Duración (min)</label>
                <input type="text" name="duracion" class="form-control" maxlength="3" value="<?= htmlspecialchars($datos['duracion'] ?? '') ?>">
            </div>
            <div class="col">
                <label>Restricciones de edad</label>
                <?php
                $opciones = ['Todo público','Mayores de 7 años','Mayores de 18 años'];
                foreach($opciones as $opcion):
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="restricciones" value="<?= $opcion ?>" <?= (isset($datos['restricciones']) && $datos['restricciones']==$opcion)?'checked':'' ?>>
                        <label class="form-check-label"><?= $opcion ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mb-3">
            <label>Sinopsis</label>
            <textarea name="sinopsis" class="form-control" rows="4"><?= htmlspecialchars($datos['sinopsis'] ?? '') ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
        <button type="reset" class="btn btn-secondary w-100 mt-2">Borrar</button>
    </form>

    <?php if(empty($errores) && !empty($datos)): ?>
        <div class="result">
            <h4 class="titulo-azul">Datos ingresados:</h4>
            <?php foreach($datos as $campo => $valor): ?>
                <p><strong><?= ucfirst($campo) ?>:</strong> <?= htmlspecialchars($valor) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
</body>
</html>