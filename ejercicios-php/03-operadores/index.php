<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>03 — Operadores</title>
    <style>
        body { font-family: Georgia, serif; max-width: 40rem; margin: 2rem auto; padding: 0 1rem; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #cbd5e1; padding: 0.4rem 0.6rem; text-align: left; }
        th { background: #f1f5f9; }
    </style>
</head>
<body>
    <h1>03 — Operadores</h1>
    <?php
    $a = 30;
    $b = 10;
    ?>
    <p>Con <code>$a = <?php echo $a; ?></code> y <code>$b = <?php echo $b; ?></code>:</p>
    <table>
        <tr><th>Expresión</th><th>Resultado</th></tr>
        <tr><td>$a + $b</td><td><?php echo $a + $b; ?></td></tr>
        <tr><td>$a % $b</td><td><?php echo $a % $b; ?></td></tr>
        <tr><td>$a == 17</td><td><?php echo var_export($a == 17, true); ?></td></tr>
        <tr><td>$a &gt; $b &amp;&amp; $b &lt; 10</td><td><?php echo var_export($a > $b && $b < 10, true); ?></td></tr>
    </table>
    <p><a href="../index.php">← Volver al índice</a></p>
</body>
</html>
