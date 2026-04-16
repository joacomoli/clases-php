<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>06 — if / else / elseif</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        .box { background: #fef3c7; border: 1px solid #f59e0b; padding: 1rem; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>06 — Condicionales</h1>
    <?php
    $nota = 7;
    $asistencia = 85;
    ?>
    <p>Cambiá en el código <code>$nota</code> y <code>$asistencia</code> y recargá la página.</p>
    <div class="box">
        <?php
        if ($nota >= 4 && $asistencia >= 60) {
            echo '<p>Condición: <strong>Aprobado</strong> (nota y asistencia OK).</p>';
        } elseif ($nota >= 4) {
            echo '<p>Condición: <strong>Regular</strong> (falta cumplir asistencia).</p>';
        } else {
            echo '<p>Condición: <strong>Desaprobado</strong>.</p>';
        }
        ?>
    </div>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
