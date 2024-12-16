<?php

// Función para generar el formulario de login
function generarFormularioLogin() {
    return '
    <link rel="stylesheet" href="public/css/peleta.css">
    <link rel="stylesheet" href="public/css/login.css">

    <div class="formulario">
        <h1>Bienvenido</h1>
        <form action="/submit" method="post">
            <!-- Correo -->
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <!-- Contraseña -->
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña" required>

            <!-- Botón de envío -->
            <button type="submit">Enviar</button>
        </form>
    </div>
    ';
}

// Llamar a la función para mostrar el formulario de login
echo generarFormularioLogin();

?>
