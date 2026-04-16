<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>07 — Ternario y switch</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        section { margin: 1.5rem 0; padding: 1rem; background: #f8fafc; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>07 — Operador ternario y switch</h1>
    <?php
    $tmp = 8;
    $mensaje = $tmp > 5 ? 'Es mayor a 5' : 'No es mayor a 5';
    $idioma = 'es';
    ?>
    <section>
        <h2>Ternario</h2>
        <p><code>$tmp = <?php echo $tmp; ?></code> → <?php echo htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8'); ?></p>
    </section>
    <section>
        <h2>switch</h2>
        <p>Valor de <code>$idioma</code>: <strong><?php echo htmlspecialchars($idioma, ENT_QUOTES, 'UTF-8'); ?></strong></p>
        <?php
        switch ($idioma) {
            case 'es':
                echo '<p>Salida: Hola</p>';
                break;
            case 'en':
                echo '<p>Salida: Hello</p>';
                break;
            default:
                echo '<p>Salida: (idioma no reconocido)</p>';
        }
        ?>
    </section>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
