<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>13 — Formulario GET</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        label { display: block; margin-top: 0.75rem; }
        input[type="text"] { width: 100%; max-width: 20rem; padding: 0.35rem; }
        button { margin-top: 1rem; padding: 0.4rem 0.9rem; }
        .hint { color: #64748b; font-size: 0.9rem; }
    </style>
</head>
<body>
    <h1>13 — Formulario con method="GET"</h1>
    <p class="hint">Al enviar, los datos aparecen en la URL. La misma página los lee con <code>$_GET</code>.</p>
    <form method="get" action="">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" value="<?php echo isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <div><button type="submit">Enviar</button></div>
    </form>
    <?php if (!empty($_GET)): ?>
        <h2>Lo que llegó por GET</h2>
        <ul>
            <?php foreach ($_GET as $clave => $valor): ?>
                <li><code><?php echo htmlspecialchars($clave, ENT_QUOTES, 'UTF-8'); ?></code> =
                    <?php echo htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
