<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>09 — Bucle while y rand()</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        .line { font-family: ui-monospace, monospace; }
    </style>
</head>
<body>
    <h1>09 — while y <code>rand()</code></h1>
    <?php
    $valor = rand(1, 30);
    $inicio = 1;
    ?>
    <p>Número aleatorio generado (1–30): <strong><?php echo $valor; ?></strong>. Recargá para otro valor.</p>
    <p>Impresión de 1 hasta ese número:</p>
    <?php
    while ($inicio <= $valor) {
        echo '<div class="line">' . $inicio . '</div>';
        $inicio++;
    }
    ?>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
