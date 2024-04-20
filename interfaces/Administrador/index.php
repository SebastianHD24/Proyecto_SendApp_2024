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
    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Pangina principal/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="./Styles/admin.css"> <!-- Enlace hacia la hoja de estilos CSS-->
    <link rel="stylesheet" type="text/css" href="./Styles/style.css" >
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
            <img src="Admin-img/LogosSena-img/Sendero.png" alt="Logo Sena Verde" class="logo-small">
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
      <div class="search__wrapper">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="search-icon" role="img">
          <title id="search-icon">Buscar</title>
          <path
            d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <input type="text" aria-labelledby="search-icon" name="barraBusqueda">
      </div>
      <!-- Links-->
      <div class="sidebar-links">
        <ul>
          <!-- Primer Link -->
          <li>
            <a href="#dashboard" title="Dashboard" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 4h6v8h-6z" />
                <path d="M4 16h6v4h-6z" />
                <path d="M14 12h6v8h-6z" />
                <path d="M14 4h6v4h-6z" />
              </svg>
              <span class="link hide">Dashboard</span>
              <span class="tooltip__content">Dashboard</span>
            </a>
          </li>
          <!-- Segundo Link -->
          <li>
            <a href="#market-overview" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-bar" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                <path d="M4 20l14 0" />
              </svg>
              <span class="link hide">Market Overview</span>
              <span class="tooltip__content">Market Overview</span>
            </a>
          </li>
          <!-- Tercer Link -->
          <li>
            <a href="#analytics" title="Analytics" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8" />
                <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5" />
              </svg>
              <span class="link hide">Analytics</span>
              <span class="tooltip__content">Analytics</span>
            </a>
          </li>
          <!-- Cuarto Link -->
          <li>
            <a href="#reports" title="Reports" class="tooltip">
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
              <span class="link hide">Reports</span>
              <span class="tooltip__content">Reports</span>
            </a>
          </li>
          <!-- Quinto Link -->
          <li>
            <a href="#industries" title="Industries" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-factory-2" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21h18" />
                <path d="M5 21v-12l5 4v-4l5 4h4" />
                <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
                <path d="M9 17h1" />
                <path d="M14 17h1" />
              </svg>
              <span class="link hide">Industries</span>
              <span class="tooltip__content">Industries</span>
            </a>
          </li>
          <!-- Sexto Link -->
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
              <span class="link hide">Settings</span>
              <span class="tooltip__content">Settings</span>
            </a>
          </li>
          <!-- Septimo Link -->
          <li>
            <a href="#notifications" title="Notifications" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
              </svg>
              <span class="link hide">Notifications</span>
              <span class="tooltip__content">Notifications</span>
            </a>
          </li>
        </ul>
      </div>
      <!--Sección del Perfil -->
      <div class="sidebar__profile">
        <!-- Avatar/Imagen de usuario -->
        <!-- <div class="avatar__wrapper">
          <img class="avatar" src="assets/profile.png" alt="Joe Doe Picture">
          <div class="estado_online_ofline"></div>
        </div> -->
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
          <img src="Admin-img/LogosSena-img/SendApp.png" name="SendApp" alt="SendApp Logo"/>
        </article>
        <p>
          Ingresa la cedula del aprendiz y/o funcionario del cual deseas consultar su información
        </p>
        
        <!--*********************************************************************************-->
        <!-- Contenedor de búsqueda -->
        <div class="search-container">
          <!-- Formulario de búsqueda -->
            <form method="GET">
              <input type="text" name="documento_identidad" placeholder="Buscar por Documento o Nombre"> <!-- Campo de búsqueda -->
              <button type="submit">Buscar</button> <!-- Botón de búsqueda -->
            </form>
        </div>
        <br>

        <!-- Tabla de usuarios -->
        <div class="users-table">
          <table>
            <!-- Encabezados de la tabla -->
            <thead>
              <tr>
                <!-- Columnas de la tabla -->
                <th>Documento Identidad</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Contraseña</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Programa</th>
                <th>Ficha</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Servicio</th> <!-- Cambiado de "ID Servicio" a "Servicio" -->
                <th>Acciones</th>
              </tr>
            </thead>
            <!-- Cuerpo de la tabla -->
            <tbody>
              <?php
                // Incluir el archivo de conexión
                include("../../Login/conexion.php");
                // Establecer conexión a la base de datos
                $conn = connection();

                // Consulta SQL para obtener datos de usuarios, roles y servicios
                $sql = "SELECT *, (SELECT nombre_rol FROM roles WHERE roles.id_rol = usuarios.id_rol) AS nombre_rol,
                        (SELECT nombre_servicio FROM servicios WHERE servicios.id_servicio = usuarios.id_servicio) AS nombre_servicio
                        FROM usuarios";

                // Verificar si se realizó una búsqueda
                if(isset($_GET['documento_identidad']) && $_GET['documento_identidad'] != '') {
                  $search_term = $_GET['documento_identidad'];
                  echo "Buscas: $search_term";

                  // Agregar condición de búsqueda a la consulta SQL
                  $sql .= " WHERE usuarios.documento_identidad = ? OR usuarios.nombres LIKE ?";
                  // Preparar la consulta SQL
                  $stmt = mysqli_prepare($conn, $sql);
                  if ($stmt) {
                    $search_term_like = "%$search_term%";
                    // Enlazar parámetros a la consulta preparada
                    mysqli_stmt_bind_param($stmt, "is", $search_term, $search_term_like);
                    // Ejecutar la consulta preparada
                    mysqli_stmt_execute($stmt);
                    // Obtener el resultado de la consulta
                    $query = mysqli_stmt_get_result($stmt);
                  } else {
                    echo "Error en la preparación de la consulta: " . mysqli_error($conn);
                  }
                } else {
                  // Ejecutar la consulta sin condición de búsqueda
                  $query = mysqli_query($conn, $sql);
                }

                // Verificar si la consulta fue exitosa
                if (!$query) {
                  echo "Error en la consulta SQL: " . mysqli_error($conn);
                } else {
                  // Iterar sobre los resultados y mostrar cada fila en la tabla
                  while ($row = mysqli_fetch_array($query)) {
              ?>
                <tr id="row_<?= $row['documento_identidad'] ?>">
                  <!-- Mostrar datos de usuario en cada columna -->
                  <td><?= $row['documento_identidad'] ?></td>
                  <td><?= $row['nombres'] ?></td>
                  <td><?= $row['apellidos'] ?></td>
                  <td><?= $row['contrasena'] ?></td>
                  <td><?= $row['correo'] ?></td>
                  <td><?= $row['celular'] ?></td>
                  <td><?= $row['programa'] ?></td>
                  <td><?= $row['ficha'] ?></td>
                  <!-- Mostrar el estado del usuario -->
                  <td id="estado_<?= $row['documento_identidad'] ?>" class="<?= ($row['estado'] == 1) ? 'activo' : 'inactivo' ?>"><?= ($row['estado'] == 1) ? 'Activo' : 'Inactivo' ?></td>
                  <td><?= $row['nombre_rol'] ?></td>
                  <!-- Mostrar el nombre del servicio en lugar del ID -->
                  <td><?= $row['nombre_servicio'] ?></td>
                  <!-- Acciones -->
                  <td>
                    <?php if ($row['estado'] == 1): ?>
                      <!-- Enlace para desactivar usuario -->
                      <a href="actualizar_estado.php?action=desactivar&documento_identidad=<?= $row['documento_identidad'] ?>" onclick="return confirmarDesactivar('<?= $row['documento_identidad'] ?>')">Desactivar</a>
                    <?php else: ?>
                      <!-- Enlace para activar usuario -->
                      <a href="actualizar_estado.php?action=activar&documento_identidad=<?= $row['documento_identidad'] ?>" onclick="return confirmarActivar('<?= $row['documento_identidad'] ?>')">Activar</a>
                    <?php endif; ?>
                    <!-- Separador -->
                    
                    <!-- Enlace para editar usuario -->
                    <a href="actualizar.php?documento_identidad=<?= $row['documento_identidad'] ?>" class="users-table--edit">Editar</a>
                  </td>
                </tr>
                <?php
                  }
                }
          ?>
            </tbody>
          </table>
        </div>

        <!-- Script JavaScript para confirmar acciones -->
        <script>
        // Función para confirmar activar usuario
          function confirmarActivar(documento_identidad) {
            let confirmacion = confirm('¿Estás seguro de que quieres activar este usuario?');
            return confirmacion;
          }

          // Función para confirmar desactivar usuario
          function confirmarDesactivar(documento_identidad) {
            let confirmacion = confirm('¿Estás seguro de que quieres desactivar este usuario?');
            return confirmacion;
            }
        </script>     
  <script src="Scripts/admin.js"></script>
</body>
</html>