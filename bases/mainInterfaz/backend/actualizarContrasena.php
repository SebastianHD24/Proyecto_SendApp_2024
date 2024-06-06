<?php
    // Incluir la sesión iniciada y la conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();
    
    // Obtener datos enviados desde el formulario
    $documento_identidad = $_SESSION['documento_identidad'];
    $contraseñaActual = $_POST['contraseña_actual'];
    $validacion = $_POST['confirmar_contraseña'];
    $contraseñaNueva = $_POST['nueva_contraseña'];
    
    // Definir los requisitos de la nueva contraseña usando una expresión regular
    const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_\-¡?¿·çºª.:,;=|+#\\/])(?=.{6,})/';
    
    // Consulta preparada para obtener la contraseña actual del usuario desde la base de datos
    $sql = "SELECT contrasena FROM usuarios WHERE documento_identidad = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $documento_identidad);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $contraseña = mysqli_fetch_array($result);
    $contraseñaBase = $contraseña['contrasena'];
    
    // Verificar si la contraseña actual ingresada coincide con la almacenada en la base de datos
    if (password_verify($contraseñaActual, $contraseñaBase)) {
        // Verificar si la nueva contraseña cumple con los requisitos de seguridad
        if (preg_match(REGEX, $contraseñaNueva)) {
            // Verificar si la nueva contraseña y su confirmación coinciden
            if ($validacion === $contraseñaNueva) {
                // Verificar si la nueva contraseña es diferente de la actual
                if ($validacion != $contraseñaActual) {
                    $encriptada = password_hash($validacion, PASSWORD_BCRYPT);
                
                    // Consulta preparada para actualizar la contraseña en la base de datos
                    $consulta = "UPDATE usuarios SET contrasena=? WHERE documento_identidad = ?";
                    $stmtUpdate = mysqli_prepare($conn, $consulta);
                    mysqli_stmt_bind_param($stmtUpdate, "si", $encriptada, $documento_identidad);
                    $peticion = mysqli_stmt_execute($stmtUpdate);
                
                    // Verificación del éxito de la actualización
                    if ($peticion) {
                        echo json_encode(array('contra' => 0)); // Éxito
                    }
                } else {
                    echo json_encode(array('contra' => 4)); // La nueva contraseña es igual a la actual
                }
            } else {
                echo json_encode(array('contra' => 3)); // La nueva contraseña y la confirmación no coinciden
            }
        } else {
            echo json_encode(array('contra' => 2)); // La nueva contraseña no cumple con los requisitos de seguridad
        }
    } else {
        echo json_encode(array('contra' => 1)); // La contraseña actual es incorrecta
    }
    
    // Cierre de la declaración preparada y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);