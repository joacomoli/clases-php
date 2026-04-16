<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>12 — Enlaces con variables (GET)</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        a { color: #0369a1; }
    </style>
</head>
<body>
    <h1>12 — Enlaces con query string</h1>
    <p>Hacé clic: el valor viaja en la URL como <code>?nombre=...</code></p>
    <ul>
        <li><a href="recibe.php?nombre=Pepe">Enviar nombre=Pepe</a></li>
        <li><a href="recibe.php?nombre=Ana&amp;rol=Admin">nombre=Ana y rol=editor</a></li>
    </ul>
    <p><small>En PHP moderno usamos siempre <code>$_GET['clave']</code>, no <code>register_globals</code>.</small></p>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
