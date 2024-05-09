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
                <button id="Bienestar">Bienestar Al Aprendíz</button>
              </article>
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                <button id="Biblioteca" class="btn">
                  <p class="txt1">Biblioteca</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/academico.png" name="" alt=""/>
                <button id="Coordinacion" class="btn">
                  <p class="txt1">Coordinación Académica</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>
                
            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/administraconNegro.png" name="" alt=""/>
                <button id="Administracion" class="btn">
                  <p class="txt1">Administración</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>     
            </div>
      
            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/enprederNegro.png" name="" alt=""/>
                <button id="FondoE" class="btn">
                  <p class="txt1">Fondo Emprender</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
                <button id="RelacionesC" class="btn">
                  <p class="txt1">Relaciones Corporativas</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>      
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/senova.png" name="" alt=""/>
                <button id="Sennova" class="btn">
                  <p class="txt1">Sennova</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
                <button id="ServiciosT" class="btn">
                  <p class="txt1">Servicios Tecnológicos</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
                <button id="FabricaS" class="btn">
                  <p class="txt1">Fábrica De Software</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>   
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
                <button id="TecnoA" class="btn">
                  <p class="txt1">Tecno Academia</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>    
            </div>

            <div class="cards">
              <article>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoParqueNegro.png" name="" alt=""/>
                <button id="TecnoP" class="btn">
                  <p class="txt1">Tecno Parque</p>
                  <p class="txt2">Agendar Cita</p>
                </button>
              </article>  
            </div>
        </div>
    </section>  
</div>
<!-- la parte de solicitud citas -->
<div  class="container oculto" >
    <form id="formularioo">
      <h1>Solicitar Cita</h1>
      <p>Jornada:</p>
      <select class="select">
        <option value="opcion1">Diurna</option>
        <option value="opcion2">Mixta</option>
       
      </select>
      <div class="formulario">
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" class="descripcion" rows="4"></textarea>
      </div>

      <div class="buttons">
        <button class="button">Cerrar</button>
        <button class="button" onclick="ve();">Enviar</button>
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
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/formcita.js"> </script>
<script src="../../../../Proyecto_SendApp_2024/componentes/script.js"></script>


