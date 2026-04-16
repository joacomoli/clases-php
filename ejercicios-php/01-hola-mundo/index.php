<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>01 — Hola mundo</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        code { background: #f1f5f9; padding: 0.15rem 0.35rem; border-radius: 4px; }
        .out { border-left: 4px solid #0ea5e9; padding-left: 1rem; margin: 1rem 0; }
    </style>
</head>
<body>
    <h1>01 — Hola mundo</h1>
    <p>El archivo debe llamarse <code>.php</code> y el bloque PHP usar <code>&lt;?php ... ?&gt;</code>.</p>
    <div class="out">
        <?php
        echo '<p><strong>Salida:</strong> Hola $usuario desde PHP.</p>';
        ?>
    </div>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
