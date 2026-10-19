<?php
$numeroemails = '';
$seguro = false;
$error = '';
$precio_total = null;
$formularioEnviado = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($formularioEnviado) {
    $numeroemails = $_POST['numeroemails'] ?? '';
    $seguro = isset($_POST['seguro']);
    $cantidad = filter_var($numeroemails, FILTER_VALIDATE_INT);

    if ($cantidad === false || $cantidad < 1) {
        $error = 'Introduce un número entero de emails mayor que cero.';
    } else {
        if ($cantidad <= 2000) {
            $precio_total = 200;
        } elseif ($cantidad <= 10000) {
            $precio_total = $cantidad * 0.7;
        } else {
            $precio_total = $cantidad * 0.2;
        }

        if ($seguro) {
            $precio_total += $cantidad * 0.1;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
    <style>
        
            table, th, td {
            border: 1px solid black;
            
            }
        
    </style>
</head>
<body>

    <table class="tabla-historial">
        <tr>
            <th>De</th>
            <th>A</th>
            <th>Precio</th>
         </tr>
         
         <tr>
            <td>0</td>
            <td>2000</td>
            <td>200 €</td>
        </tr>
        <tr>
            <td>2001</td>
            <td>10000</td>
            <td>0.7 € unidad</td>
        </tr>
        <tr>
            <td>10001</td>
            <td>Infinito</td>
            <td>0.2 € unidad</td>
        </tr>

        
        
        
    </table>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="numeroemails">Número de emails que enviarás:</label>
        <input type="number" id="numeroemails" name="numeroemails" min="1" step="1" required value="<?= htmlspecialchars((string) $numeroemails, ENT_QUOTES, 'UTF-8') ?>">

        <input type="checkbox" id="seguro" name="seguro" value="1" <?= $seguro ? 'checked' : '' ?>>
        <label for="seguro">Quiero el seguro (0,10 € por email)</label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($formularioEnviado && $error !== ''): ?>
        <p role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif ($precio_total !== null): ?>
        <p>Precio total: <strong><?= number_format($precio_total, 2, ',', '.') ?> €</strong></p>
    <?php endif; ?>
</body>
</html>