<?php include '../../bases/sesion_start.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> <!-- Permite caracteres especiales -->
    <meta http-equiv="A-UA-Compatible" content="IE-edge"> <!-- Compatibilidad con navegadores que usen EDGE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Escala de la vista del viewport en el navegador-->
    <meta name="description" content="Ingresa datos en la base de datos"> <!-- Descripcion del siguiente archivo -->
    <meta name="keywords" content="html, css, bases de datos, php"> <!-- Palabras claves para posicionamiento CEO-->
    <meta name="author" content="Joan Esneider"> <!-- Autores/Creadores de este archivo -->
    <meta name="copyright" content="Aprendices"> <!-- Derechos de Autor -->
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Pangina principal/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->
    <link rel="stylesheet" type="text/css" href="Styles/usuario.css"> <!-- Enlace hacia la hoja de estilos CSS-->
    <title>SendApp</title>
</head>
<body>
  <!--SIDEBAR-->
  <div class="sidebar__container">
    <nav class="sidebar">
      <!-- Sección primaria en el top del nav -->
      <div class="sidebar-top-wrapper">
        <!--Logo / Nombre -->
        <div class="sidebar-top"> 
          <a href="usuarioSesion.html" class="logo__wrapper">
            <img src="Usuario-img/LogosSena-img/Sendero.png" alt="Logo SendApp Verde" class="logo-small">
            <span class="NombreOculto">
              SendApp
            </span>
          </a>
        </div>
        <!--Boton Expandible-->
        <button class="expand-btn" type="button">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="exp-btn" role="img">
            <title id="exp-btn">Menu Expandible</title>
            <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <!-- Barra de busqueda-->
      <!-- <div class="search__wrapper">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="search-icon" role="img">
          <title id="search-icon">Buscar</title>
          <path
            d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <input type="text" aria-labelledby="search-icon" name="barraBusqueda">
      </div> -->
      <!-- Links-->
      <div class="sidebar-links">
        <ul>
          <!-- Primer Link -->
          <li>
            <a href="mostarcita.php" title="Reports" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-5" />
                <path d="M12 17v-1" />
                <path d="M15 17v-3" />
              </svg>
              <span class="link hide">Citas</span>
              <span class="tooltip__content">Citas</span>
            </a>
          </li>
          <!--Segundo link-->
          <li>
            <a href="#settings" title="Settings" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                </path>
                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
              </svg>
              <span class="link hide">Configuración</span>
              <span class="tooltip__content">Configuración</span>
            </a>
          </li>
          <!-- Tercer Link -->
          <li>
            <a href="#notifications" title="Notifications" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
              </svg>
              <span class="link hide">Notificaciones</span>
              <span class="tooltip__content">Notificaciones</span>
            </a>
          </li>
        </ul>
      </div>
      <!--Sección del Perfil -->
      <div class="sidebar__profile">
        <!-- Avatar/Imagen de usuario -->
        <div class="avatar__wrapper">
          <img class="avatar" src="assets/profile.png" alt="Joe Doe Picture">
          <div class="estado_online_ofline"></div>
        </div> 
        <!--Nombre del usurio/correo -->
        <div class="avatar__name hide">
          <div class="user-name">Hideoshy Peralta</div>
          <div class="email">hideoshy@hotmail.com</div>
        </div>
        <!--Icono de Cerrar Sesion-->
        <a href="../../Login/login-aprendices/validacion/cerrar_sesion.php" class="logout hide">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round" aria-labelledby="logout-icon" role="img">
            <title id="logout-icon">log out</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
            <path d="M9 12h12l-3 -3"></path>
            <path d="M18 15l3 -3"></path>
          </svg>
        </a>
      </div>
    </nav>
  </div> 
    <!-- Contenido -->
    <div class="div__content">
        <section>
          <!--Logo en el contenido-->
          <article>
              <img src="Usuario-img/LogosSena-img/LogoSenaVerde.png" name="SendApp" alt="SendApp Logo"/>
          </article>
          <p>
            Bienvenido Aprendíz, este es tu nuevo espacio personal en SendApp, donde podrás agendar citas con nuestros funcionarios de cada área y cambiar tus datos personales, <b>Solo debes hacer click sobre el área de tu preferencia y se te abrirá automaticamente el calendario con los fechas disponibles.</b> Pero recuerda, solo algunas de nuestras área estan habilitadas para recibir citas, también algunos de tus datos personales solo pueden ser actualizados atraves del sitio web de <a href="">SofiaPlus</a> 
          </p>
          <div class="cards__container">
              <div class="cards">
                <article>
                    <img src="Usuario-img/Areas-img/wellBeingBlack.png" name="" alt="Logo Bienestar"/>
                    <p>Bienestar Al Aprendíz</p>
                </article>
              </div>
              <div class="cards">
                <article>
                    <p>Biblioteca</p>
                    <img src="Usuario-img/Areas-img/bibliotecaNegro.png" name="" alt=""/>
                </article>     
              </div>
              <div class="cards">
                <article>
                  <p>Coordinación Académica</p>
                  <img src="Usuario-img/Areas-img/academico.png" name="" alt=""/>
                </article>    
              </div>
              <div class="cards">
                <article>
                  <p>Administración</p>
                  <img src="Usuario-img/Areas-img/administraconNegro.png" name="" alt=""/>
                </article>     
              </div>
              <div class="cards">
                <article>
                  <p>Fondo Enprender</p>
                  <img src="Usuario-img/Areas-img/enprederNegro.png" name="" alt=""/>
                </article>   
              </div>
              <div class="cards">
                <article>
                  <p>Relaciones Corporativas</p>
                  <img src="Usuario-img/Areas-img/corporacionNegro.png" name="" alt=""/>
                </article>      
              </div>
              <div class="cards">
                <article>
                  <p>Senova</p>
                  <img src="Usuario-img/Areas-img/senova.png" name="" alt=""/>
                </article>    
              </div>
              <div class="cards">
                <article>
                  <p>Servicios Tecnológicos</p>
                  <img src="Usuario-img/Areas-img/serviciosNegros.png" name="" alt=""/>
                </article>  
              </div>
              <div class="cards">
                <article>
                  <p>Fabrica De Software</p>
                  <img src="Usuario-img/Areas-img/fabricaNegro.png" name="" alt=""/>
                </article>   
              </div>
              <div class="cards">
                <article>
                  <p>Tenco Academia</p>
                  <img src="Usuario-img/Areas-img/tecnoAcademiaNegro.png" name="" alt=""/>
                </article>    
              </div>
              <div class="cards">
                <article>
                  <p>Tenco Parque</p>
                  <img src="Usuario-img/Areas-img/tecnoParqueNegro.png" name="" alt=""/>
                </article>    
              </div>
          </div>
        </section>
        <button><a href="agendarcita.php"> solicitar</a></button>
    </div>
  <script src="Scripts/usuario.js"></script>
</body>
</html>