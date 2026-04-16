<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recibe GET</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        pre { background: #0f172a; color: #e2e8f0; padding: 1rem; border-radius: 8px; overflow-x: auto; }
    </style>
</head>
<body>
    <h1>Página que recibe parámetros</h1>
    <?php
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '(sin nombre)';
    $rol = isset($_GET['rol']) ? $_GET['rol'] : '(sin rol)';
    ?>
    <p>Hola, <strong><?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?></strong>.</p>
    <?php if ($_GET['rol'] != 'Admin'){
        echo htmlspecialchars('No es un admin', ENT_QUOTES, 'UTF-8');
    }else{
        echo htmlspecialchars($rol, ENT_QUOTES, 'UTF-8');
    }  ?></strong></p>
    
    <p>Contenido crudo de <code>$_GET</code> (debug):</p>
    <pre><?php print_r($_GET); ?></pre>
    <p><a href="index.php">← Volver a los enlaces</a></p>
</body>
</html>
