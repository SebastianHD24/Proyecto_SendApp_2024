<div id="message" class="message"></div>

<form id="registerForm" action="../../../../Proyecto_SendApp_2024/Login/login-aprendices/agregandoregistro.php" class="form-login form2" method="post"> 
    <?php if (isset($_SESSION['documento_identidad'])): ?>
        <button class="btn_accounts">
            <a class="btn" href="?p=created-acounts">Cuentas Creadas</a>
        </button>  
         
    <?php endif ?> 
    <div class="logo_titulo">
        <img src="../../../Proyecto_SendApp_2024/Inicio/Img-home/LogosSena-img/SendApp.png" alt="Logo" class="registro_img">
    </div> 
    <div class="titulos">
        <ul class="login-nav">
            <?php if (!isset($_SESSION['documento_identidad'])): ?>    
            <li class="login-nav__item">
                <a id="goToLogin">Iniciar Sesión</a>
            </li>
            <?php endif ?>
            <li class="login-nav__item active">
                <?php if (!isset($_SESSION['documento_identidad'])): ?>
                    <a href="#">Registrarse</a>
                <?php else:?>
                    <h3>Registrar usuario nuevo</h3>
                <?php endif?>
            </li>
        </ul>
    </div>
    <p class="required_text">Los campos con el simbolo * son obligatorios</p> 
    <div class="contenedor_secciones">
        <div class="primera-seccion">
            <label for="tipo-documento" class="registro_label">
                Tipo de Documento *
            </label>
            <select id="tipo-documento" class="registro_input" name="tipo_documento" required>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="DE">Documento Extranjero</option>
            </select>
            <p id="mensaje_errord"></p>
            <label for="login-input-user" class="registro_label">
                Numero de documento *
            </label>
            <input id="login-input-user-d" class="registro_input" type="number" name="documento_identidad" placeholder="Número de documento" required/>

            <p id="mensaje_errorc"></p>
            <label for="login-input-password" class="registro_label">
                Contraseña *
            </label>
            <input id="login-input-password-p" class="registro_input" type="text" name="contrasena" placeholder="Contraseña" required/>
            
            <label for="login-input-user" class="registro_label">
                Nombres *
            </label>
            <input id="login-input-user-n" class="registro_input" type="text" name="nombres" placeholder="Nombres" required/>

            <label for="login-input-user" class="registro_label">
                Apellidos *
            </label>
            <input id="login-input-user-a" class="registro_input" type="text" name="apellidos" placeholder="Apellidos" required/>

            <label for="login-input-user" class="registro_label">
                Correo *
            </label>
            <input id="login-input-user-c" class="registro_input" type="email" name="correo" placeholder="Correo electronico" required/>
        </div>

        <div class="segunda-seccion">

            <label for="login-input-user" class="registro_label">
                Celular *
            </label>
            <input id="login-input-user-ce" class="registro_input" type="text" name="celular" placeholder="Número celular / telefono" required/>

            <label for="login-input-user" class="registro_label">
                Programa*
            </label>
            <input id="login-input-user-p" class="registro_input" type="text" name="programa" placeholder="Programa" required/>

            <label for="login-input-user" class="registro_label">
                Ficha*
            </label>
            <input id="login-input-user-f" class="registro_input" type="number" name="ficha" placeholder="Número de ficha" required/>

            <?php if (isset($_SESSION['documento_identidad'])): ?>
                <label class="registro_label" for="id_rol">Rol *</label>
                <select name="id_rol" id="id_rol">
                    <?php
                        // Realizar la consulta para obtener solo los roles de aprendiz y funcionario
                        $sql_roles = "SELECT id_rol, nombre_rol FROM roles WHERE nombre_rol = 'funcionario' or nombre_rol = 'aprendiz'";
                        $result_roles = mysqli_query($conn, $sql_roles);

                        // Iterar sobre los resultados y crear opciones del menú desplegable
                        while ($row_roles = mysqli_fetch_assoc($result_roles)) {
                            echo "<option value='{$row_roles['id_rol']}'>{$row_roles['nombre_rol']}</option>";
                        }
                    ?>
                </select>
                <label class="registro_label" for="id_servicio">Servicio:</label>
                <select name="id_servicio" id="id_servicio">
                <?php
                    // Realizar la consulta para obtener todos los servicios
                    $sql_servicios = "SELECT id_servicio, nombre_servicio FROM servicios";
                    $result_servicios = mysqli_query($conn, $sql_servicios);

                    // Iterar sobre los resultados y crear opciones del menú desplegable
                    while ($row_servicios = mysqli_fetch_assoc($result_servicios)) {
                    echo "<option value='{$row_servicios['id_servicio']}'";
                    // Si el ID del servicio coincide con el del usuario, seleccionarlo por defecto
                    if ($row_servicios['id_servicio'] == $row['id_servicio']) {
                        echo " selected";
                    }

                    echo ">{$row_servicios['nombre_servicio']}</option>";
                    }
                ?>
                </select>

                <?php else: ?>
                    <input type="hidden" name="id_rol" value="3">
            <?php endif ?>

            <div class="registrar">
                <input class="btn_registrar" type="submit" value="Registrarse">
            </div>
            
            <p id="mensaje_errore"></p>
        </div>
</form>

<?php if (isset($_SESSION['documento_identidad'])): ?>
<script src="../../../../Proyecto_SendApp_2024/Login/Scripts/informar_error_registro.js"></script>
<?php endif ?>