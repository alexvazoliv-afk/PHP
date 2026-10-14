<?php
$numero_dados = 2;
$resultados = [];
$suma_total = 0;

for ($i = 1; $i <= $numero_dados; $i++) {
    $valor = rand(1, 6);
    $resultados[] = $valor;
    $suma_total += $valor;
}

$minimo = $numero_dados * 1;
$maximo = $numero_dados * 6;

if ($suma_total == $minimo) {
    $mensaje = '¡La suma es mínima!';
} elseif ($suma_total == $maximo) {
    $mensaje = '¡La suma es máxima!';
} else {
    $mensaje = 'La suma total es: ' . $suma_total;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dado doble</title>
</head>
<body>
    <?php require 'includes/navbar.php'; ?>

    <h1>Tirada de dos dados</h1>

    <?php foreach ($resultados as $valor) : ?>
        <?php $imagen = 'img/dado_' . $valor . '.svg'; ?>
        <img src="<?php echo $imagen; ?>" alt="Dado con valor <?php echo $valor; ?>">
    <?php endforeach; ?>

    <p>La suma total es: <?php echo $suma_total; ?></p>
    <p><?php echo $mensaje; ?></p>

    <form method="post">
        <button type="submit">Volver a tirar</button>
    </form>
</body>
</html>
