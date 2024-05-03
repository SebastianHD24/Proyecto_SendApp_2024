<!--Este codigo me extrae el nombre y el correo de la persona que inicio sesion para agregarselos a la interfaz-->
<?php 

    $documento_identidad = $_SESSION['documento_identidad']; // Creo la varia la cual tendra el valor del numero de documento con el cual se ingreso

    $sql_user = "SELECT * FROM usuarios WHERE documento_identidad = $documento_identidad"; //hago una consulta para extraer los nombres y apellidos y los guardo en una variable
  
    //Ejecutar las consultas SQL y obtener los resultados.
    $result_user = mysqli_query($conn, $sql_user); 
    //obtener los datos de los usuarios
    $row_user = $result_user->fetch_assoc();
    //Construir el nombre completo del usuario
    $full_name = $row_user['nombres'] . ' ' . $row_user['apellidos'];

    $id_rol = $row_user['id_rol'];

    // Consulta SQL para obtener datos de usuarios, roles y servicios
    $sql = "SELECT *, (SELECT nombre_rol FROM roles WHERE roles.id_rol = usuarios.id_rol) AS nombre_rol,
            (SELECT nombre_servicio FROM servicios WHERE servicios.id_servicio = usuarios.id_servicio) AS nombre_servicio
            FROM usuarios";