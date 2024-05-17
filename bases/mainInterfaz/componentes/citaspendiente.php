<div class="table_div">
    <table>
        <thead>
            <tr>
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th>
                <th>Acciones</th>
                <th>Jornada</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }
            $funcionario = $_SESSION["documento_identidad"];
            $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita 
                    FROM citas
                    INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad WHERE citas.usuario_f= $funcionario";

            $result = mysqli_query($conn, $sql);

            if ($result === false) {
                die("Error en la consulta: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $accepted = $row['estado_cita'] === 'aceptado';
                    $rejected = $row['estado_cita'] === 'rechazado';
            ?>
                    <tr id="row_<?= $row['documento_identidad'] ?>" <?php if ($accepted || $rejected) echo 'style="background-color: #f2f2f2;"'; ?>>
                        <td><?= $row['documento_identidad'] ?></td>
                        <td><?= $row['nombres'] ?></td>
                        <td><?= $row['apellidos'] ?></td>
                        <td><?= $row['descripcion'] ?></td>
                        <td class="actions">
                            <button class="button <?php if ($accepted || $rejected) echo 'disabled'; ?>" onclick="aceptarCita(<?php echo $row['documento_identidad']; ?>, <?php echo $row['id_cita']; ?>)" <?php if ($accepted || $rejected) echo 'disabled'; ?>>Aceptar</button>
                            <button class="button danger <?php if ($accepted || $rejected) echo 'disabled'; ?>" onclick="openModal(<?= $row['id_cita'] ?>)" <?php if ($accepted || $rejected) echo 'disabled'; ?>>Rechazar</button>
                            <!-- Modal para rechazar la cita -->
                            <div id="modal_<?= $row['id_cita'] ?>" class="modal">
                                <div class="modal-content">
                                    <!-- Botón para cerrar el modal -->
                                    <span class="close" onclick="closeModal(<?= $row['id_cita'] ?>)">&times;</span>
                                    <!-- Formulario para justificar el rechazo de la cita -->
                                    <form id="form_<?= $row['id_cita'] ?>" class="modal-form" method="post">
                                        <input type="hidden" name="id_cita" value="<?= $row['id_cita'] ?>">
                                        <!-- Campo para mostrar el nombre del usuario -->
                                        <label for="nombre_<?= $row['id_cita'] ?>">Nombre:</label>
                                        <input type="text" id="nombre_<?= $row['id_cita'] ?>" name="nombre" value="<?= $row['nombres'] ?>" disabled>
                                        <!-- Campo para mostrar la descripción de la cita -->
                                        <label for="descripcion_<?= $row['id_cita'] ?>">Descripción de la cita:</label>
                                        <input type="text" id="descripcion_<?= $row['id_cita'] ?>" name="descripcion" value="<?= $row['descripcion'] ?>" disabled>
                                        <!-- Campo para justificar el rechazo -->
                                        <label for="justificacion_<?= $row['id_cita'] ?>">Justificación:</label>
                                        <input type="text" id="justificacion_<?= $row['id_cita'] ?>" name="justificacion" placeholder="Escribe aquí tu justificación" required>
                                        <div style="margin-top: 10px;">
                                            <!-- Botón para enviar el formulario -->
                                            <button type="button" onclick="submitForm(<?= $row['id_cita'] ?>)" class="button danger <?php if ($accepted || $rejected) echo 'disabled'; ?>">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td><?= $row['jornada'] ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>No se encontraron citas pendientes.</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
