<?php
    include("../Login/conexion.php");
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
        echo "<script>alert('Debes agregar una descripcion de tu PQRS')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pqrs.php'>";
    }else{
        if (mysqli_query($conn, $insercion)) {   

            echo "<meta http-equiv='refresh' content='0; url=pqrs.php'>";
    
        } else {
            // Para confirmar, habilitarlo
            // echo "<h1><center>Registro Grabado Correctamente</center></h1>";
        
            echo "Error:" . $insercion . "<br>" . mysqli_error($conn);
        }
    }

    // Condicion para verificar el registro en la bd


    mysqli_close($conn);

?>