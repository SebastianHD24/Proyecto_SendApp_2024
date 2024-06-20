<button class="verHistorial" id="historial" onclick="verHistorial();"  href="#">Ver historial</button>
<button  class="salirHistorial" id="volver" href="#"  onclick="regresar();"  style="display: none;">Regresar</button>

<?php

if (isset($_SESSION['documento_identidad'])) {
    $documento_identidad = $_SESSION['documento_identidad'];



    //  en esta consulta estamos llamando los datos que necesitamos y todos los de citas uniendolos con la tabla usuarios y servicios para extraer los datos necesarios en este estamos limitando  a que sean 6 
    $sql = "SELECT 
    citas.*, 
    servicios.nombre_servicio, 
    usuarios.nombres AS nombre_funcionario_cita,
    usuarios.apellidos AS apellido_funcionario_cita
    FROM citas 
    INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
    INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
    WHERE citas.documento_usuario = '$documento_identidad' 
    AND citas.fecha >= CURDATE() OR NOT citas.confirmacion='No asistió' OR NOT citas.confirmacion='Si asistió'
    ORDER BY citas.id_cita DESC
    LIMIT 6";



    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
         // Aquí se abre el único contenedor de cuadrícula
            ?>
            <div class="notifications-panel" id="notifications-panel">
            <?php
            while ($row = mysqli_fetch_assoc  ($result)) {
                ?>
                <!--Tarjeta donde se muestra la información de la cita-->
                <div id="contenedorm-descripcion">
                    <div id="justificacion-rechazo-<?= $row['id_cita'] ?>" class="popup-justificacion contenedor_descripcion" style="display:none;">
                        <h2>Justificación de rechazo:</h2>
                        <p><?= $row['justificacion_rechazo']?></p>
                        <button class="button1" onclick="Cerrarjustificacion(<?= $row['id_cita'] ?>);" style="cursor:pointer;">Cerrar</button>
                    </div>

                    <div id="justificacion-Noasistencia-<?= $row['id_cita'] ?>" class="popup-justificacion contenedor_descripcion" style="display:none;">
                        <h2>Justificación de no asistencia:</h2>
                        <p><?= $row['justificacion_cancelacion']?></p>
                        <button class="button1" onclick="Cerrarmotivo(<?= $row['id_cita'] ?>);" style="cursor:pointer;">Cerrar</button>
                    </div>
                </div>

                <div class="notifications">
                    <figure>
                        <img src="../../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                    <span></span>

                    <div class="table_container">
                        <table class="appointment">
                            <thead>
                                <tr class="appointment_th">
                                    <th class="header_th">Área</th>
                                    <th class="header_th">Día</th>
                                    <th class="header_th">Hora</th>
                                    <th class="header_th">Estado</th>
                                    <th class="header_th">Jornada</th>
                                    <th class="header_th">Confirmacion</th>
                                    <th class="header_th">Funcionario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="appointment_td">
                                    <td><?= htmlspecialchars($row['nombre_servicio']) ?></td>
                                    <td><?= empty($row['fecha']) ? "Aún no te han asignado el día" : htmlspecialchars($row['fecha']) ?></td>
                                    <td><?= empty($row['hora']) ? "Aún no te han asignado hora" : htmlspecialchars($row['hora']) ?></td>
                                    <td><?php
                                    if ($row['estado_cita']== 'rechazado'){
                                        echo 'rechazado  -
                                        <a class="verJustificacion" id="verJustificacion" onclick="verRechazos(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver justificación</a>';
                                    }else {
                                        echo  $row['estado_cita'];
                                    } 
                                    ?></td>
                                    <td><?= htmlspecialchars($row['jornada']) ?></td>
                                    <td><?php
                                    if($row['confirmacion']== 'No asistió'){
                                        echo 'No asistió - 
                                        <a id="verconfirmacion" onclick="Vermotivo(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver Motivo </a> ';
                                    }else {
                                        echo empty($row['confirmacion']) ? "aún no se a hecho " : $row['confirmacion']; 
                                    }
                                    ?></td>
                                    <td><?= htmlspecialchars($row['nombre_funcionario_cita'] . ' ' . $row['apellido_funcionario_cita']) ?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="reason">
                                    
                                    <th colspan="7">Motivo de la cita: 
                                        <p class="" colspan="7"><?= htmlspecialchars($row['descripcion']) ?></p>
                                    </th>
                                                                
                                </tr>
                            </tfoot>
                            
                        </table>
                    </div>
                </div>
                <?php
            }
            ?>
            </div> <!-- Aquí se cierra el único contenedor de cuadrícula -->
        <?php
    } else {
        ?>
        <article>
        <p></p>
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




<!-- script para ver el historial  -->
<?php

 $conn = connection();

if (isset($_SESSION['documento_identidad'])) {
    $documento_identidad = $_SESSION['documento_identidad'];

   

    //  en esta consulta estamos llamando los datos que necesitamos y todos los de citas uniendolos con la tabla usuarios y servicios para extraer los datos necesarios en este estamos mostrando todos 
    $sql = "SELECT 
    citas.*, 
    servicios.nombre_servicio, 
    usuarios.nombres AS nombre_funcionario_cita,
    usuarios.apellidos AS apellido_funcionario_cita
     FROM citas 
     INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
     INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
     WHERE citas.documento_usuario = '$documento_identidad'  ORDER BY citas.id_cita DESC ";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Aquí se abre el único contenedor de cuadrícula
            ?>
               <!-- <form class="formulario" method="post" id="formulario_citas">
                <select name="historial_citas" id="historial_citas">
                    <option value="todos">Todos</option>
                    <option value="hoy">Hoy</option>
                    <option value="ayer">Ayer</option>
                    <option value="semana">Ultima semana</option>
                    <option value="mes">Ultimo mes</option>
                    <option value="anio">Ultimo Año</option>
                </select>
                <button type="submit" onclick="historialCita();" class="buscar">Buscar</button>
            </form>   -->
            <div id="historial-oculto" class="notifications-panel" style="display: none;">
            <?php
            
            while ($row = mysqli_fetch_assoc  ($result)) {
              
                ?>
                <div  id="justificacion-rechazos-<?= $row['id_cita'] ?>" class="popup-justificacion contenedor_descripcion" style="display:none;" >
                    <h2>Justificación de rechazo:</h2>
                    <p><?= $row['justificacion_rechazo']?> </p>
                    <button class="button1" onclick="Cerrarjustificaciones(<?= $row['id_cita'] ?>);" style="cursor:pointer;">Cerrar</button>
                </div>
                <div id="justificacion-Noasistencias-<?= $row['id_cita'] ?>"  class="popup-justificacion contenedor_descripcion" style="display:none;">
                    <h2>Justificación de no asistencia:</h2>
                    <p><?= $row['justificacion_cancelacion']?></p>
                    <button class="button1" onclick="Cerrarmotivos(<?= $row['id_cita'] ?>);" style="cursor:pointer;">Cerrar</button>
                </div> 

                <div class="notifications">
                    <figure>
                        <img src="../../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                      <!-- aqui es donde estamos extrayendo los datos que necesitmaos de la bse de datos    -->
                    <span></span>

                    <div class="table_container">
                        <table class="appointment">
                            <thead>
                                <tr class="appointment_th">
                                    <th class="header_th">Área</th>
                                    <th class="header_th">Día</th>
                                    <th class="header_th">Hora</th>
                                    <th class="header_th">Estado</th>
                                    <th class="header_th">Jornada</th>
                                    <th class="header_th">Confirmacion</th>
                                    <th class="header_th">Funcionario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="appointment_td">
                                    <td><?= htmlspecialchars($row['nombre_servicio']) ?></td>
                                    <td><?= empty($row['fecha']) ? "Aún no te han asignado el día" : htmlspecialchars($row['fecha']) ?></td>
                                    <td><?= empty($row['hora']) ? "Aún no te han asignado hora" : htmlspecialchars($row['hora']) ?></td>
                                    <td><?php
                                    if ($row['estado_cita']== 'rechazado'){
                                        echo 'rechazado  -
                                        <a class="verJustificacion" id="verJustificacion" onclick="verRechazo(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver justificación</a>';
                                    }else {
                                        echo  $row['estado_cita'];
                                    } 
                                    ?> </td>
                                    <td><?= htmlspecialchars($row['jornada']) ?></td>
                                    <td><?php
                                    if($row['confirmacion']== 'No asistió'){
                                        echo 'No asistió - 
                                        <a id="verconfirmacion" onclick="Vermotivos(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver Motivo </a> ';
                                    }else {
                                        echo empty($row['confirmacion']) ? "aún no se a hecho " : $row['confirmacion']; 
                                    }
                                    ?></td>
                                    <td><?= htmlspecialchars($row['nombre_funcionario_cita'] . ' ' . $row['apellido_funcionario_cita']) ?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="reason">
                                    
                                    <th colspan="7">Motivo de la cita: 
                                        <p class="" colspan="7"><?= htmlspecialchars($row['descripcion']) ?></p>
                                    </th>
                                                                
                                </tr>
                            </tfoot>
                            
                        </table>
                    </div>    
                   
                </div>
                <?php
            }
            ?>
            </div> <!-- Aquí se cierra el único contenedor de cuadrícula -->
            <?php
        } else {
            ?>
            <article>
                <p></p>
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


 <!-- <script src="../../../../Proyecto_SendApp_2024/interfaces/Administrador/Scripts/notificaciones.js"></script>  -->
<script src='../../../../Proyecto_SendApp_2024/scripts/componentesJS/cantidadCitas.js'></script>