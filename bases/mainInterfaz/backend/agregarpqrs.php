<?php
    include("../../conexion.php");
    $conn = connection();
    session_start();

    //chequeando la conexion
    if (!$conn) {
        die("Conexión Falló: ".mysqli_connect_error());
    }

    $id_usuario = $_SESSION['documento_identidad'];
    // Consulta SQL para obtener los datos del usuario actual
    $sql = "SELECT * FROM usuarios WHERE documento_identidad = '$id_usuario'";
    $resultado = mysqli_query($conn, $sql);
    
    // Verificar si se encontraron resultados
    if(mysqli_num_rows($resultado) > 0) {
        // Obtener los datos del usuario
        $usuario = mysqli_fetch_assoc($resultado);
    }

    
    // Obtener el ID del usuario de la sesión
    //Tomando Datos del formulario html para luego ser enviados a la base de datos

    $tipo_pqrs = $_POST['tipo_solicitud'];
    $descripcion_pqrs = $_POST['descripcion_pqrs'];


    function fecha() {
        // Establecer la zona horaria deseada
        $zonaHoraria = new DateTimeZone('America/Bogota'); // Cambia 'America/Bogota' por la zona horaria que desees
        // Obtener la fecha actual en la zona horaria especificada
        $fechaActual = new DateTime('now', $zonaHoraria);
        // Formatear la fecha en el formato deseado (año/mes/día)
        $fechaCompleta = $fechaActual->format('Y/m/d');
        // Devolver la fecha formateada
        return $fechaCompleta;
    }
    // Ejemplo de uso
    $fecha = fecha(); 
    
    


    $insercion = "INSERT INTO pqr (documento_us, tipo_pqrs, descripcion, fecha_solicitud) VALUES ('" . $usuario['documento_identidad'] . "', '$tipo_pqrs','$descripcion_pqrs', '$fecha')";


    if ($descripcion_pqrs == null){
        echo json_encode(array('success' => 1));
    }else{
        if (mysqli_query($conn, $insercion)) {   
            echo json_encode(array('success' => 2));
        } else {
            echo "Error:" . $insercion . "<br>" . mysqli_error($conn);
        }
    }


    mysqli_close($conn);

?>