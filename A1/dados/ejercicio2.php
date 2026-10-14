<?php
$numero_dado = rand(1, 6);
$imagen = 'img/dado_' . $numero_dado . '.svg';

switch ($numero_dado) {
    case 1:
        $mensaje = 'Has sacado 1. ¡Mala suerte!';
        break;
    case 2:
        $mensaje = 'Has sacado 2. Sigue intentándolo.';
        break;
    case 3:
        $mensaje = 'Has sacado 3. Está bien.';
        break;
    case 4:
        $mensaje = 'Has sacado 4. ¡Muy bien!';
        break;
    case 5:
        $mensaje = 'Has sacado 5. ¡Genial!';
        break;
    case 6:
        $mensaje = 'Has sacado 6. ¡Excelente!';
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dado con mensajes</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        .contenedor { text-align: center; padding: 30px 20px; }
        img { width: 180px; }
        button { padding: 10px 20px; font-size: 16px; }
    </style>
</head>
<body>
    <?php require 'includes/navbar.php'; ?>

    <div class="contenedor">
        <h1>Tirada de Dado</h1>
        <p>Has sacado un <?php echo $numero_dado; ?></p>
        <img src="<?php echo $imagen; ?>" alt="Dado <?php echo $numero_dado; ?>">

        <p><?php echo $mensaje; ?></p>

        <form method="post">
            <button type="submit">Volver a tirar</button>
        </form>
    </div>
</body>
</html>
