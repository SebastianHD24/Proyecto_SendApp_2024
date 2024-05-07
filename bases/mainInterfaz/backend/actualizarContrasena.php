<?php

    //Incluimos la sesion iniciada, la conexion a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    //Obtenemos el documento de identidad, y la contraseña actual, la nueva y su validacion
    $documento_identidad = $_SESSION['documento_identidad'];
    $contraseñaActual = $_POST['contraseña_actual'];
    $validacion = $_POST['confirmar_contraseña'];
    $contraseñaNueva = $_POST['nueva_contraseña'];

    // Requisitos para la contraseña    
    const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*_-¡?¿·çºª.:,;=|+#\/])(?=.{6,})/';

    // Contraseña en la base de datos
    $sql = "SELECT contrasena FROM usuarios WHERE documento_identidad = $documento_identidad";
    $query = mysqli_query($conn, $sql);
    $contraseña = mysqli_fetch_array($query);
    $contraseñaBase = $contraseña['contrasena'];

    //Comparamos la contraseña en la base de datos con la ingresada por el usuario para verificar que coinciden, en caso de coincidir evaluamos que la nueva contraseña cumple con ciertos parametros de seguridad y si la nueva contraseña es distinta a la anteriror se actualizara correctmente de forma encriptada
    if (password_verify($contraseñaActual, $contraseñaBase)) {
        if (preg_match(REGEX, $contraseñaNueva)) {
            if ($validacion === $contraseñaNueva) {
                if ($validacion != $contraseñaActual) {
                    $encriptada = password_hash($validacion, PASSWORD_BCRYPT);
                    // Actualización de la base de datos
                    $consulta = "UPDATE usuarios SET contrasena='$encriptada' WHERE documento_identidad = $documento_identidad";
                    $peticion = mysqli_query($conn, $consulta);

                    // Verificación del éxito de la actualización
                    if ($peticion) {
                        echo json_encode(array('contra' => 0));
                    }   
                } else {
                    echo json_encode(array('contra' => 4));
                }
            } else {
                echo json_encode(array('contra' => 3));
            }
        } else {
            echo json_encode(array('contra' => 2));
        }
    } else {
        echo json_encode(array('contra' => 1));
    }