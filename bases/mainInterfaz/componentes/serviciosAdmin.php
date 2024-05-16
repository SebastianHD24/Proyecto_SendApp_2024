    <!-- Tabla con la info sobre los servicios y acciones que se pueden realizar con ellos -->
    <div class="tablaServicios">
        <?php
        $listaServicios = "SELECT * FROM servicios";
        $ConGod = mysqli_query($conn, $listaServicios);

        // Verificar si hay registros de servicios
        if ($ConGod->num_rows == 0):
            echo "<h1> No hay servicios en este momento </h1>";
        else:
            $posicion = 0;
            ?>
            <h2>Lista de servicios</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre del Servicio</th>
                        <th>Administrador</th>
                        <th>Estado del servicio</th>
                        <th>Asignar admin</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($servicios = mysqli_fetch_array($ConGod)):
                    ?>
                    <tr>
                        <th id="nombreServicio">
                            <?= $servicios['nombre_servicio'] ?>
                        </th>
                        <th class="nombreAdmin">
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
                        </th>
                        <th
                            class="estadoActual" 
                        >
                            <?php
                                if ($servicios['estado_servicio'] == 1){
                                    echo "Activo";
                                } else {
                                    echo "Inactivo";
                                }
                            ?>
                        </th>
                        <th>
                        <select name="admin" class="posibles_admin">
                            <option selected>-</option>
                            <?php
                                $id_servicio = $servicios['id_servicio'];
                                $consulta_funcionarios = "SELECT documento_identidad, id_rol, CONCAT(nombres, ' ', apellidos) AS nombre_completo, estado FROM usuarios WHERE id_servicio = $id_servicio";
                                $consulta_f = mysqli_query($conn, $consulta_funcionarios);
                                $hayFuncionarios = false; // Variable para indicar si hay funcionarios
                                if (mysqli_num_rows($consulta_f) != 0):
                                    while ($funci = mysqli_fetch_array($consulta_f)):
                                        if ($funci['estado'] != 0 && $servicios['admin_area'] != $funci['documento_identidad'] && $funci['id_rol'] == 2):
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
                        </th>
                        <th>
                            <span class="mensajeCambio oculto"></span>
                            <button id="aceptarCambios" onclick="actualizarAdmin(<?= $servicios['id_servicio']; ?>, <?= $posicion; ?>);">Cambiar admin</button>
                        </th>
                        <th>
                            <button id="cambiarEstado" onclick="actualizarEstado(<?= $servicios['id_servicio'] ?>);">Cambiar estado</button>
                        </th>
                        <th>
                            <button id="consultarAdmin" onclick="consultar(<?= $documento_identidad; ?>, '<?= $servicios['nombre_servicio']; ?>');">Consultar datos del admin</button>
                        </th>
                    </tr>
                    <?php $posicion++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <!-- Contenedor con la info (o no) del administrador -->
        <div class="popUp oculto">
            <h1 id="tituloServicio"></h1>
            <table class="tablaAdmin">
                <thead>
                    <tr>
                        <th>Foto de perfil</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
            <h1 class="mensajeAdmin">Este servicio no cuenta con un admin</h1>
            <button onclick="" class="cerrar">Cerrar</button>
        </div>

        <!-- Ventana emergente para confirmar accion. -->
        <div class="fondoPopUp oculto">
            <div class="popUpSeguro">
                <h2>¿Seguro que desea realizar los cambios?</h2>
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
                <img src="" alt="Señal de aprobación">
            </div>
        </div>
    </main> 
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/actualizarServicios.js"></script>