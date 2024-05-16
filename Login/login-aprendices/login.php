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
    <link rel="stylesheet" href="../Styles/login.css">
    <title>Login</title>
</head>
<body>

    <!-- FORMULARIO DE INICIO DE SESIÓN -->

    <div id="loginForm">
    <div class="login-container">

        <!-- CAMBIAR EL METODO POST EN PHP SI ES NECESARIO -->

        <form action="validacion/val.php" method="post" class="form-login form1">
            <div class="titulos">
                <ul class="login-nav">
                    <li class="login-nav__item active">
                        <a href="#">Iniciar Sesión</a>
                    </li>
                    <li class="login-nav__item">
                        <a id="goToRegister">Registrarse</a>
                        
                    </li>
                </ul>
            </div>
            <p id="mensaje_error"></p>
            <label for="login-input-user-l" class="login__label">
                Documento
            </label>
            <input id="login-input-user-l" class="login__input" type="text" name="documento_identidad" placeholder="Número de documento" />
            <label for="login-input-password-l" class="login__label">
                Contraseña
            </label>
            <input id="login-input-password-l" class="login__input" type="password" name="contrasena" placeholder="Contraseña" />
            <div class="regresarI">
            <input class="login__submit abajo" value="Iniciar Sesion" type="submit">
            <div class="regresar">
                <button class="btn_regresar abajo"><a href="../../index.php">Regresar</a></button>
            </div>  
            </div>
        </form>
        <!-- <div class="olvidaste">
            <a id="goToRegister" class="login__forgot">¿Olvidaste tu contraseña?</a>
        </div> -->
        
        
    </div>
</div>

    <!-- REGISTRO DE USUARIOS -->

    <div id="registerForm"  style="display: none;">
    <div class="login-container">

        <!-- CAMBIAR EL METODO POST EN PHP SI ES NECESARIO Y CAMBIAR LA ACCIÓN DEL FORM DEPENDIENDO DE LA NECESIDAD -->
        <?php include '../../../Proyecto_SendApp_2024/bases/mainInterfaz/componentes/registro.php' ?>
        
        <div class="olvidaste">
            <a id="goToLogin" class="login__forgot">¿Ya tienes una cuenta? Inicia sesión aquí.</a> 
        </div>
        <div class="regresar regresarII">
            <button class="btn_regresar abajo"><a href="../../index.php">Regresar</a></button>
        </div>
    </div>
</div>
</body>
<script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/inactividad.js"></script>
<script src="../Scripts/login.js"></script>
<script src="../Scripts/informar_errores.js"></script>
<script src="../Scripts/informar_error_registro_login.js"></script>
</html>