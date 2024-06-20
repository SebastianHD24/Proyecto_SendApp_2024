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
<nav class="search-buttons" id="search-buttons">
    <ul class="ul-citaspendientes">
        <li><a class="Regresar" href="javascript:void(0);" onclick="volver();">Citas Pendientes</a></li>
        <li><a class="citasRechazadas" href="javascript:void(0);"  onclick="ocultarTablaYMostrarRechazadas();"   >Citas rechazadas</a></li>
        <li><a class="citasAsistidas"   href="javascript:void(0);" onclick="ocultarTablaYMostrarAsistidas();" >Citas  asistidas</a></li>
        <li><a class="citasNoAsistidas" href="javascript:void(0);" onclick="ocultarTablaYMostrarNoAsistida();"  >Citas No-asistidas</a></li>
        <li><a class="confirmarCitas" href="javascript:void(0);" onclick="ocultarTablaYMostrarConfirmarAsistencia();">Confirmar Asistencia</a></li>
    </ul>
</nav>

<div class="organizar_citas" id="organizar_citas">
    <div class="dating-finder">
        <form method="GET" class="search-quotes" id="search-quotes">
            <input type="text" name="search" id="searchInput" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
    </div>    
</div>
<!-- <h1 id="titulo_citas">Citas pendientes</h1> -->

<div class="table_div" id="table_div">
    <h1 id="titulo_citas"> Citas Pendientes</h1>
    <table>
        <thead>
            <tr id="tabla_titulos">
                <th class="th_header">Documento de Identidad</th>
                <th class="th_header">Nombres</th>
                <th class="th_header">Apellidos</th>
                <th class="th_header">Descripción de la cita</th>
                <th class="th_header">Jornada</th>
                <th class="th_header">Acciones</th>
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
                            <td><button onclick="verDescripcion(<?= $row['id_cita'] ?>);">Descripcion</button></td>
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


<div class="contenedor_descripcion" id="contenedor_descripcion" style="display: none;">
    <h1>Descripción</h1>
    <p id="descripcion"></p>
    <div class="Noti-cerrar">
    <button class="button1" onclick="cerrarDescripcion();">Cerrar</button>
    </div>
</div>

<div class="contenedor_descripcion1" id="contenedor_descripcion1" style="display: none;">
    <h1>Descripción</h1>
    <p id="descripcion1"></p>
    <div class="Noti-cerrar1">
    <button class="button11" onclick="cerrarDescripcion1();">Cerrar</button>
    </div>
</div>


<div class="rechazadasContent oculto">
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-rechazadas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
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
    <?php  include (__DIR__ .'/baseCitas/citasAsistidas.php'); ?>
    
</div>


<div class="NoAsistidasContent oculto">
    <div class="dating-finder">
        <form method="GET" class="search-quotes">
            <input type="text" name="search-noAsistidas" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
            <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
        </form>
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
    <?php include (__DIR__ .'/baseCitas/confirmarAsistencia.php'); ?>
</div>

</main>
</div>


<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/citaspendiente.js"></script>
<script>
// Declaramos variable para  lo que necesitamos 
let ocultarDiv = document.querySelector('.table_div');
let Botones = document.querySelector('.search-buttons')
let mostrarDivRechazadas = document.querySelector('.rechazadasContent');
let mensaje = document.getElementById('descripcion');
let mensaje1 = document.getElementById('descripcion1');
let mostarDivAsistidas = document.querySelector('.AsistidasContent');
let Ocultarnav = document.getElementById('organizar_citas');
let mostarDivNoAsistidas= document.querySelector('.NoAsistidasContent');
let mostrarDivConfirmarAsistencia=document.querySelector('.confirmarAsistencia');
let descripcion = document.querySelector('.contenedor_descripcion');
let descripcion1 = document.querySelector('.contenedor_descripcion1');
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
    
    function verDescripcion(id_cita){
        ocultarDiv.style.display = "none";
        Ocultarnav.style.display = "none";
        Botones.style.display = "none";
        descripcion.style.display = "block";

        fetch(`../../../../Proyecto_SendApp_2024/interfaces/Funcionario/descripcion.php?id=${id_cita}`)
            .then(response => response.json())
            .then(data => {
                if (data.descripcion) {
                    // Muestra la descripción obtenida
                    mensaje.textContent = data.descripcion;
                } else {
                    // Manejo de error si no se encuentra la descripción
                    mensaje.textContent = 'No se encontró la descripción.';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                mensaje.textContent = 'Error al obtener la descripción.';
        });
    }
    function verDescripcion1(id_cita){
        mostrarDivRechazadas.style.display = "none";
        Botones.style.display = "none";
        descripcion1.style.display = "block";

        fetch(`../../../../Proyecto_SendApp_2024/interfaces/Funcionario/descripcion.php?id=${id_cita}`)
            .then(response => response.json())
            .then(data => {
                if (data.descripcion) {
                    // Muestra la descripción obtenida
                    mensaje1.textContent = data.descripcion;
                } else {
                    // Manejo de error si no se encuentra la descripción
                    mensaje1.textContent = 'No se encontró la descripción.';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                mensaje.textContent = 'Error al obtener la descripción.';
        });
    }
    function verDescripcion2(id_cita){
        mostarDivAsistidas.style.display = "none";
        Botones.style.display = "none";
        descripcion1.style.display = "block";

        fetch(`../../../../Proyecto_SendApp_2024/interfaces/Funcionario/descripcion.php?id=${id_cita}`)
            .then(response => response.json())
            .then(data => {
                if (data.descripcion) {
                    // Muestra la descripción obtenida
                    mensaje1.textContent = data.descripcion;
                } else {
                    // Manejo de error si no se encuentra la descripción
                    mensaje1.textContent = 'No se encontró la descripción.';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                mensaje.textContent = 'Error al obtener la descripción.';
        });
    }
    function verDescripcion3(id_cita){
        mostarDivNoAsistidas.style.display = "none";
        Botones.style.display = "none";
        descripcion1.style.display = "block";

        fetch(`../../../../Proyecto_SendApp_2024/interfaces/Funcionario/descripcion.php?id=${id_cita}`)
            .then(response => response.json())
            .then(data => {
                if (data.descripcion) {
                    // Muestra la descripción obtenida
                    mensaje1.textContent = data.descripcion;
                } else {
                    // Manejo de error si no se encuentra la descripción
                    mensaje1.textContent = 'No se encontró la descripción.';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                mensaje.textContent = 'Error al obtener la descripción.';
        });
    }
    function verDescripcion4(id_cita){
        mostrarDivConfirmarAsistencia.style.display = "none";
        Botones.style.display = "none";
        descripcion1.style.display = "block";

        fetch(`../../../../Proyecto_SendApp_2024/interfaces/Funcionario/descripcion.php?id=${id_cita}`)
            .then(response => response.json())
            .then(data => {
                if (data.descripcion) {
                    // Muestra la descripción obtenida
                    mensaje1.textContent = data.descripcion;
                } else {
                    // Manejo de error si no se encuentra la descripción
                    mensaje1.textContent = 'No se encontró la descripción.';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                mensaje.textContent = 'Error al obtener la descripción.';
        });
    }
    function cerrarDescripcion(){
        ocultarDiv.style.display = "block";
        Ocultarnav.style.display = "block";
        Botones.style.display = "flex";
        descripcion.style.display = "none";
    }
    function cerrarDescripcion1(){
        Botones.style.display = "flex";
        mostrarDivRechazadas.style.display = "block"
        descripcion1.style.display = "none";
        mostarDivAsistidas.style.display = "block";
        mostarDivNoAsistidas.style.display = "block";
        mostrarDivConfirmarAsistencia.style.display = "block";
    }
</script>