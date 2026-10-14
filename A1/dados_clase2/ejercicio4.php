<?php 

$historial = []; 
$cantidad_tiradas = rand(1,20); 
$i = 0;

while($i < $cantidad_tiradas){ 
    $historial[$i] = rand(1,6); 
    $i++; 
} 

// echo "<pre>";
// var_dump($historial); 
// echo "</pre>";

$suma = array_sum($historial);
$min = min($historial);
$max = max($historial);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php require 'includes/navbar.php'; ?>

    <main class="contenedor">

        <table class="tabla-historial">            
            <h1>Historial de tirada</h1>
            <tr>
                <th>Tirada</th>
                <th>Valor</th>
            </tr>

            <?php
            $contador = 1;

            foreach($historial as $tirada){
                echo "<tr>
                    <td>$contador</td>
                    <td>$tirada</td>
                </tr>";

                $contador++;
            }
            ?>
        </table>


        <table class="tabla-historial">            
            <h1>Estadistica de la tirada</h1>
            <tr>
                <th>SUMA</th>
                <th>MIN</th>
                <th>MAX</th>
            </tr>

            <tr>
                <td><?php echo $suma; ?></td>
                <td><?php echo $min; ?></td>
                <td><?php echo $max; ?></td>
            </tr>

        </table>

    </main>

</body>
</html>