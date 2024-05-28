<div class="organizar_citas" id="organizar_citas" >
    <nav>
        <ul>
        <a class="citasRechazadas" href="javascript:void(0);" onclick="mostrarCitasRechazadas();"  >Citas rechazadas</a>
        <a class="citasNoAsistidas" href="javascript:void(0);" onclick="mostrarCitasNoAsistidas();"  >Citas No-asistidas</a>
       

        </ul>
    </nav>

</div>
<h1 id="titulo_citas">Citas pendientes</h1>

<div class="table_div" id="table_Asistidas">
    
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
                        
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>No se encontraron citas donde hayan asistido.</td></tr>";
            }

            // mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>

</script>
