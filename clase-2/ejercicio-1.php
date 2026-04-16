<?php
/**
 * Ejercicio 1 — Cotizador de merchandising.
 * Casos límite: cantidades vacías o no numéricas → 0; negativas → se tratan como 0.
 */
declare(strict_types=1);

$productos = [
    'remeras' => 3500,
    'tazas' => 2800,
    'zapatillas' => 2500,
];

/**
 * Devuelve [porcentaje_descuento, monto_descontado, total_final] según el subtotal.
 */
function calcularPorcentaje(float $subtotal): array
{
    $porcentaje = 0.0;
    if ($subtotal >= 25000) {
        $porcentaje = 12.0;
    } elseif ($subtotal >= 10000) {
        $porcentaje = 5.0;
    }
    $montoDescuento = round($subtotal * ($porcentaje / 100), 2);
    $total = round($subtotal - $montoDescuento, 2);

    return [$porcentaje, $montoDescuento, $total];
}

$enviado = $_SERVER['REQUEST_METHOD'] === 'POST';
$cantidades = ['remeras' => 0, 'tazas' => 0, 'zapatillas' => 0];
$subtotal = 0.0;
$porcentajeAplicado = 0.0;
$montoDescontado = 0.0;
$totalFinal = 0.0;

if ($enviado) {
    foreach (array_keys($productos) as $clave) {
        $raw = $_POST[$clave] ?? '';
        $n = is_numeric($raw) ? (int) $raw : 0;
        if ($n < 0) {
            $n = 0;
        }
        $cantidades[$clave] = $n;
        $subtotal += $n * $productos[$clave];
    }
    [$porcentajeAplicado, $montoDescontado, $totalFinal] = calcularPorcentaje($subtotal);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej. 1 — Cotizador</title>
</head>
<body>
    <h1>Cotizador de pedido</h1>
    <form method="post" action="">
        <?php foreach ($productos as $producto => $precio): ?>
            <label for="<?php echo $producto; ?>">
                <?php echo $producto; ?>
                ($<?php $precio; ?> c/u)
            </label>
            <input type="number" name="<?php echo $producto; ?>"
                   id="<?php echo $producto; ?>"
                   min="0" step="1"
                   value="<?php echo $enviado ? (int) $cantidades[$producto] : ''; ?>">
        <?php endforeach; ?>
        <div><button type="submit">Calcular</button></div>
    </form>

    <?php if ($enviado): ?>
        <div class="resumen">
            <h2>Resumen</h2>
            <table>
                <tr><th>Ítem</th><th>Cant.</th><th>Subtotal ítem</th></tr>
                <?php foreach ($productos as $producto => $precio): ?>
                    <tr>
                        <td><?php echo $producto; ?></td>
                        <td><?php echo (int) $cantidades[$producto]; ?></td>
                        <td>$<?php echo number_format($cantidades[$producto] * $precio, 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>

        </div>
    <?php endif; ?>

  
</body>
</html>
