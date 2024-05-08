
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
                <button onclick="capturar_id(1)" id="Bienestar">Bienestar Al Aprendíz</button>
              </article>
            </div>

            <div class="cards">
                <article>
                  <button onclick="capturar_id(2)" id="biblioteca" >Biblioteca</button>
                  <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                </article>     
            </div>

            <div class="cards">
              <article>
                <p>Coordinación Académica</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/academico.png" name="" alt=""/>
              </article>    
            </div>
                
            <div class="cards">
              <article>
                <p>Administración</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/administraconNegro.png" name="" alt=""/>
              </article>     
            </div>
      
            <div class="cards">
              <article>
                <p>Fondo Emprender</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/enprederNegro.png" name="" alt=""/>
              </article>   
            </div>

            <div class="cards">
              <article>
                <p>Relaciones Corporativas</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
              </article>      
            </div>

            <div class="cards">
              <article>
                <p>Sennova</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/senova.png" name="" alt=""/>
              </article>    
            </div>

            <div class="cards">
              <article>
                <p>Servicios Tecnológicos</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
              </article>  
            </div>

            <div class="cards">
              <article>
                <p>Fábrica De Software</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
              </article>   
            </div>

            <div class="cards">
              <article>
                <p>Tecno Academia</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
              </article>    
            </div>

            <div class="cards">
              <article>
                <p>Tecno Parque</p>
                <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/tecnoParqueNegro.png" name="" alt=""/>
              </article>  
            </div>
        </div>
    </section>  
</div>
<!-- la parte de solicitud citas -->
<div  class="container oculto" >
    <form action="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/guardarCita.php" method="post" id="formularioo">
      <input type="text" name="id_servicio"  id='id_servicio' value="">

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

