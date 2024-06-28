<div class="table_div" id="table_rechazadas"> 
    <h1 id="titulo_citas"> Citas rechazadas</h1>  
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th>
                <th>Justificación Rechazo</th>
                <th>Jornada</th>
                <th>Fecha Rechazo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $funcionario = $_SESSION["documento_identidad"];
            $search_term_rechazadas = '';
            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }

            if (isset($_GET['search-rechazadas']) && $_GET['search-rechazadas'] != '' ){
                $search_term_rechazadas = $_GET['search-rechazadas'];

                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion, citas.justificacion_rechazo, citas.fecha
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='rechazado' AND (citas.documento_usuario LIKE '$search_term_rechazadas%'  OR usuarios.nombres LIKE '$search_term_rechazadas%' OR usuarios.apellidos LIKE '$search_term_rechazadas%') ORDER BY citas.id_cita ASC ";
            }else {
                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion, citas.justificacion_rechazo, citas.fecha 
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='rechazado' ORDER BY citas.id_cita ASC ";
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
                        <td><button onclick="verDescripcion1(<?= $row['id_cita'] ?>);">Descripcion</button></td>
                        <td><button onclick="verJustificacion(<?= $row['id_cita'] ?>);">Justificación</button></td>

                        <td><?= $row['jornada'] ?></td>
                        <td><?= $row['fecha'] ?></td>    
                             

                            <!-- Modal para cancelar la cita -->
                          
                                    <!-- Resto del contenido del modal -->
                                   
                                </div>
                            </div>
                        </td>
                        
                    </tr>
            <?php
                }
            } elseif ($search_term_rechazadas != '' && mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='6'>No se encontró ningún resultado de búsqueda.</td></tr>";
            } 
            
            else {
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