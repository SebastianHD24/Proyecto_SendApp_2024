<div class="table_div" >  
    <h1 id="titulo_citas">Citas Asistidas</h1>  
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th>Documento de Identidad</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descripción de la cita</th>
                <th>Confirmación</th>
                <th>Jornada</th>
              
            </tr>
        </thead>
        <tbody>
            <?php
            $funcionario = $_SESSION["documento_identidad"];
            $search_term_asistidas = '';
            if (!$conn) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }

            if(isset($_GET['search-asistidas']) && $_GET['search-asistidas'] != '') {
                $search_term_asistidas = $_GET['search-asistidas']; 
                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.confirmacion= 'Si asistió' AND citas.estado_cita = 'aceptado' AND (citas.documento_usuario LIKE '$search_term_asistidas%'  OR usuarios.nombres LIKE '$search_term_asistidas%' OR usuarios.apellidos LIKE '$search_term_asistidas%') ORDER BY citas.id_cita ASC ";
            } else {
                $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                FROM citas
                INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.confirmacion = 'Si asistió' AND citas.estado_cita = 'aceptado' ORDER BY citas.id_cita ASC ";
    
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
                        <td><button onclick="verDescripcion2(<?= $row['id_cita'] ?>);">Descripcion</button></td>
                        <td><?= $row['confirmacion'] ?></td>
                        <td><?= $row['jornada'] ?></td>
                        
            <?php
                }
            } elseif ($search_term_asistidas != '' && mysqli_num_rows($result) == 0){
                echo "<tr><td colspan='6'>No se encontro ningun resultado de busqueda.</td></tr>";  
            } 
            
            else {
                echo "<tr><td colspan='6'>No se encontraron citas donde hayan asistido.</td></tr>";
            }
            // mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>
function volver() {
    // document.getElementById('table_rechazadas').style.display = 'none';
    // document.getElementById('pendientesContent').style.display = 'block';
    // document.getElementById('organizar_citas').style.display = 'none';
    location.reload();
}

</script>