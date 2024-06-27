<?php
// Consulta preparada para obtener todos los estados del servicio
$sql = "SELECT estado_servicio FROM servicios";
$stmt = $conn->prepare($sql);
$stmt->execute();
$query = $stmt->get_result();

// Crear una lista para almacenar los estados del servicio
$estadosServicios = array();

// Recorrer los resultados y añadir los estados a la lista
while ($row = $query->fetch_assoc()) {
    $estadosServicios[] = $row['estado_servicio'];
}
$stmt->close();
?>
<div class="div__content">
    <section>
        <!--Logo en el contenido-->
        <article>
            <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/LogoSenaVerde.png" name="SendApp" alt="SendApp Logo"/>
        </article>
        <h1 class="bienvenida">Bienvenido <?= $full_name?> </h1>
        <p>Conoce y agenda tus servicios.</p>
        <div class="cards__container">
      
            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/wellBeingBlack.png" name="" alt="Logo Bienestar"/>
                <button onclick="capturar_id(1); capturar_id_servicio(1)" id="Bienestar" class="btn"
                <?php if ($estadosServicios[0] == 0): ?>
                    disabled
                <?php endif; ?>
                >
                    <p class="txt1">Bienestar al Aprendiz</p>
                    <p class="txt2">Agendar Cita</p>
                </button>
              </article>
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(2); capturar_id_servicio(2)" id="Biblioteca" class="btn"
                <?php if ($estadosServicios[1] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Biblioteca</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/academico.png" name="" alt=""/>
                <button onclick="capturar_id(3); capturar_id_servicio(3)"id="psicologia" class="btn"
                <?php if ($estadosServicios[2] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Psicología</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>
                
           
            <!-- <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/administraconNegro.png" name="" alt=""/>
                <button id="Administracion" class="btn">
                  <p class="txt1">Administración</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div> -->
      
            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/enprederNegro.png" name="" alt=""/>
                <button onclick="capturar_id(4); capturar_id_servicio(4)" id="FondoE" class="btn"
                <?php if ($estadosServicios[3] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Fondo Emprender</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
                <button onclick="capturar_id(5); capturar_id_servicio(5)" id="RelacionesC" class="btn"
                <?php if ($estadosServicios[4] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Relaciones Corporativas</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>      
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/senova.png" name="" alt=""/>
                <button onclick="capturar_id(6); capturar_id_servicio(6)" id="Sennova" class="btn"
                <?php if ($estadosServicios[5] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Sennova</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
                <button onclick="capturar_id(7); capturar_id_servicio(7)" id="ServiciosT" class="btn"
                <?php if ($estadosServicios[6] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Servicios Tecnológicos</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(8); capturar_id_servicio(8)" id="FabricaS" class="btn"
                <?php if ($estadosServicios[7] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Fábrica De Software</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(9); capturar_id_servicio(9)" id="Deportes" class="btn"
                <?php if ($estadosServicios[8] == 0): ?>
                  disabled
                <?php endif; ?>
                >
                  <p class="txt1">Deportes</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            
            <!-- <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoParqueNegro.png" name="" alt=""/>
                <button id="TecnoP" class="btn">
                  <p class="txt1">Tecno Parque</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div> -->
        </div>
    </section>  
</div>
<!-- la parte de solicitud citas -->
<div class="container oculto">
    <p id="descrip-solicitarCitas">Seleccione la jornada y el funcionario que desea solicitar la cita.</p>
    <form action="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/guardarCita.php" method="post" id="formularioo" class="solicitarCita">
        <input type="hidden" name="id_servicio" id="id_servicio" value="">

        <h1>Solicitar Cita</h1>

        <p class="sub"><strong>Jornada:</strong></p>
        <select name="jornada" class="select">
            <option value="Diurna"> Diurna </option>
            <option value="Mixta"> Mixta </option>
        </select>

        <select name='usuario_f' class="funcionario">
            <!-- Aquí deberías llenar dinámicamente los usuarios funcionarios -->
        </select>

        <p class="sub"><strong>Área:</strong></p>
        <input type="text" name="nombre_servicio" disabled class="Nombre_Area">

        <div class="formulario">
            <div class="formulario-contador">
                <label for="descripcion"><strong>Descripción:</strong></label>
                <p id="charCount">0/1000</p>
            </div>
            <textarea name='descripcion' id="descripcion" class="descripcion-servicio" rows="4" maxlength="1000" placeholder="El límite de caracteres es de 1000"></textarea>
        </div>

        <div class="buttons">
            <button type="button" class="button-servicio" id="btnCerrar">Cerrar</button>
            <button type='submit' class="button-servicio" id="btnEnviar">Enviar</button>
        </div>
    </form>
</div>

<!-- Ventana emergente de éxito -->
<div class="alerta" id="alerta">
    <div class="modalA">
        <div class="barra"></div>
        <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
        <h1 class="tituloM"></h1>
        <p class="descripcionM">¡Solicitud enviada con éxito!</p>
    </div>
</div>

<!-- Ventana emergente de error -->
<div class="alerta" id="alerta2">
    <div class="modalA">
        <div class="barra"></div>
        <h1 class="tituloM">Error:</h1>
        <p class="descripcionM">¡Sucedió un incoveniente!</p>
    </div>
</div>
</main> 
</div>

<!-- script para mostrar el formulario de la cita cuando se le da click a la bolita  -->
<script src='../../../../Proyecto_SendApp_2024/scripts/componentesJS/formcita.js'></script>
<!-- este script no se para que sirve mejor no lo muevo by juanes -->
<script src="../../../../Proyecto_SendApp_2024/componentes/script.js"></script>
<!-- este script hace que el nombre del area que tengo por el id lo meustre en el input  -->
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/NombreArea.js"></script>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/NombreFuncionario.js"></script>


   