<?php
$menu = [
    '/index.php' => 'Index',
    '/ejercicio1.php' => '1. Dado simple',
    '/ejercicio2.php' => '2. Dado con mensajes',
    '/ejercicio3.php' => '3.  Dado doble'
];
?>

<nav class="navbar">
    <span class="navbar_titulo">Practicas PHP · DADO VIRTUAL</span>
    <ul>
        <li><a href="index.php"><?php echo $menu['/index.php']; ?></a></li>
        <li><a href="ejercicio1.php"><?php echo $menu['/ejercicio1.php']; ?></a></li>
        <li><a href="ejercicio2.php"><?php echo $menu['/ejercicio2.php']; ?></a></li>
        <li><a href="ejercicio3.php"><?php echo $menu['/ejercicio3.php']; ?></a></li>
    </ul>
</nav>