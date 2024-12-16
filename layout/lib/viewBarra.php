<?php

// Función para generar la barra de navegación completa
function generarBarra() {
    return '
    <link rel="stylesheet" href="public/css/viewBarra.css">
    <link rel="stylesheet" href="public/css/paleta.css">

    <header>
        <div class="left-section">
            <a href="index.php"><img src="src/image/logo.jpg" alt="logo"></a>
            <a href="index.php"><p>ConectaTec</p></a>
            <p>IA</p>
            <p>Desarrollo Web</p>
            <p>CiberSeguridad</p>
            <p>Nube</p>
            <p>Big Data</p>
        </div>

        <div class="right-section">
            <a href="registrar.php"><p class="boton">REGISTRAR</p></a>
            <a href="inicioSesion.php"><p class="boton">INICIAR SESIÓN</p></a>
        </div>
    </header>
    ';
}

// Llamar a la función para mostrar la barra de navegación
echo generarBarra();

?>
