<?php
function mensajeSegunDado($numero) {
    switch ($numero) {
        case 1:
            return "Has sacado 1. ¡Mala suerte!";
        case 2:
            return "Has sacado 2. Sigue intentando.";
        case 3:
            return "Has sacado 3. Está bien.";
        case 4:
            return "Has sacado 4. ¡Muy bien!";
        case 5:
            return "Has sacado 5. ¡Genial!";
        case 6:
            return "Has sacado 6. ¡Excelente!";
        default:
            return "Número no válido.";
    }
}
?>