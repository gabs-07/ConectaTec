<?php

// Función para incluir hojas de estilo
function incluirEstilos() {
    $estilos = [
        'public/css/paleta.css',
        'public/css/index.css'
    ];

    // Imprimir las hojas de estilo
    foreach ($estilos as $estilo) {
        echo '<link rel="stylesheet" href="' . $estilo . '">';
    }
}

// Función para incluir archivos PHP (vistas)
function incluirVistas() {
    $vistas = [
        'lib/viewBarra.php',
        'lib/main.php'
    ];

    // Incluir los archivos PHP
    foreach ($vistas as $vista) {
        include($vista);
    }
}

// Función principal para incluir todos los recursos
function incluirRecursos() {
    incluirEstilos(); // Llamada para incluir estilos
    incluirVistas();  // Llamada para incluir vistas
}

// Llamar la función para incluir los recursos
incluirRecursos();

?>
