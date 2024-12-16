<?php

// Función para generar la barra de navegación
function generarBarra() {
    return '
    <link rel="stylesheet" href="public/css/viewBarra.css">
    <link rel="stylesheet" href="public/css/paleta.css">

    <header>
        <div class="left-section">
            <a href="index.php"><img src="src/image/logo.jpg" alt="logo"></a>
            <a href="index.php"><p>ConectaTec</p></a>
        </div>
    </header>
    ';
}

// Llamar a la función para mostrar la barra de navegación
echo generarBarra();

?>
