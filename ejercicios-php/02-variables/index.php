<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>02 — Variables</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        pre { background: #0f172a; color: #e2e8f0; padding: 1rem; border-radius: 8px; overflow-x: auto; }
    </style>
</head>
<body>
    <h1>02 — Variables</h1>
    <?php
    $dia = 24;
    $sueldo = 758.43;
    $nombre = 'juan';
    $activo = true;
    $Cadena = 'Variable con C mayúscula';
    $cadena = 'Otra variable distinta';
    ?>
    <p>Valores en pantalla:</p>
    <pre><?php
    echo 'Día: ' . $dia . "\n";
    echo 'Sueldo: ' . $sueldo . "\n";
    echo 'Nombre: ' . $nombre . "\n";
    echo 'Activo: ' . ($activo ? 'true' : 'false') . "\n";
    echo '$Cadena = ' . $Cadena . "\n";
    echo '$cadena = ' . $cadena . "\n";
    ?></pre>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
