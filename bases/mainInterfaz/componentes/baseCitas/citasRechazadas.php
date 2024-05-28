
<div class="table_div" id="table_rechazadas">

    
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th>
                <th>Justificación Rechazo</th>
                <th>Jornada</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }
            $funcionario = $_SESSION["documento_identidad"];
            $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion, citas.justificacion_rechazo 
            FROM citas
            INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='rechazado' ORDER BY citas.id_cita ASC ";
    
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
                        <td><?= $row['justificacion_rechazo'] ?></td>

                        <td><?= $row['jornada'] ?></td>
                            
                             

                            <!-- Modal para cancelar la cita -->
                          
                                    <!-- Resto del contenido del modal -->
                                   
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



<script>
   function mostrarCitasPendientes() {
    location.reload();
  
}


</script>