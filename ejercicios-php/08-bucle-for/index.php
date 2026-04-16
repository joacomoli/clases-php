<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>08 — Bucle for</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        .nums { font-family: ui-monospace, monospace; line-height: 1.4; word-break: break-all; }
    </style>
</head>
<body>
    <h1>08 — Bucle for</h1>
    <p>Imprimir del 1 al 15 (como en el PDF, acotado para la pantalla):</p>
    <p class="nums">
        <?php
        for ($f = 1; $f <= 15; $f++) {
            echo $f;
            if ($f < 15) {
                echo ' ';
            }
        }
        ?>
    </p>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
