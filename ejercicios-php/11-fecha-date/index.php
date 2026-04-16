<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>11 — date()</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid #cbd5e1; padding: 0.4rem 0.75rem; text-align: left; }
        th { background: #f1f5f9; }
    </style>
</head>
<body>
    <h1>11 — Función <code>date()</code></h1>
    <table>
        <tr><th>Formato</th><th>Resultado ahora</th></tr>
        <tr><td><code>d/m/Y</code></td><td><?php echo date('d/m/Y'); ?></td></tr>
        <tr><td><code>d-m-Y H:i:s</code></td><td><?php echo date('d-m-Y H:i:s'); ?></td></tr>
        <tr><td><code>l</code> (día de la semana en inglés)</td><td><?php echo date('l'); ?></td></tr>
    </table>
    <p><small>Si la hora no coincide con tu zona, en PHP se puede usar <code>date_default_timezone_set('America/Argentina/Buenos_Aires');</code> al inicio del script.</small></p>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
