<div class="table_div" id="table_div">
    <h1 id="titulo_citas">Confirmar Citas</h1>
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th> 
                <th>Jornada</th>
               <th>Asistencia</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            $funcionario = $_SESSION["documento_identidad"];
            $search_confirmarCitas = '';

            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }

            if (isset($_GET['search-confirmarCitas']) && $_GET['search-confirmarCitas'] != '' ){
                $search_confirmarCitas = $_GET['search-confirmarCitas'];

                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='aceptado'AND citas.confirmacion IS NULL AND (citas.documento_usuario LIKE '$search_confirmarCitas%'  OR usuarios.nombres LIKE '$search_confirmarCitas%' OR usuarios.apellidos LIKE '$search_confirmarCitas%') ORDER BY citas.id_cita ASC ";

            } else {
                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='aceptado'AND citas.confirmacion IS NULL ORDER BY citas.id_cita ASC ";
            }
            
            $result = mysqli_query($conn, $sql);

            if ($result === false) {
                die("Error en la consulta: " . mysqli_error($conn));
            }

            elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $accepted = $row['estado_cita'] === 'aceptado';
                    $rejected = $row['estado_cita'] === 'rechazado';
            ?>
                    <tr id="row_<?= $row['documento_identidad'] ?>" <?php if ($accepted || $rejected) echo 'style="background-color: #f2f2f2;"'; ?>>
                        <td><?= $row['documento_identidad'] ?></td>
                        <td><?= $row['nombres'] ?></td>
                        <td><?= $row['apellidos'] ?></td>
                        <td><button onclick="verDescripcion4(<?= $row['id_cita'] ?>);">Descripcion</button></td>
                       
                        <td><?= $row['jornada'] ?></td>
                        <td class="asistio">
                            <button class="button asistio <?php if (!$accepted) echo 'disabled'; ?>" onclick="confirmarCita(<?= $row['id_cita'] ?>)" <?php if (!$accepted) echo 'disabled'; ?>>Asistió</button>
                            <button class="button ausente <?php if (!$accepted) echo 'disabled'; ?>" onclick="openModal('cancelacion', <?= $row['id_cita'] ?>)" <?php if (!$accepted) echo 'disabled'; ?>>Ausente</button>
                       
                            
                            <div class="alerta" id="alerta1" style="display: none;">
                                <div class="modalA">
                                    <div class="barra"></div>
                                    <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
                                    <h1 class="tituloM"></h1>
                                    <p class="descripcionM">Asistencia confirmada con exito</p>
                                </div>
                            </div>
                            
                            <!-- Modal para decir que no asistio la cita -->
                            <div id="modal_cancelacion_<?= $row['id_cita'] ?>" class="modal">
                                <div class="modal-content">
                                    <!-- Botón para cerrar el modal -->
                                    <span class="close" onclick="closeModal('cancelacion_<?= $row['id_cita'] ?>')">&times;</span>
                                    
                                    <!-- Resto del contenido del modal -->
                                    <form id="cancelForm_<?= $row['id_cita'] ?>" onsubmit="submitCancellationForm(<?= $row['id_cita'] ?>); return false;">
                                        <input type="hidden" name="id_cita" value="<?= $row['id_cita'] ?>">
                                        <label for="nombre_cancelacion_<?= $row['id_cita'] ?>">Nombre:</label>
                                        <input type="text" id="nombre_cancelacion_<?= $row['id_cita'] ?>" name="nombre" value="<?= $row['nombres'] ?>" disabled>
                                        <label for="descripcion_cancelacion_<?= $row['id_cita'] ?>">Descripción de la cita:</label>
                                        <input type="text" id="descripcion_cancelacion_<?= $row['id_cita'] ?>" name="descripcion" value="<?= $row['descripcion'] ?>" disabled>
                                        <label for="justificacion_cancelacion_<?= $row['id_cita'] ?>">Justificación por inasistencia del usuario:</label>
                                        <span id="charCount_<?= $row['id_cita'] ?>">0/1000</span>
                                        <input type="text" id="justificacion_cancelacion_<?= $row['id_cita'] ?>" name="justificacion" class="justificacion" placeholder="Escribe aquí tu justificación" required>
                                        

                                        <button type="submit" class="button danger">Enviar</button>

                                        <div class="alerta" id="alerta2" style="display: none;">
                                            <div class="modalA">
                                                <div class="barra"></div>
                                                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
                                                <h1 class="tituloM"></h1>
                                                <p class="descripcionM">Justificacion inasistencia enviada</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                       
                    </tr>
            <?php
                }
            } elseif ($search_confirmarCitas != '' && mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='6'>No se encontro ningun resultado de busqueda.</td></tr>";
            }
            
            else {
                echo "<tr><td colspan='6'>No se encontraron citas pendientes.</td></tr>";
            }

            // mysqli_close($conn);
            ?>
        </tbody>
    </table>

</div>

<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>// Evento de teclado (input) para el conteo de los caracteres de la descripcion de la cita
document.addEventListener('DOMContentLoaded', (event) => {
    const textareas = document.querySelectorAll('.justificacion');

    textareas.forEach(textarea => {
        const charCount = document.getElementById(`charCount_${textarea.id.split('_').pop()}`);

        textarea.addEventListener('input', () => {
            const currentLength = textarea.value.length;
            charCount.textContent = `${currentLength}/1000`;

            if (currentLength >= 1000) {
                textarea.value = textarea.value.substring(0, 999);
            }
        });
    });
});
</script>