<?php
/**
 * Clase 3 — SQL + base de demostración
 * http://localhost/ProgramacionIINuevaEscuela/clase-3/
 */
$base = htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']), ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase 3 — SQL</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 40rem; margin: 2rem auto; padding: 0 1rem; line-height: 1.5; color: #1e293b; }
        h1 { font-size: 1.35rem; }
        code, pre { background: #f1f5f9; padding: 0.15rem 0.35rem; border-radius: 4px; }
        pre { padding: 1rem; overflow-x: auto; }
        a { color: #0369a1; }
        .box { border: 1px solid #e2e8f0; border-radius: 8px; padding: 1rem; margin: 1rem 0; background: #fafafa; }
    </style>
</head>
<body>
    <h1>Clase 3 — Práctica SQL (MySQL)</h1>
    <p>Esta carpeta incluye un script para crear la base <strong>programacion2_merchandising</strong> con datos de una tienda de merchandising de cine (productos, categorías, películas, clientes, pedidos).</p>

    <div class="box">
        <p><strong>1.</strong> Importar el SQL:</p>
        <pre><?php echo htmlspecialchars($base . '/sql/programacion2_merchandising.sql', ENT_QUOTES, 'UTF-8'); ?></pre>
        <p>Instrucciones detalladas: archivo <code>IMPORTAR_BASE.txt</code> en esta carpeta.</p>
    </div>

    <div class="box">
        <p><strong>2.</strong> Ejercicios para la cursada: <a href="<?php echo $base; ?>/EJERCICIOS_SQL.md">EJERCICIOS_SQL.md</a> (abrilo desde el editor; el navegador puede mostrar texto plano).</p>
    </div>

    <div class="box">
        <p><strong>Modelo relacional (resumen):</strong></p>
        <ul>
            <li><code>categorias</code> → <code>productos.categoria_id</code></li>
            <li><code>peliculas</code> → <code>productos.pelicula_id</code> (opcional)</li>
            <li><code>clientes</code> → <code>pedidos.cliente_id</code></li>
            <li><code>pedidos</code> ↔ <code>pedido_items</code> ↔ <code>productos</code></li>
        </ul>
        <p>Vista de ayuda: <code>v_productos_con_categoria</code></p>
    </div>

    <p><a href="../ejercicios-php/index.php">← Volver a ejercicios PHP (otra carpeta)</a></p>
</body>
</html>
