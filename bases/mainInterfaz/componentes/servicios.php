
<div class="div__content">
    <section>
        <!--Logo en el contenido-->
        <article>
            <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/LogoSenaVerde.png" name="SendApp" alt="SendApp Logo"/>
        </article>
        <h1 class="bienvenida">Bienvenido Usuario</h1>
        <p>Conoce y agenda tus servicios.</p>
        <div class="cards__container">
      
            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/wellBeingBlack.png" name="" alt="Logo Bienestar"/>
                <button onclick="capturar_id(1)" id="Bienestar">Bienestar al Aprendiz</button>
              </article>
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(2)" id="Biblioteca" class="btn">
                  <p class="txt1">Biblioteca</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/academico.png" name="" alt=""/>
                <button onclick="capturar_id(3)"id="psicologia" class="btn">
                  <p class="txt1">Psicologia</p>
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
                <button onclick="capturar_id(4)" id="FondoE" class="btn">
                  <p class="txt1">Fondo Emprender</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
                <button onclick="capturar_id(5)" id="RelacionesC" class="btn">
                  <p class="txt1">Relaciones Corporativas</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>      
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/senova.png" name="" alt=""/>
                <button onclick="capturar_id(6)" id="Sennova" class="btn">
                  <p class="txt1">Sennova</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
                <button onclick="capturar_id(7)" id="ServiciosT" class="btn">
                  <p class="txt1">Servicios Tecnológicos</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(8)" id="FabricaS" class="btn">
                  <p class="txt1">Fábrica De Software</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
                <button onclick="capturar_id(9)" id="Deportes" class="btn">
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
    <form action="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/guardarCita.php" method="post" id="formularioo">
      <input type="hidden" name="id_servicio"  id='id_servicio' value="">
  
      <h1>Solicitar Cita</h1>
     
     
      
        <p>Jornada:</p>

      <select  name="jornada" class="select">
        <option value="Diurna"> Diurna </option>
        <option value="Mixta">Mixta</option>
       
      </select> 
      <p>Area</p>
      <input type="text" name="nombre_servicio" >

      <div class="formulario">
        <label for="descripcion">Descripción:</label>
        <textarea name='descripcion' id="descripcion" class="descripcion" rows="4"></textarea>
      </div>

      <div class="buttons">
        <button class="button">Cerrar</button>
        <button type='submit' class="button" onclick="ve();">Enviar</button>
      </div>
    </form>
  </div>
  <!-- /* ventana emergente */ -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="cerrar"></span>
      <p>¡Formulario Enviado con Exito!</p>
      <i class='bx bxs-certification'></i>
    </div>
  </div>
 
</main> 
</div>

<!-- script para mostrar el formulario de la cita cuando se le da click a la bolita  -->
<script src='../../../../Proyecto_SendApp_2024/scripts/componentesJS/formcita.js'></script>
<!-- este script no se para que sirve mejor no lo muevo by juanes -->
<script src="../../../../Proyecto_SendApp_2024/componentes/script.js"></script>
<!-- este script hace que el nombre del area que tengo por el id lo meustre en el input  -->
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/Nombre_Area.js"></script>

