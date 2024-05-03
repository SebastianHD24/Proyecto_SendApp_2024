<?php include '../../../Proyecto_SendApp_2024/bases/mainInterfaz/baseInterfaz.php' ?>

<?php startblock('title-pag') ?>
  <title>Interfaz de Usuario</title>
<?php endblock() ?>

<?php startblock('menu-option') ?>
  <li>
    <a class=" boton-categoria" href=""><i class="bi bi-columns-gap"></i>Servicios</a>
  </li>

  <li>
    <a class=" boton-categoria" href="../../componentes/citas/mostrarCitas.php"><i class="bi bi-calendar2-event"></i>Mis Citas</a>
  </li>

  <li>
    <a class=" boton-categoria" href=""><i class="bi bi-chat-left-dots"></i>PQR</a>
  </li>
<?php endblock() ?>

<?php startblock('contenido') ?>
    <h1 class="bienvenida">Bienvenido Usuario</h1>
    <p>Conoce y agenda tus servicios.</p>
    <div class="cards__container">
      
      <div class="cards">
        <article>
          <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/Areas-img/wellBeingBlack.png" name="" alt="Logo Bienestar"/>
          <p>Bienestar Al Aprendíz</p>
        </article>
      </div>

      <div class="cards">
        <article>
          <p>Biblioteca</p>
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
    
    <button><a href="../../componentes/solicitar citas/agendarCita.php"> agendar cita </a></button>

    <!-- <div class="contenidoInfo oculto"> -->

        
<?php endblock() ?>

