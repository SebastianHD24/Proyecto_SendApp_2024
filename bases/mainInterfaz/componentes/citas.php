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
               
                ?>
                <div class="notifications">
                    <figure>
                        <img src="../../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                    <span></span>
                    <article>
                        <b>
                            Área: 
                        </b>
                        <p>
                            <?= $row['nombre_servicio'] ?>
                        </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Día: </b>
                        <p>
                            <?= $row['fecha'] ?>
                        </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Hora: </b>
                        <p>
                            <?= $row['hora']  ?> 
                        </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Estado: </b>
                            <b class="tipo__estado"> 
                                <?= $row['estado_cita'] ?>
                            </b>
                    </article>
                    <span></span>
                    <article>
                        <b>Jornada: </b>
                        <p>
                            <?= $row['jornada'] ?>
                        </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Funcionario: </b>
                        <p>
                            <?= $row['nombre_funcionario_cita'] . ' ' . $row['apellido_funcionario_cita'] ?>
                        </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Motivo: </b>
                        <p>
                            <?= $row['descripcion'] ?>
                        </p>
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
    </main>
</div>
<script>
    let tipoDeEstadoCita = document.querySelectorAll('.tipo__estado');

    console.log(tipoDeEstadoCita);

    tipoDeEstadoCita.forEach(datoActual  => {
        if(datoActual.textContent = 'pendiente')
            {
                datoActual.classList.add('estado_pendiente');
            }
            else if(datoActual.textContent = 'rechazado')
            {
                datoActual.classList.add('estado_rechazado');
            }else
            {
                datoActual.classList.add('.estado_aceptado')
            }
    });

</script>
