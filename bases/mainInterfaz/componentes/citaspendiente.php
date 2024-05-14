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
                                <div id="modal_<?= $row['id_cita'] ?>" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal(<?= $row['id_cita'] ?>)">&times;</span>
                                        <form id="form_<?= $row['id_cita'] ?>" class="modal-form" action="rechazarcita.php" method="post">
                                            <input type="hidden" name="id_cita" value="<?= $row['id_cita'] ?>">
                                            <!-- Otros campos del formulario -->
                                            <button type="button" onclick="submitForm(<?= $row['id_cita'] ?>)" class="button danger <?php if ($accepted || $rejected) echo 'disabled'; ?>">Enviar</button>
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
    </main>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>