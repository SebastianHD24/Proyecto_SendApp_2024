<?php
if(isset($_GET['search-noAsistidas'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.citasNoAsistidas').click();
    });
    </script>";
} 

elseif (isset($_GET['search-asistidas'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.citasAsistidas').click();
    });
    </script>";
} 

elseif (isset($_GET['search-rechazadas'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.citasRechazadas').click();
    });
    </script>";
} 

elseif (isset($_GET['search-confirmarCitas'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.confirmarCitas').click();
    });
    </script>";
} 

?>
<div class="organizar_citas" id="organizar_citas" >
    <div class="dating-finder">
        <form method="GET" class="search-quotes" id="search-quotes">
            <input type="text" name="search" id="searchInput" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>
    
    <nav class="search-buttons">
        <ul>
            <a class="citasRechazadas" href="javascript:void(0);"  onclick="ocultarTablaYMostrarRechazadas();"   >Citas rechazadas</a>
            <a class="citasAsistidas"   href="javascript:void(0);" onclick="ocultarTablaYMostrarAsistidas();" >Citas  asistidas</a>
            <a class="citasNoAsistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"  >Citas No-asistidas</a>
            <a class="confirmarCitas" href="javascript:void(0);" onclick="ocultarTablaYMostrarConfirmarAsistencia();">Confirmar Asistencia</a>
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
                <th>Jornada</th>
                <th>Acciones</th>
            </tr>
        </thead>    
        <tbody>
            <?php
                $funcionario = $_SESSION["documento_identidad"];
                $search_term = '';
                if (!$conn) {
                    die("Error al conectar a la base de datos: " . mysqli_connect_error());
                    mysqli_close($conn);
                }

                if (isset($_GET['search']) && $_GET['search'] != '') {
                    $search_term = $_GET['search']; 
                    $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                    FROM citas
                    INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='pendiente' AND (citas.documento_usuario LIKE '$search_term%'  OR usuarios.nombres LIKE '$search_term%' OR usuarios.apellidos LIKE '$search_term%') ORDER BY citas.id_cita ASC ";
                } else {
                    $sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
                    FROM citas
                    INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='pendiente' ORDER BY citas.id_cita ASC ";
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
                            <td><?= $row['descripcion'] ?></td>
                            <td><?= $row['jornada'] ?></td>
                            <td class="asistio">
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
                            </td>                      
                        </tr>
            <?php
                    }
                } elseif  ($search_term != '' && mysqli_num_rows($result) == 0){
                    echo "<tr><td colspan='6'>No se encontro resultados de la busqueda.</td></tr>";
                } else {
                    echo "<tr><td colspan='6'>No se encontraron citas pendientes.</td></tr>";
                }

                //mysqli_close($conn);
            ?>
        </tbody>
    </table> 

</div>


<div class="rechazadasContent oculto">
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-rechazadas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>
    <h1 id="titulo_citas"> Citas Rechazadas</h1>
    <div class="quick-direction-buttons">
        <a class="Regresar" href="javascript:void(0);" onclick="volver();">Citas Pendientes</a>
        <a class="CitAsistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarAsistidas()"> Citas asistidas</a>
        <a class="CitANoAsistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"> Citas  no asistidas</a>
        <a class="ConfirmarCitas" href="javascript:void(0);" onclick="ocultarTablaYMostrarConfirmarAsistencia();"> Confirmar Asistencia</a>    
    </div>
    <?php include (__DIR__ .'/baseCitas/citasRechazadas.php'); ?>
</div>
<div class="AsistidasContent oculto"  >
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-asistidas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>
    <h1 id="titulo_citas">Citas Asistidas</h1>
    <div class="quick-direction-buttons">
        <a class="citasPendientes"  href="javascript:void(0);" onclick="volver();">Citas pendientes</a> 
        <a class="CitasRechazadas" href="javascript:void(0);" onclick="ocultarTablaYMostrarRechazadas();">citas rechazadas</a>
        <a class="CitasNoasistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"> Citas no asistidas</a>
        <a class="ConfirmarCitas" href="javascript:void(0);" onclick="ocultarTablaYMostrarConfirmarAsistencia();"> Confirmar Asistencia</a>
    </div>
    <?php  include (__DIR__ .'/baseCitas/citasAsistidas.php'); ?>
    
</div>



<div class="NoAsistidasContent oculto">
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-noAsistidas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>
    <h1 id="titulo_citas">Citas que no asistieron</h1>
    <div class="quick-direction-buttons">
    <a class="citasPendientes"  href="javascript:void(0);" onclick="volver();">Citas pendientes</a> 
    <a class="CitasRechazadas" href="javascript:void(0);" onclick="ocultarTablaYMostrarRechazadas();">citas rechazadas</a>
    <a class="Citasasistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarAsistidas();"> Citas  asistidas</a>
    <!-- <a class="CitasNoasistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"> Citas no asistidas</a> -->
    <a class="ConfirmarCitas" href="javascript:void(0);" onclick="ocultarTablaYMostrarConfirmarAsistencia();"> Confirmar Asistencia</a>
    </div>
    <?php include (__DIR__ .'/baseCitas/citasNoAsistidas.php'); ?>       
</div>

    
<div class="confirmarAsistencia oculto">
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-confirmarCitas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>
    <h1 id="titulo_citas">Confirmar Citas</h1>
    <div class="quick-direction-buttons">
    <a class="citasPendientes"  href="javascript:void(0);" onclick="volver();">Citas pendientes</a> 
    <a  class="CitasRechazadas" href="javascript:void(0);" onclick="ocultarTablaYMostrarRechazadas();">citas rechazadas</a>
    <a class="Citasasistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarAsistidas();"> Citas  asistidas</a>
    <a class="CitasNoasistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"> Citas no asistidas</a>
    </div>
    <?php include (__DIR__ .'/baseCitas/confirmarAsistencia.php'); ?>
</div>

</main>
</div>


<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>
// Declaramos variable para  lo que necesitamos 
let ocultarDiv = document.querySelector('.table_div');
let mostrarDivRechazadas = document.querySelector('.rechazadasContent');
let mostarDivAsistidas = document.querySelector('.AsistidasContent');
let Ocultarnav = document.getElementById('organizar_citas');
let mostarDivNoAsistidas= document.querySelector('.NoAsistidasContent');
let mostrarDivConfirmarAsistencia=document.querySelector('.confirmarAsistencia');
// Funciones para que los links funcionen

   
    function ocultarTablaYMostrarRechazadas() {
        ocultarDiv.classList.add('oculto');
        mostarDivAsistidas.classList.add('oculto');
        mostrarDivRechazadas.classList.remove('oculto');
        mostarDivNoAsistidas.classList.add('oculto');
        mostrarDivConfirmarAsistencia.classList.add('oculto');
        Ocultarnav.style.display='none';
    };

   

    function ocultarTablaYMostrarAsistidas() {
        ocultarDiv.classList.add('oculto');
        mostarDivAsistidas.classList.remove('oculto');
        mostrarDivRechazadas.classList.add('oculto');
        mostarDivNoAsistidas.classList.add('oculto');
        mostrarDivConfirmarAsistencia.classList.add('oculto');
        Ocultarnav.style.display='none';
    };

    
    function ocultarTablaYMostrarNoAsistida() {
        ocultarDiv.classList.add('oculto');
        mostarDivNoAsistidas.classList.remove('oculto');
        mostrarDivRechazadas.classList.add('oculto');
        mostarDivAsistidas.classList.add('oculto');
        mostrarDivConfirmarAsistencia.classList.add('oculto');
        Ocultarnav.style.display='none';
    };
   
    function ocultarTablaYMostrarConfirmarAsistencia(){
        ocultarDiv.classList.add('oculto');
        mostrarDivConfirmarAsistencia.classList.remove('oculto');
        mostrarDivRechazadas.classList.add('oculto');
        mostarDivAsistidas.classList.add('oculto');
        mostarDivNoAsistidas.classList.add('oculto');
        Ocultarnav.style.display='none';
    };

    function volver() {
    location.href = '../../../../../Proyecto_SendApp_2024/interfaces/Funcionario/funcionario.php?p=citaspendiente';
}    

</script>
