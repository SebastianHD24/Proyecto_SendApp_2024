<?php
    // Incluimos la sesión iniciada y la conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    // Obtenemos el documento de identidad, y la contraseña actual, la nueva y su validación
    $documento_identidad = $_SESSION['documento_identidad'];
    $contraseñaActual = $_POST['contraseña_actual'];
    $validacion = $_POST['confirmar_contraseña'];
    $contraseñaNueva = $_POST['nueva_contraseña'];

    // Requisitos para la contraseña    
    const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_\-¡?¿·çºª.:,;=|+#\\/])(?=.{6,})/';

    // Consulta preparada para obtener la contraseña de la base de datos
    $sql = "SELECT contrasena FROM usuarios WHERE documento_identidad = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $documento_identidad);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $contraseña = mysqli_fetch_array($result);
    $contraseñaBase = $contraseña['contrasena'];

    // Comparamos la contraseña en la base de datos con la ingresada por el usuario
    if (password_verify($contraseñaActual, $contraseñaBase)) {
        if (preg_match(REGEX, $contraseñaNueva)) {
            if ($validacion === $contraseñaNueva) {
                if ($validacion != $contraseñaActual) {
                    $encriptada = password_hash($validacion, PASSWORD_BCRYPT);

                    // Consulta preparada para actualizar la contraseña en la base de datos
                    $consulta = "UPDATE usuarios SET contrasena=? WHERE documento_identidad = ?";
                    $stmtUpdate = mysqli_prepare($conn, $consulta);
                    mysqli_stmt_bind_param($stmtUpdate, "si", $encriptada, $documento_identidad);
                    $peticion = mysqli_stmt_execute($stmtUpdate);

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

    // Cierre de la declaración preparada y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);