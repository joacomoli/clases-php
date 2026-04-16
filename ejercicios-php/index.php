<?php
/**
 * Índice de prácticas — Programación II (Nueva Escuela)
 * Abrir en el navegador: http://localhost/ProgramacionIINuevaEscuela/ejercicios-php/
 */
$base = htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']), ENT_QUOTES, 'UTF-8');
$ejercicios = [
    ['carpeta' => '01-hola-mundo', 'titulo' => 'Hola mundo y delimitadores <?php ?>'],
    ['carpeta' => '02-variables', 'titulo' => 'Variables, tipos implícitos y comentarios'],
    ['carpeta' => '03-operadores', 'titulo' => 'Operadores aritméticos, comparación y lógicos'],
    ['carpeta' => '04-arrays-indexados', 'titulo' => 'Arrays indexados (vectores)'],
    ['carpeta' => '05-arrays-asociativos', 'titulo' => 'Arrays asociativos (registros)'],
    ['carpeta' => '06-condicionales-if', 'titulo' => 'if, else y elseif'],
    ['carpeta' => '07-ternario-y-switch', 'titulo' => 'Operador ternario y switch'],
    ['carpeta' => '08-bucle-for', 'titulo' => 'Bucle for'],
    ['carpeta' => '09-bucle-while', 'titulo' => 'Bucle while y rand()'],
    ['carpeta' => '10-funciones', 'titulo' => 'Funciones definidas por el alumno'],
    ['carpeta' => '11-fecha-date', 'titulo' => 'Función date()'],
    ['carpeta' => '12-enlaces-variables-get', 'titulo' => 'Enlaces con query string (?clave=valor)'],
    ['carpeta' => '13-formulario-get', 'titulo' => 'Formulario method="GET" y $_GET'],
    ['carpeta' => '14-formulario-post', 'titulo' => 'Formulario method="POST" y $_POST'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicios PHP — Índice</title>
    <style>
        :root { font-family: system-ui, sans-serif; background: #0f172a; color: #e2e8f0; }
        body { max-width: 42rem; margin: 2rem auto; padding: 0 1rem; }
        h1 { font-size: 1.35rem; margin-bottom: 0.5rem; }
        p.meta { color: #94a3b8; font-size: 0.9rem; margin-top: 0; }
        ul { list-style: none; padding: 0; }
        li { margin: 0.5rem 0; }
        a { color: #38bdf8; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .n { color: #64748b; font-variant-numeric: tabular-nums; margin-right: 0.5rem; }
    </style>
</head>
<body>
    <h1>Prácticas en vivo — PHP (Clases 0 y 1)</h1>
    <p class="meta">Cada carpeta es un ejemplo autocontenido. Abrí el enlace y mostrá el código junto al resultado.</p>
    <ol style="padding-left: 1.25rem;">
        <?php foreach ($ejercicios as $i => $e): ?>
            <li>
                <span class="n"><?php echo str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?>.</span>
                <a href="<?php echo $base . '/' . rawurlencode($e['carpeta']) . '/'; ?>"><?php echo htmlspecialchars($e['titulo'], ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
        <?php endforeach; ?>
    </ol>
    <p class="meta">Guía pedagógica: ver <code>GUIA_EJERCICIOS.md</code> en esta misma carpeta.</p>
</body>
</html>
