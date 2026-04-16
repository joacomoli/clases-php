<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>05 — Arrays asociativos</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        dl { display: grid; grid-template-columns: 8rem 1fr; gap: 0.35rem 1rem; }
        dt { font-weight: bold; color: #334155; }
    </style>
</head>
<body>
    <h1>05 — Arrays asociativos</h1>
    <?php
    $registro = [
        'dni' => '20456322',
        'nombre' => 'Martinez Pablo',
        'direccion' => 'Colon 134',
    ];
    ?>
    <p>Acceso por clave: <code>$registro['nombre']</code> → <strong><?php echo $registro['nombre']; ?></strong></p>
    <h2>Fila completa</h2>
    <dl>
        <?php foreach ($registro as $clave => $valor): ?>
            <dt><?php echo htmlspecialchars($clave, ENT_QUOTES, 'UTF-8'); ?></dt>
            <dd><?php echo htmlspecialchars($valor, ENT_QUOTES, 'UTF-8'); ?></dd>
        <?php endforeach; ?>
    </dl>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
