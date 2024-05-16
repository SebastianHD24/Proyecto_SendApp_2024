<div id="message" class="message"></div>

<form id="registerForm" action="../../../../Proyecto_SendApp_2024/Login/login-aprendices/agregandoregistro.php" class="form-login form2" method="post"> 
<?php if (isset($_SESSION['documento_identidad'])): ?>  
    <a href="?p=created-acounts">Menu</a> 
<?php endif ?>   
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
    <label for="tipo-documento" class="login__label">
        Tipo de Documento
    </label>
    <select id="tipo-documento" class="login__input" name="tipo_documento">
        <option value="CC">Cédula de Ciudadanía</option>
        <option value="TI">Tarjeta de Identidad</option>
        <option value="DE">Documento Extranjero</option>
    </select>
    <p id="mensaje_errord"></p>
    <label for="login-input-user" class="login__label">
        Documento de identidad
    </label>
    <input id="login-input-user-d" class="login__input" type="number" name="documento_identidad"/>

    <p id="mensaje_errorc"></p>
    <label for="login-input-password" class="login__label">
        Contraseña
    </label>
    <input id="login-input-password-p" class="login__input" type="text" name="contrasena"/>
    
    <label for="login-input-user" class="login__label">
        Nombres
    </label>
    <input id="login-input-user-n" class="login__input" type="text" name="nombres"/>

    <label for="login-input-user" class="login__label">
        Apellidos
    </label>
    <input id="login-input-user-a" class="login__input" type="text" name="apellidos"/>

    <label for="login-input-user" class="login__label">
        Correo
    </label>
    <input id="login-input-user-c" class="login__input" type="email" name="correo"/>

    <label for="login-input-user" class="login__label">
        Celular
    </label>
    <input id="login-input-user-ce" class="login__input" type="text" name="celular"/>

    <label for="login-input-user" class="login__label">
        Programa opcional
    </label>
    <input id="login-input-user-p" class="login__input" type="text" name="programa"/>

    <label for="login-input-user" class="login__label">
        Ficha opcional
    </label>
    <input id="login-input-user-f" class="login__input" type="number" name="ficha"/>

    <?php if (isset($_SESSION['documento_identidad'])): ?>
        <label for="id_rol">Rol:</label>
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
        <label for="id_servicio">Servicio:</label>
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

    <input class="login__submit" type="submit" value="Registrarse">
    <p id="mensaje_errore"></p>
</form>

<?php if (isset($_SESSION['documento_identidad'])): ?>
<script src="../../../../Proyecto_SendApp_2024/Login/Scripts/informar_error_registro.js"></script>
<?php endif ?>