<?php
require_once 'includes/mensajes.php';

$numero_dado = rand(1, 6);
$imagen = 'img/dado_' . $numero_dado . '.svg';
$mensaje = mensajeSegunDado($numero_dado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Dado con mensajes</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php require 'includes/navbar.php'; ?>

    <main class="contenedor">
        <h1>🎲 Ejercicio 2: Dado con mensajes</h1>
        <p class="concepto">Concepto practicado: <strong>switch</strong></p>

        <p>Has sacado un <strong><?php echo $numero_dado; ?></strong></p>
        <img src="<?php echo $imagen; ?>" alt="Dado con el número <?php echo $numero_dado; ?>" class="imagen-dado">

        <p class="mensaje mensaje-info"><?php echo $mensaje; ?></p>

        <a href="ejercicio2.php" class="boton">🔄 Volver a tirar</a>
    </main>
</body>
</html>