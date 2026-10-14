<?php
$numero_dados = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 2;

if ($numero_dados < 1) {
    $numero_dados = 1;
} elseif ($numero_dados > 20) {
    $numero_dados = 20;
}

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
                $mensaje = "¡La suma es mínima!";
            } elseif ($suma_total == $maximo) {
                $mensaje = "¡La suma es máxima!";
            } else {
                $mensaje = "La suma no es ni mínima ni máxima.";
            }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Varios dados</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php require 'includes/navbar.php'; ?>

    <main class="contenedor">

        <h1>🎲 Ejercicio 3: Tirada de varios dados</h1>

        <p class="concepto">
            Concepto practicado: <strong>bucles y arrays</strong>
        </p>

        <form method="get" class="formulario-dados">
            <label for="cantidad">Numero de dados (1-20):</label>
            <input type="number" id="cantidad" name="cantidad" min="1" max="20" value="<?php echo $numero_dados; ?>">
            <button type="submit">Tirar dados</button>
        </form>

        <div class="dados-multiples">

            <?php foreach ($resultados as $valor) : ?>

                <?php $imagen = "img/dado_" . $valor . ".svg"; ?>

                <div class="dado-item">
                    <p>Dado: <strong><?php echo $valor; ?></strong></p>

                    <img 
                        src="<?php echo $imagen; ?>" 
                        alt="Dado con valor <?php echo $valor; ?>" 
                        class="imagen-dado"
                    >
                </div>

            <?php endforeach; ?>

        </div>

        <p class="suma">
            Suma total: <strong><?php echo $suma_total; ?></strong>
        </p>

        <p class="mensaje mensaje-info">
            <?php echo $mensaje; ?>
        </p>

        <a href="ejercicio3.php?cantidad=<?php echo $numero_dados; ?>" class="boton">
            Volver a tirar
        </a>
        


    </main>

</body>
</html>