<?php
    include("../../conexion.php");
    $conn = connection();
    session_start();

    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
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
    $fecha = date('Y-m-d');
    
    


    $insercion = "INSERT INTO pqrs (documento_us, tipo_pqrs, descripcion, fecha_solicitud) VALUES ('" . $usuario['documento_identidad'] . "', '$tipo_pqrs','$descripcion_pqrs', '$fecha')";


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