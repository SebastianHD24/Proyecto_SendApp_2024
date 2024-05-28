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
                <button onclick="capturar_id(1); capturar_id_servicio(1)" id="Bienestar" class = "btn"> <p class="txt1">Bienestar al Aprendiz</p>
                <p class="txt2">Agendar Cita</p>
              </button>
              </article>
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(2); capturar_id_servicio(2)" id="Biblioteca" class="btn">
                  <p class="txt1">Biblioteca</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/academico.png" name="" alt=""/>
                <button onclick="capturar_id(3); capturar_id_servicio(3)"id="psicologia" class="btn">
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
                <button onclick="capturar_id(4); capturar_id_servicio(4)" id="FondoE" class="btn">
                  <p class="txt1">Fondo Emprender</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
                <button onclick="capturar_id(5); capturar_id_servicio(5)" id="RelacionesC" class="btn">
                  <p class="txt1">Relaciones Corporativas</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>      
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/senova.png" name="" alt=""/>
                <button onclick="capturar_id(6); capturar_id_servicio(6)" id="Sennova" class="btn">
                  <p class="txt1">Sennova</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
                <button onclick="capturar_id(7); capturar_id_servicio(7)" id="ServiciosT" class="btn">
                  <p class="txt1">Servicios Tecnológicos</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(8); capturar_id_servicio(8)" id="FabricaS" class="btn">
                  <p class="txt1">Fábrica De Software</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(9); capturar_id_servicio(9)" id="Deportes" class="btn">
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
<div  class="container oculto" >
    <form action="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/guardarCita.php" method="post" id="formularioo" class="solicitarCita">
      <input type="hidden" name="id_servicio"  id='id_servicio' value="">
  
      <h1>Solicitar Cita</h1>
     
     
      
        <p class="sub"><strong>Jornada:</strong></p>

      <select  name="jornada" class="select">
        <option value="Diurna"> Diurna </option>
        <option value="Mixta">Mixta</option>


      </select> 

      <select name='usuario_f' class="funcionario">
    
      </select>
      <p class="sub"><strong>Area</strong></p>
      <input type="text" name="nombre_servicio" disabled class="Nombre_Area" >

      <div class="formulario">
        <label for="descripcion"><strong>Descripción:</strong></label>
        <textarea name='descripcion' placeholder="maximo 150 caracteres" id="descripcion" class="descripcion-servicio" rows="4"></textarea>
      </div>

      <div class="buttons">
        <button class="button-servicio">Cerrar</button>
        <button type='submit' class="button-servicio" id="btnEnviar">Enviar</button>
      </div>
    </form>
  </div>
  <!-- /* ventana emergente */ -->
  <div class="myModal" id="myModal">
        <div class="confirmacion" id="confirmacion">
          <p>Enviada con éxito</p>
          <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/senal-aprobada.png" alt="imagen de confirmacion del envio de la pqrs">
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

