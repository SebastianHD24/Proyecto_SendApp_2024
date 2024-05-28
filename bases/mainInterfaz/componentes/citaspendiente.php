<div class="organizar_citas" id="organizar_citas" >
    <nav>
        <ul>
        <a class="citasRechazadas" onclick="ocultarTablaYMostrarRechazadas();"   >Citas rechazadas</a>
        <a class="citasAsistidas" onclick="ocultarTablaYMostrarAsistidas();"   >Citas  asistidas</a>
        <a class="citasNoAsistidas" href="javascript:void(0);" "  >Citas No-asistidas</a>
       

        </ul>
    </nav>

</div>
<!-- <h1 id="titulo_citas">Citas pendientes</h1> -->

<div class="table_div" id="table_div">
    
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th>
                <th>Confirmación</th>
                <th>Jornada</th>
               <th>Asistencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }
            $funcionario = $_SESSION["documento_identidad"];
            $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
            FROM citas
            INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' ORDER BY citas.id_cita ASC ";
    
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
                        <td><?= $row['confirmacion'] ?></td>
                        <td><?= $row['jornada'] ?></td>
                        <td class="asistio">
                            <a class="button asistio <?php if (!$accepted) echo 'disabled'; ?>" onclick="confirmarCita(<?= $row['id_cita'] ?>)" <?php if (!$accepted) echo 'disabled'; ?>>Asistió</a>
                            <button class="button ausente <?php if (!$accepted) echo 'disabled'; ?>" onclick="openModal('cancelacion', <?= $row['id_cita'] ?>)" <?php if (!$accepted) echo 'disabled'; ?>>Ausente</button>
                        <td class="actions">
                            <button class="button aceptar<?php if ($accepted || $rejected) echo 'disabled'; ?>" onclick="aceptarCita(<?php echo $row['documento_identidad']; ?>, <?php echo $row['id_cita']; ?>)" <?php if ($accepted || $rejected) echo 'disabled'; ?>>Aceptar</button>
                            <button class="button rechazar <?php if ($accepted || $rejected) echo 'disabled'; ?>" onclick="mostrarFormularioRechazo(<?= $row['id_cita'] ?>)" <?php if ($accepted || $rejected) echo 'disabled'; ?>>Rechazar</button>
                            
                            
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
                                        <div class="button_ausente">
                                            <!-- Botón para enviar el formulario -->
                                            <button type="button" onclick="submitForm(<?= $row['id_cita'] ?>)" class="button danger <?php if ($accepted || $rejected) echo 'disabled'; ?>">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Modal para cancelar la cita -->
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
                                        <label for="justificacion_cancelacion_<?= $row['id_cita'] ?>">Justificación:</label>
                                        <input type="text" id="justificacion_cancelacion_<?= $row['id_cita'] ?>" name="justificacion" placeholder="Escribe aquí tu justificación" required>
                                        <button type="submit" class="button danger">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                       
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>No se encontraron citas pendientes.</td></tr>";
            }

            // mysqli_close($conn);
            ?>
        </tbody>
    </table>

</div>



<div class="rechazadasContent oculto "  >
    
    <?php include (__DIR__ .'/baseCitas/citasRechazadas.php'); ?>
    
</div>



<div class="AsistidasContent oculto"  >
    <?php  include (__DIR__ .'/baseCitas/citasAsistidas.php'); 
    ?>
    
</div>






<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>
let ocultarDiv = document.querySelector('.table_div');
let mostrarDivRechazadas = document.querySelector('.rechazadasContent');
let mostarDivAsistidas = document.querySelector('.AsistidasContent');

    function ocultarTablaYMostrarRechazadas() {
        ocultarDiv.classList.add('oculto');
        mostrarDivRechazadas.classList.remove('oculto');
    };

    function volverRechazadas() {
        ocultarDiv.classList.remove('oculto');
        mostrarDivRechazadas.classList.add('oculto');
    }; 

    function ocultarTablaYMostrarAsistidas() {
        ocultarDiv.classList.add('oculto');
        mostarDivAsistidas.classList.remove('oculto');
    };

    function volverAsistidas() {
        ocultarDiv.classList.remove('oculto');
        mostrarDivAsistidas.classList.add('oculto');
    }; 
   





</script>
