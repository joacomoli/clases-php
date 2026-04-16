<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>14 — Formulario POST</title>
    <style>
        body { font-family: Georgia, serif; max-width: 36rem; margin: 2rem auto; padding: 0 1rem; }
        label { display: block; margin-top: 0.75rem; }
        input[type="text"], input[type="password"] { width: 100%; max-width: 20rem; padding: 0.35rem; }
        button { margin-top: 1rem; padding: 0.4rem 0.9rem; }
        .hint { color: #64748b; font-size: 0.9rem; }
        .ok { background: #dcfce7; border: 1px solid #22c55e; padding: 1rem; border-radius: 8px; margin-top: 1rem; }
    </style>
</head>
<body>
    <h1>14 — Formulario con method="POST"</h1>
    <p class="hint">Los datos no se muestran en la barra de dirección. Se leen con <code>$_POST</code>.</p>
    <form method="post" action="">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" autocomplete="username">
        <label for="clave">Contraseña (demo)</label>
        <input type="password" id="clave" name="clave" autocomplete="current-password">
        <div><button type="submit">Enviar</button></div>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="ok">
            <p><strong>Recepción POST</strong> (en un proyecto real validaríamos y guardaríamos en BD; no mostrar contraseñas en producción).</p>
            <ul>
                <?php foreach ($_POST as $clave => $valor): ?>
                    <li><code><?php echo htmlspecialchars($clave, ENT_QUOTES, 'UTF-8'); ?></code> =
                        <?php
                        if ($clave === 'clave') {
                            echo '(oculto en pantalla: ' . strlen((string) $valor) . ' caracteres)';
                        } else {
                            echo htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
                        }
                        ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
