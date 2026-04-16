<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>04 — Arrays indexados</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        ul { line-height: 1.6; }
    </style>
</head>
<body>
    <h1>04 — Arrays indexados</h1>
    <?php
    $dias = [31, 28, 31, 30];
    // Equivalente al estilo del PDF: $dias = array(31, 28, 31, 30);
    ?>
    <p>Cantidad de elementos: <strong><?php echo count($dias); ?></strong></p>
    <p>Primer mes (índice 0): <strong><?php echo $dias[0]; ?></strong> días.</p>
    <ul>
        <?php for ($i = 0; $i < count($dias); $i++): ?>
            <li>Mes índice <?php echo $i; ?>: <?php echo $dias[$i]; ?> días</li>
        <?php endfor; ?>
    </ul>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
