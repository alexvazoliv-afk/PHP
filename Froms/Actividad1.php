<?php
$numeroemails= " ";

$formularioEnviado = isset($_GET['calcular']);
if ($formularioEnviado) {
    if (is_int($_POST['numeroemails'])  ) {
        $numeroemails= $_POST['numeroemails'];
    }   else {
        echo  " Valor no numerico";    
        }
        $seguro = $_POST['seguro'];

    if ($numeroemails > 0 && $numeroemails < 2000) {
        $precio_total=0;
        # code...
    }else if ($numeroemails > 200 && $numeroemails <10000) {
        $precio_total = $numeroemails  * 0.7;
    }elseif ($numeroemails >=10001) {
        $precio_total = 0.2;
        # code...
    }
    if ($seguro ==1) {
        # code...
    }
}
 

    
?>
<!DOCTYPE html>
<html lang="en">
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
            <td>0 €</td>
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
         <label for="numeroemails">Numero de emails que enviaras: </label>
        <input type="number" name="numeroemails" min="1" max="1000000000000000000" value="<?= htmlspecialchars($numeroemails) ?>">
          
        <input type="checkbox"   name="seguro" value="1">
        <label for="seguro"> Quiero el seguro POR 0.1 €</label><br>
        <input type="submit" value="calcular" >
        
      
       




    </form>
</body>
</html>