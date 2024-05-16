<?php


 $conn = connection();

if (isset($_SESSION['documento_identidad'])) {
    $documento_identidad = $_SESSION['documento_identidad'];

    if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    $sql = "SELECT 
    citas.*, 
    servicios.nombre_servicio, 
    usuarios.nombres AS nombre_funcionario_cita,
    usuarios.apellidos AS apellido_funcionario_cita
     FROM citas 
     INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
     INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
     WHERE citas.documento_usuario = '$documento_identidad'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Aquí se abre el único contenedor de cuadrícula
            ?>
            <div class="notifications-panel">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $hora_formato_12 = date("h:i A", strtotime($row['hora']));
                ?>
                <div class="notifications">
                    <figure>
                        <img src="../../Styles/Img/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                    <span></span>
                    <article>
                        <p>Área: <?= $row['nombre_servicio'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Día:<?= $row['fecha'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Hora: <?=$hora_formato_12   ?> </p>
                    </article>
                    <span></span>
                    <article>
                        <p>Estado: <?= $row['estado_cita'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Motivo: <?= $row['descripcion'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>jornada: <?= $row['jornada'] ?></p>
                    </article>
                    <span></span>
                    <article>
                    <p>  Funcionario: <?= $row['nombre_funcionario_cita'] . ' ' . $row['apellido_funcionario_cita'] ?></p>


                    </article>
                </div>
                <?php
            }
            ?>
            </div> <!-- Aquí se cierra el único contenedor de cuadrícula -->
            <?php
        } else {
            ?>
            <article>
                <p>No se encontraron citas para mostrar a este usuario.</p>
            </article>
            <?php 
        }
    } else {
        ?>
        <article>
            <p>Error al encontrar los datos.</p>
        </article>
        <?php
    }
}
?>
