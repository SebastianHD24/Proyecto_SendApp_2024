<!--Este codigo me extrae el nombre y el correo de la persona que inicio sesion para agregarselos a la interfaz-->

<?php 

    $documento_identidad = $_SESSION['documento_identidad']; // Creo la varia la cual tendra el valor del numero de documento con el cual se ingreso

    $sql_nombre_usuario = "SELECT * FROM usuarios WHERE documento_identidad = $documento_identidad"; //hago una consulta para extraer los nombres y apellidos y los guardo en una variable
  
    //Ejecutar las consultas SQL y obtener los resultados.
    $resultado_nombre_usuario =  mysqli_query($conn, $sql_nombre_usuario); 

    //obtener los datos de nombres y apellidos de los usuarios
    $fila_nombre_usuario = $resultado_nombre_usuario->fetch_assoc();
    //obtener el correo de los usuarios
    //Construir el nombre completo del usuario
    $nombre_completo = $fila_nombre_usuario['nombres'] . ' ' . $fila_nombre_usuario['apellidos'];

    // Consulta SQL para obtener datos de usuarios, roles y servicios
    $sql = "SELECT *, (SELECT nombre_rol FROM roles WHERE roles.id_rol = usuarios.id_rol) AS nombre_rol,
            (SELECT nombre_servicio FROM servicios WHERE servicios.id_servicio = usuarios.id_servicio) AS nombre_servicio
            FROM usuarios";

?>