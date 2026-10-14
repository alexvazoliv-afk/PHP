<?php
$numero_dado = rand(1, 6);
$imagen = 'img/dado_' . $numero_dado . '.svg';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tirada de Dado</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        .contenedor { text-align: center; padding: 30px 20px; }
        img { width: 180px; }
    </style>
</head>
<body>
    <?php require 'includes/navbar.php'; ?>

    <div class="contenedor">
        <h1>Tirada de Dado</h1>
        <p>Has sacado un <?php echo $numero_dado; ?></p>
        <img src="<?php echo $imagen; ?>" alt="Dado <?php echo $numero_dado; ?>">

        <form method="post" style="margin-top: 20px;">
            <button type="submit">Volver a tirar</button>
        </form>
    </div>
</body>
</html>