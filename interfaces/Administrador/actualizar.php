<?php
// Incluir el archivo de conexión
include("../../bases/conexion.php");
// Establecer conexión a la base de datos
$conn = connection();

// Obtener el documento de identidad del usuario a editar desde la solicitud GET
$documento_identidad=$_GET['documento_identidad'];

// Consulta SQL para seleccionar el usuario con el documento de identidad especificado
$sql="SELECT * FROM usuarios WHERE documento_identidad='$documento_identidad'";
// Ejecutar la consulta SQL
$query=mysqli_query($conn, $sql);

// Obtener la fila de resultados como un array asociativo
$row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Botón para volver al menú principal -->
    <input type="button" onclick="window.location.href='Administrador.php';" value="Menú" />

    <!-- Formulario para editar la información del usuario -->
    <div class="users-form">
        <form action="update.php" method="POST">
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
</body>
</html>