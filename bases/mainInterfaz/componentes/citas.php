
<button class="verHistorial" id="historial" onclick="verHistorial();"  href="#">ver historial</button>
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
    ORDER BY citas.fecha ASC
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

                
                <div class="notifications">

                
                <div  id="justificacion-rechazo-<?= $row['id_cita'] ?>" class="popup-justificacion" style="display:none;
                      " >
                        <p><?= $row['justificacion_cancelacion']?> </p>
                    </div>

                
                <div id="justificacion-Noasistencia-<?= $row['id_cita'] ?>"  class="popup-justificacion" style="display:none;">
                
                <p><?= $row['justificacion_cancelacion']?></p>
            
            
                </div>


                    <figure>
                        <img src="../../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                    </figure>
                    <span></span>
                    <article>
                        <b>Área: </b>
                        <!-- aqui el nombre del servicio para que el usuario tenga claro con quien agendo la cita  -->
                        <p><?= $row['nombre_servicio'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <!-- aqui si no te han asignado fecha te sale la leyenda de "no tienes dia asignado " -->
                        <b>Día: </b>
                        <p><?= empty($row['fecha']) ? "Aún no te han asignado el dia" : $row['fecha'] ?>
                    </article>
                    <span></span>
                    <article>
                       <!-- aqui si no te han asignado fecha te sale la leyenda de "no tienes hora asignado " -->
                       <b>Hora</b>
                    <p> <?= empty($row['hora']) ? "Aún no te han asignado hora" : $row['hora'] ?> </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Estado: </b>
                        <p>
                        <?php
                              if ($row['estado_cita']== 'rechazado'){
                                echo 'rechazado  -
                                <a class="verJustificacion" id="verJustificacion" onclick="verRechazo(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver justificación</a>';
                              }else {
                                echo  $row['estado_cita'];
                              } 
                            ?> 
                            </p>
                    </article>
                    <span></span>
                    <article>
                        <b>Jornada: </b>
                        <p>
                            <?= $row['jornada'] ?>
                        </p>
                    </article>
                   
                    </article>
                    <span></span>
                    <b>Confirmación</b>
                    <p>
                    <?php
                             if($row['confirmacion']== 'No asistió'){
                                echo 'No asistió - 
                                <a id="verconfirmacion" onclick="Vermotivo(' . $row['id_cita'] . ');" style="color:blue; cursor: pointer;">Ver Motivo </a> ';
                             }else {
                             
                             echo empty($row['confirmacion']) ? "aún no se a hecho " : $row['confirmacion']; 
                            }
                             ?> 
                             </p>
                             
                    <span></span>
                    <article>
                        <b>Funcionario: </b>
                        <!-- aqui extraemos el nombre del funcionario y el apellido de este ya que el aprnediz elije con que funcionario quiere la cita y la idea es que se muestre  -->
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
                
                <div class="notifications">

                    <div  id="justificacion-rechazo-<?= $row['id_cita'] ?>" class="popup-justificacion" style="display:none;" >
                        <p><?= $row['justificacion_rechazo']?> </p>
                    </div>


                    <div id="justificacion-Noasistencia-<?= $row['id_cita'] ?>"  class="popup-justificacion" style="display:none;">
                
                        <p><?= $row['justificacion_cancelacion']?></p>
            
                    </div>               

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
                                    
                                    <th colspan="7">Motivo: 
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

<script>
function verRechazo(id){
    let popup = document.getElementById('justificacion-rechazo-'+ id);
    if(popup){
        popup.style.display = 'block';
    }
}

function Vermotivo(id){
    let popupMotivo = document.getElementById('justificacion-Noasistencia-' + id);
    if(popupMotivo){
        popupMotivo.style.display = 'block';
    }
}

</script>
