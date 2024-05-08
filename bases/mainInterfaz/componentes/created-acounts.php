<link rel="stylesheet" type="text/css" href="../../../../Proyecto_SendApp_2024/CSS/componentes-css/created-accounts.css" >
<link rel="stylesheet" type="text/css" href="../../../../Proyecto_SendApp_2024/CSS/componentes-css/table-created-accounts.css" >

<div class="content-table-users">
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
      <tbody>
        <!-- Cuerpo de la tabla -->
        <?php
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
                <a href="?actualizar=<?= $row['documento_identidad'] ?>" class="users-table--edit ">Editar</a>
                </td>
                </tr>
                <?php
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</div>  
<!--**************************************************************************************************************-->
<div class="user_update oculto">
  
  <?php
    if(isset($_GET['actualizar']) && $_GET['actualizar'] != '') {
      // Obtener el documento de identidad del usuario a editar desde la solicitud GET
      $documento_identidad=$_GET['actualizar'];
      echo "<script>
      let content_table_users = document.querySelector('.content-table-users');
      let user_update = document.querySelector('.user_update');
      
      function mostrarFormUserUpdate(){
        content_table_users.classList.add('oculto');
        user_update.classList.remove('oculto');
      }
      mostrarFormUserUpdate();
      </script>";
    }
    // Consulta SQL para seleccionar el usuario con el documento de identidad especificado
    $sql="SELECT * FROM usuarios WHERE documento_identidad='$documento_identidad'";
    // Ejecutar la consulta SQL
    $query=mysqli_query($conn, $sql);

    // Obtener la fila de resultados como un array asociativo
    $row= mysqli_fetch_array($query);
  ?>

  <a href="?p=created-acounts">Menu</a>

  <!-- Formulario para editar la información del usuario -->
  <div class="users-form">
    <form action="../../../../Proyecto_SendApp_2024/interfaces/Administrador/update.php" method="POST">
      <!-- Campo oculto para almacenar el documento de identidad del usuario -->
      <input type="hidden" name="documento_identidad" value="<?= $row['documento_identidad']?>">

      <!-- Campos para editar los datos del usuario -->
      <label for="nombres">Nombres:</label>
      <input type="text" name="nombres" id="nombres" value="<?= $row['nombres']?>"><br>

      <label for="apellidos">Apellidos:</label>
      <input type="text" name="apellidos" id="apellidos" value="<?= $row['apellidos']?>"><br>

      <label for="celular">Celular:</label>
      <input type="text" name="celular" id="celular" value="<?= $row['celular']?>"><br>

      <label for="correo">Correo:</label>
      <input type="text" name="correo" id="correo" value="<?= $row['correo']?>"><br>

      <label for="ficha">Ficha:</label>
      <input type="text" name="ficha" id="ficha" value="<?= $row['ficha']?>"><br>

      <!-- Menú desplegable para seleccionar el rol del usuario -->
      <label for="id_rol">Rol:</label>
      <select name="id_rol" id="id_rol">
        <?php
          // Realizar la consulta para obtener solo los roles de aprendiz y funcionario
          $sql_roles = "SELECT id_rol, nombre_rol FROM roles WHERE nombre_rol = 'funcionario' or nombre_rol = 'aprendiz'";
          $result_roles = mysqli_query($conn, $sql_roles);

          // Iterar sobre los resultados y crear opciones del menú desplegable
          while ($row_roles = mysqli_fetch_assoc($result_roles)) {
            echo "<option value='{$row_roles['id_rol']}'";
            // Si el ID del rol coincide con el del usuario, seleccionarlo por defecto
            if ($row_roles['id_rol'] == $row['id_rol']) {
              echo " selected";
            }
            echo ">{$row_roles['nombre_rol']}</option>";
          }
        ?>
      </select><br>

      <!-- Menú desplegable para seleccionar el servicio del usuario -->
      <label for="id_servicio">Servicio:</label>
      <select name="id_servicio" id="id_servicio">
        <?php
          // Realizar la consulta para obtener todos los servicios
          $sql_servicios = "SELECT id_servicio, nombre_servicio FROM servicios";
          $result_servicios = mysqli_query($conn, $sql_servicios);

          // Iterar sobre los resultados y crear opciones del menú desplegable
          while ($row_servicios = mysqli_fetch_assoc($result_servicios)) {
            echo "<option value='{$row_servicios['id_servicio']}'";
            // Si el ID del servicio coincide con el del usuario, seleccionarlo por defecto
            if ($row_servicios['id_servicio'] == $row['id_servicio']) {
                echo " selected";
            }
            echo ">{$row_servicios['nombre_servicio']}</option>";
          }
        ?>
      </select><br>

      <!-- Botón para enviar el formulario y actualizar la información del usuario -->
      <input type="submit" value="Actualizar">
    </form>
  </div>
</div>
<!--**************************************************************************************************************-->
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