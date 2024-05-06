<?php


// $conn = connection();

if (isset($_SESSION['documento_identidad'])) {
    $documento_identidad = $_SESSION['documento_identidad'];

    if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM citas WHERE documento_usuario = '$documento_identidad'";
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
                        <img src="../../Styles/Img/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                    <span></span>
                    <article>
                        <p>Área: Coordinación Académica</p>
                    </article>
                    <span></span>
                    <article>
                        <p>Día:<?= $row['fecha'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Hora:<?= $row['hora'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Estado:<?= $row['estado_cita'] ?></p>
                    </article>
                    <article>
                        <p>Motivo: <?= $row['descripcion'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Funcionario: Jorge Padilla Agudelo Prada</p>
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
