<?php

// Función para generar el formulario
function generarFormulario() {
    return '
    <link rel="stylesheet" href="public/css/paleta.css">
    <link rel="stylesheet" href="public/css/registro.css">
    
    <body>
        <div class="main-content">
            <div class="formulario">
                <h1>Bienvenido</h1>
                <form action="/submit" method="post">
                    <!-- Nombre -->
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                    <!-- Apellido Paterno -->
                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input type="text" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno" required>

                    <!-- Apellido Materno -->
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input type="text" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido Materno" required>

                    <!-- Rol -->
                    <label for="rol">Rol:</label>
                    <input type="text" id="rol" name="rol" placeholder="Rol" required>

                    <!-- Correo -->
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                    <!-- Contraseña -->
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

                    <!-- Botón de envío -->
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </body>
    ';
}

// Llamar a la función para mostrar el formulario
echo generarFormulario();

?>



