    <div class="container" id="formularioPrincipal">
        <div class="second-container">
            <div class="header">
                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/Sena-Logo.png" alt="Logo" class="login_img">
                <h1 class="login__title">Bienvenido a tu perfil de usuario.</h1>
                <span class="inputGeneral oculto"></span>
            </div>
            <form method="POST" class="login__form datos_cuenta">
                <div class="main-form">
                        <div class="first-section">
                            <label for="form_input" class="form_input">Documento Identidad:</label>
                            <input type="text" name="documento_identidad" class="login__input" value="<?= $row_user['documento_identidad']?>" disabled>
                            <label for="form_input" class="form_input">Nombre:</label>
                            <input type="text" name="nombres" class="login__input" value="<?= $row_user['nombres']?>" disabled>
                            <label for="form_input" class="form_input">Apellidos:</label>
                            <input type="text" name="apellidos" class="login__input" value="<?= $row_user['apellidos']?>" disabled>
                            <span class="inputCorreo oculto"></span>
                            <label for="form_input" class="form_input">Correo Electrónico:</label>
                            <input type="email" name="correo" class="login__input" value="<?= $row_user['correo']?>" id="correo" required>
                            <span class="inputTelefono oculto"></span>
                            <label for="form_input" class="form_input">Celular:</label>
                            <input type="text" name="celular" class="login__input" value="<?= $row_user['celular']?>" id="celular" required>
                        </div>
                        <div class="second-section">
                        <?php
                            $rol = $row_user['id_rol'];
                            $consulta = mysqli_query($conn, "SELECT * FROM roles WHERE id_rol = $rol AND LOWER(nombre_rol) = 'aprendiz'");
                            $es_aprendiz = mysqli_num_rows($consulta) > 0;

                            if ($es_aprendiz) :
                        ?>
                            <label for="form_input" class="form_input">Programa:</label>
                            <input type="text" name="programa" class="login__input" value="<?= $row_user['programa']?>" disabled>   
                            <label for="form_input" class="form_input">Ficha:</label>
                            <input type="text" name="ficha" class="login__input" value="<?= $row_user['ficha']?>" disabled>
                        <?php endif; ?>
                        <?php
                            $rol = $row_user['id_rol'];
                            $consulta = mysqli_query($conn, "SELECT * FROM roles WHERE id_rol = $rol AND LOWER(nombre_rol) = 'funcionario'");
                            $es_funcionario = mysqli_num_rows($consulta) > 0;

                        if ($es_funcionario) :
                        ?>
                            <?php
                                $id_servicio = $row_user['id_servicio'];
                                $consulta = mysqli_query($conn, "SELECT * FROM servicios WHERE id_servicio = $id_servicio");
                                $area = mysqli_fetch_array($consulta);
                            ?>
                                <label for="form_input" class="form_input">Ficha:</label>
                                <input type="text" name="servicio" class="login__input" value="<?= $area['nombre_servicio']?>" disabled>
                        <?php endif; ?>
                            <button type="button" class="btn-cambiar" id="btnCambiar">Cambiar Contraseña</button>
                        </div>
                </div>
                <div class="btn-actualizar">
                    <button type="submit" class="btn-actu">Actualizar</button>
                </div>   
            </form>
        </div>
    </div>
    <div class="cambiar-contraseña" style="display: none;" id="cambiarContraseña">
        <div class="container-contraseña">
            <div class="header-contraseña">
                <h1 class="login__title">Cambiar Contraseña</h1>
                <span class="mensajeContraseña oculto"></span>
            </div>
            <form method="POST" class="login__form formCambiarContraseña">
                <div class="main-form2">
                    <div class="first-section">
                        <label for="form_input" class="form_input">Ingresar la contraseña actual:</label>
                        <input type="text" name="contraseña_actual" class="login__input" required>
                        <label for="form_input" class="form_input">Ingresar la nueva contraseña:</label>
                        <input type="text" name="nueva_contraseña" class="login__input" required>
                        <label for="form_input" class="form_input">Confirme la nueva contraseña:</label>
                        <input type="text" name="confirmar_contraseña" class="login__input" required>
                    </div>
                </div>  
                <button type="button" class="btn-cambiar" id="btnCambiar">Cerrar formulario</button>
                <div class="btn-confirmar" id="btnConfirmarcontra">
                    <button type="submit" class="btn-actu">
                        Confirmar
                    </button>
                </div>
            </form>
        </div>    
    </div>
    <div class="alerta" id="alerta" style="display: none;">
        <div class="mensaje">
            <p>¡Contraseña actualizada con éxito!</p>
        </div>   
        <div class="imagen">
            <img src="" alt="Señal de aprobación">
        </div>
         
    </div>
    </main> 
</div>
<script src="../../../Proyecto_SendApp_2024/scripts/componentesJS/formPerfiles.js"></script> 