<?php
function incluirRecursos() {
    // Incluir las hojas de estilo
    echo '<link rel="stylesheet" href="public/css/paleta.css">';
    echo '<link rel="stylesheet" href="public/css/index.css">';

    include('lib/viewBarraCorto.php');
    include('lib/viewLogin.php');
    include('confg/conexion.php');
}
// Llamar la función para incluir los recursos
incluirRecursos();
?>
