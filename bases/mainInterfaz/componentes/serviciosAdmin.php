<!------------------------Titulo de los servicios------------------------->
<h1 class="tituloDeInicioH1">Lista de Servicios</h1>

<!-----------------------Parrafo descriptivo del inicio de servicios-->
<article class="articuloContenedorDeParrafos">
    <p>Bienvenido a la sección de servicios, aquí podrás cambiar los administradores de cada área,cambiar su estado de <b>Activo o Inactivo</b> y consultar sus datos personal</p>
</article>

<!-- Tabla con la info sobre los servicios y acciones que se pueden realizar con ellos -->
    <div class="tablaServicios">

        <!--Logo de SendApp del Inicio de servicios-->
        <!-- <figure class="contenedor__imagen-inicio">
            <img src="\Proyecto_SendApp_2024\imagenes\LogosSena-img\SendApp.png" alt="Logo de SendApp">
        </figure> -->

        <?php
        $listaServicios = "SELECT * FROM servicios";
        $ConGod = mysqli_query($conn, $listaServicios);

        // Verificar si hay registros de servicios
        if ($ConGod->num_rows == 0):
            echo "<p> No hay servicios en este momento </p>";
        else:
            $posicion = 0;
            ?>
            <!--Tabla contenedora que muestra la información estraida de la base de datos-->
            <div class="tabla__datos-grid">
            <?php
            while ($servicios = mysqli_fetch_array($ConGod)):
            ?>

            <section class="seccion_informacion_servicios">
                <!-- Articúlo 1 con el contenido del Nombre del servicio -->
                <article class="nombre__servicio">
                    <h3 class="nombre__campo-subtitulo">Nombre Del Servicio</h3>
                        <p class="datos__parrafo" id="nombreServicio">
                        <?= $servicios['nombre_servicio'] ?>
                        </p>
                        <span class="mensajeCambio oculto"></span>
                    <button id="aceptarCambios" onclick="actualizarAdmin(<?= $servicios['id_servicio']; ?>, <?= $posicion; ?>);" class="Boton__acciones">Cambiar admin del área</button>
                </article>

                <!-- Articúlo 2 con el contenido del nombre del administrador-->
                <article class="nombre__administrador">
                    <h3 class="nombre__campo-subtitulo">Nombre Del Admin </h3>
                        <p class="datos__parrafo" id="nombreServicio">
                            <?php
                                $documento_identidad = $servicios['admin_area'];
                                if ($documento_identidad == null){
                                    echo "Este servicio no cuenta con un admin";
                                    $documento_identidad = 0;
                                } else {
                                    $consulta_admin = "SELECT id_servicio, estado, CONCAT(nombres, ' ', apellidos) AS nombre_completo FROM usuarios WHERE documento_identidad = $documento_identidad";
                                    $consulta_a = mysqli_query($conn, $consulta_admin);
                                    if ( mysqli_num_rows($consulta_a) > 0) {
                                        $admin = mysqli_fetch_array($consulta_a);
                                        if ($admin['id_servicio'] == $servicios['id_servicio'] && $admin['estado'] == 1){
                                            echo $admin['nombre_completo'];
                                        } else {
                                            $idServicio = $servicios['id_servicio'];
                                            $actualizacion = mysqli_query($conn, "UPDATE servicios SET admin_area = null WHERE id_servicio = $idServicio");
                                            echo "Este servicio no cuenta con un admin";
                                            $documento_identidad = 0;
                                        }
                                    }
                                }
                                ?>
                        </p>
                    <button id="consultarAdmin" onclick="consultar(<?= $documento_identidad; ?>, '<?= $servicios['nombre_servicio']; ?>');" class="Boton__acciones">Consultar datos del admin</button>
                </article>

                    <!-- Articúlo 3 con el contenido del estado del servcio -->
                <article class="estado__servicio">
                    <h3 class="nombre__campo-subtitulo">Estado Del Servicio</h3>
                        <p class="datos__parrafo" id="nombreServicio">
                            <?php
                                    if ($servicios['estado_servicio'] == 1){
                                        echo "Activo";
                                    } else {
                                        echo "Inactivo";
                                    }
                                ?>
                        </p>
                    <button id="cambiarEstado" onclick="actualizarEstado(<?= $servicios['id_servicio'] ?>);" class="Boton__acciones">Cambiar estado de usuario</button>
                </article>

                <!-- Articúlo 4 con el contenido para asignas a un funcionario -->
            <article class="asignar__encargado">
                <h3 class="nombre__campo-subtitulo">Asignar Encargado</h3>
                    <select name="admin" class="posibles_admin">
                            <option selected>-</option>
                            <?php
                                $id_servicio = $servicios['id_servicio'];
                                $consulta_funcionarios = "SELECT documento_identidad, CONCAT(nombres, ' ', apellidos) AS nombre_completo, estado FROM usuarios WHERE id_servicio = $id_servicio";
                                $consulta_f = mysqli_query($conn, $consulta_funcionarios);
                                $hayFuncionarios = false; // Variable para indicar si hay funcionarios
                                if (mysqli_num_rows($consulta_f) != 0):
                                    while ($funci = mysqli_fetch_array($consulta_f)):
                                        if ($funci['estado'] != 0 && $servicios['admin_area'] != $funci['documento_identidad']):
                                            $hayFuncionarios = true;
                                            ?>
                                            <option value="<?= $funci['documento_identidad'] ?>">
                                                <?= $funci['nombre_completo'] ?> - <?= $funci['documento_identidad'] ?>
                                            </option>
                                            <?php
                                        endif;
                                    endwhile;
                                endif;
                            
                                if (!$hayFuncionarios):
                                    ?>
                                    <option disabled>No hay funcionarios disponibles</option>
                                    <?php
                                endif;
                            ?>
                        </select>
                </article>
            </section>
                    <?php $posicion++; ?>
                    <?php endwhile; ?>
            </div>
        <?php endif; ?>     
    </div>

    <!-- Contenedor con la información del administrador -->
        <div class="popUp oculto">
            <div class="contenedor_informacion">
            <h4 id="tituloServicio"></h4>
            <table class="tablaAdmin">
                <thead>
                    <tr>
                        <th>Nombre:</th>
                        <th>Apellido:</th>
                        <th>Correo:</th>
                        <th>Celular:</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <h4 class="mensajeAdmin">Este servicio no cuenta con un admin</h4>
            <button onclick="" class="cerrar">Cerrar</button>
            </div>
        </div>

        <!-- Ventana emergente para confirmar accion de cambios. -->
        <div class="fondoPopUp oculto">
            <div class="popUpSeguro">
                <h4>¿Estas seguro de realizar los cambios?</h4>
                <div id="botones">
                    <button class="confirmacionAd afir">Si</button>
                    <button class="confirmacionAd nega">No</button>
                </div>
            </div>
        </div>

        <!-- Ventana emergente despues de una actualizacion. -->
        <div class="alerta" id="alerta" style="display: none;">
            <div class="mensaje">
                <p>¡Actualización exitosa!</p>
            </div>   
            <div class="imagen">
                <img src="/xampp/htdocs/Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/senal-aprobada.png" alt="Señal de aprobación">
            </div>
        </div>
    </main>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/actualizarServicios.js"></script>