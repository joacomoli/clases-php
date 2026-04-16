<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>10 — Funciones</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
    </style>
</head>
<body>
    <h1>10 — Funciones</h1>
    <?php
    function precioConDescuento($precio, $porcentaje)
    {
        return round($precio * (1 - $porcentaje / 100), 2);
    }

    $p = 1200;
    $d = 15;
    ?>
    <p>Precio: $<?php echo $p; ?>, descuento <?php echo $d; ?>% →</p>
    <p><strong>Precio final: $<?php echo precioConDescuento($p, $d); ?></strong> (útil para un e-commerce de merchandising).</p>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
