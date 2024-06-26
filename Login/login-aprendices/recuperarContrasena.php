<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/Login/Styles/login.css">
    <title>Recuperar</title>
</head>
<body>
    <header>
        <img src="./logo/SendApp.png" alt="Logo Sendapp">
    </header>
    <!-- FORMULARIO DE INICIO DE SESIÓN -->

    <div id="loginForm">
    <div class="login-container">

        <!-- CAMBIAR EL METODO POST EN PHP SI ES NECESARIO -->

        <form action="" method="post" class="form-login form1 formularioContra">
            <div class="titulos">
                <h1>Recuperar Contraseña</h1>
            </div>
            <p id="mensaje_error"></p>
            <label for="login-input-user-l" class="login__label">
                Tipo de documento
            </label>
            <select id="tipo-documento" class="registro_input login__input" name="tipo_documento" required>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="DE">Documento Extranjero</option>
            </select>
            <label for="login-input-user-l" class="login__label">
                Documento
            </label>
            <input id="login-input-user-l" class="login__input" type="number" name="documento_identidad" placeholder="Número de documento" required/>
            <label for="login-input-user-l" class="login__label">
                Correo asociado a su cuenta:
            </label>
            <input id="login-input-user-l" class="login__input" type="text" name="correo" placeholder="Correo electronico" required/>
            <div class="regresarI">
            <input class="login__submit abajo" value="Aceptar" type="submit">
            <div class="regresar">
                <button class="btn_regresar abajo"><a href="./login.php">Regresar</a></button>
            </div>
            </div>
        </form>
    </div>
</div>
</body>
<script src="../Scripts/recuperarContrasena.js"></script>
</html>