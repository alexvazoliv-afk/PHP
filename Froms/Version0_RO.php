<?php
declare(strict_types=1);
session_start();

//----------------------------------------
//CONFIGURACION U HELPERS
//----------------------------------------
const MODULOS = [
    'DWES' => 'Desarrollo web en entorno servidor',
    'DWEC' => 'Desarrollo web en entorno cliente'
];


const NOMBRE_max = 60;
function e(string|int|float|null $value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

//Token CSRF
if (empty($_SESSION['csrf'])) {

    $_SESSION['csrf']= bin2hex(random_bytes(32));
}

//Logica:procesar solo si la peticion es POST

$nombre = '';
$modulos = [];
$errores = [];
$exito = false;

if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $token = $_POST['csrf']??'';
    if (!is_string($token)|| !hash_equals($_SESSION['csrf'], $token)){
        http_response_code(403);
        exit('Soluicitud no valida.');
    }

    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de módulos</title>
</head>
<body>
<main>
    <?php if ($exito): ?>
        <h1>Datos recibidos</h1>
        <p>Alumno: <strong><?= e($nombre) ?></strong></p>
        <h2>Módulos seleccionados</h2>
        <ul>
            <?php foreach ($modulos as $codigo): ?>
                <li><?= e(MODULOS[$codigo]) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h1>Inscripción</h1>

        <?php if ($errores !== []): ?>
            <ul role="alert">
                <?php foreach ($errores as $error): ?>
                    <li><?= e($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="<?= e($_SERVER['PHP_SELF'] ?? '') ?>" method="post">
            <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">

            <p>
                <label for="nombre">Nombre del alumno:</label>
                <input type="text" id="nombre" name="nombre" maxlength="<?= NOMBRE_max ?>" required value="<?= e($nombre) ?>">
            </p>

            <fieldset>
                <legend>Selecciona los módulos:</legend>
                <?php foreach (MODULOS as $codigo => $descripcion): ?>
                    <p>
                        <input type="checkbox" id="modulo-<?= e($codigo) ?>" name="modulos[]" value="<?= e($codigo) ?>" <?= in_array($codigo, $modulos, true) ? 'checked' : '' ?>>
                        <label for="modulo-<?= e($codigo) ?>"><?= e($descripcion) ?></label>
                    </p>
                <?php endforeach; ?>
            </fieldset>

            <button type="submit">Enviar</button>
        </form>
    <?php endif; ?>
</main>
    
</body>
</html>