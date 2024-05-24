    <!-- Contenedor del formulario de los datos de su cuenta -->
    <div class="container" id="formularioPrincipal">

        <!-- Segundo contenedor del formulario de los datos de su cuenta -->
        <div class="second-container">

            <!-- Cabecera del formulario cambiar datos -->
            <div class="header">
                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/LogoSenaVerde.png" alt="Logo" class="login_img">
                <h1 class="login__title">Datos de su cuenta</h1>
                <span class="inputGeneral oculto"></span>
            </div>

            <!-- Formulario cambiar datos -->
            <form method="POST" class="login__form datos_cuenta">
                <div class="main-form">
                        <div class="first-section">
                            <label for="form_input" class="form_input">Documento Identidad:</label>
                            <input type="text" name="documento_identidad" class="login__input" value="<?= $row_user['documento_identidad']?>" disabled placeholder="Documento que lo identifica">
                            <label for="form_input" class="form_input">Nombre:</label>
                            <input type="text" name="nombres" class="login__input" value="<?= $row_user['nombres']?>" disabled placeholder="Su 'nombre'">
                            <label for="form_input" class="form_input">Apellidos:</label>
                            <input type="text" name="apellidos" class="login__input" value="<?= $row_user['apellidos']?>" disabled placeholder="Su(s) 'apellido(s)'">
                            <span class="inputCorreo oculto"></span>
                            <label for="form_input" class="form_input">Correo Electrónico:</label>
                            <input type="email" name="correo" class="login__input" value="<?= $row_user['correo']?>" id="correo" required placeholder="Correo electronico para contactarlo">
                            <span class="inputTelefono oculto"></span>
                            <label for="form_input" class="form_input">Celular:</label>
                            <input type="text" name="celular" class="login__input" value="<?= $row_user['celular']?>" id="celular" required placeholder="Numero telefonico para contactarlo">
                        </div>
                        <div class="second-section">
                        <?php
                            $rol = $row_user['id_rol'];
                            $consulta = mysqli_query($conn, "SELECT * FROM roles WHERE id_rol = $rol AND LOWER(nombre_rol) = 'aprendiz'");
                            $es_aprendiz = mysqli_num_rows($consulta) > 0;

                            if ($es_aprendiz) :
                        ?>
                            <?php
                                $programa = $row_user['programa'];
                                $ficha = $row_user['ficha'];
                                if (str_replace(' ', '', $programa) == '' || $programa == null){ 
                                    $programa = "No perteneces a ningun programa";
                                }
                                if ($ficha <= 0 || $ficha == null){
                                    $ficha = "No pertenece a ninguna ficha";
                                }
                            ?>
                            <label for="form_input" class="form_input">Programa:</label>
                            <input type="text" name="programa" class="login__input" value="<?= $programa?>" disabled placeholder="Programa en el que estudia">   
                            <label for="form_input" class="form_input">Ficha:</label>
                            <input type="text" name="ficha" class="login__input" value="<?= $ficha?>" disabled placeholder="Ficha a la que pertenece">
                        <?php endif; ?>
                        <?php
                            $rol = $row_user['id_rol'];
                            $consulta = mysqli_query($conn, "SELECT * FROM roles WHERE id_rol = $rol AND LOWER(nombre_rol) = 'funcionario'");
                            $es_funcionario = mysqli_num_rows($consulta) > 0;

                        if ($es_funcionario) :
                        ?>
                            <?php
                                $id_servicio = $row_user['id_servicio'];
                                if ($id_servicio != null): 
                                    $consulta = mysqli_query($conn, "SELECT * FROM servicios WHERE id_servicio = $id_servicio");
                                    $area = mysqli_fetch_array($consulta);
                                    $area = $area['nombre_servicio'];
                                else:
                                    $area = "No perteneces a ningun servicio";
                                
                                endif;
                            ?>
                                <label for="form_input" class="form_input">Servicio:</label>
                                <input type="text" name="servicio" class="login__input" value="<?= $area ?>" disabled placeholder="Servicio al que pertenece">
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

    <!-- Contenedor del formulario para cambiar su contraseña -->
    <div class="cambiar-contraseña" style="display: none;" id="cambiarContraseña">

        <!-- Segundo contenedor del formulario para cambiar su contraseña -->     
        <div class="container-contraseña">

            <!-- Cabecera del formulario para cambiar su contraseña -->
            <div class="header-contraseña">
                <h1 class="login__title">Cambiar Contraseña</h1>
                <span class="mensajeContraseña oculto"></span>
            </div>

            

            <!-- Formulario para cambiar su contraseña -->
            <form method="POST" class="login__form formCambiarContraseña">
                <div class="main-form2">
                    <div class="first-section">
                        <label for="form_input" class="form_input">Ingresar la contraseña actual:</label>
                        <input type="text" name="contraseña_actual" class="login__input" required placeholder="Contraseña actual de su cuenta">
                        <label for="form_input" class="form_input">Ingresar la nueva contraseña:</label>
                        <input type="text" name="nueva_contraseña" class="login__input" required placeholder="Contraseña nueva que desea">
                        <label for="form_input" class="form_input">Confirme la nueva contraseña:</label>
                        <input type="text" name="confirmar_contraseña" class="login__input" required placeholder="Ingrese la contraseña nueva otra vez">
                    </div>
                </div>  
                
                <div class="btn-confirmar" id="btnConfirmarcontra">
                    <button type="submit" class="btn-actu">
                        Confirmar
                    </button>
                </div>
                <div class="cerrar">
                    <button type="button" class="btn-cambiar" id="btnCambiar">Cerrar formulario</button>
                </div>    
            </form>
        </div>    
    </div>

    <!-- Ventana emergente despues de una actualizacion. -->
    <div class="alerta" id="alerta" style="display: none;">
        <div class="mensaje">
            <p>¡Actualización exitosa!</p>
        </div>   
        <div class="imagen">
            <img src="imagenes/Componentes-img/senal-aprobada.png" alt="Señal de aprobación">
        </div>
    </div>
    </main> 
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/formPerfiles.js"></script> 