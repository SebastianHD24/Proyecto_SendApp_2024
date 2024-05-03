<?php
    include '../../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();
    
    //Obtención de los valores en los inputs y actualización de la base de datos y sesión
    $contraseña = $_POST['validacion'];
    $documento = $_SESSION['documento_identidad'];

    //Contraseña en la base de datos
    $sql = "SELECT contrasena FROM usuarios WHERE documento_identidad = $documento";

    $query = mysqli_query($con, $sql);

    $contraseñaActual = mysqli_fetch_array($query);

    //Requisitos para la contraseña    
    const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*])(?=.{8,})/';
    
    if ($contraseñaActual['contrasena'] === $contraseña) {
        echo json_encode(array('success' => 1));
    }

    //Condicional para verificar que la contraseña cumple los requisitos
    else if (preg_match(REGEX, $contraseña)) {
        // Actualización de la base de datos
        $consulta = "UPDATE usuarios SET contrasena='$contraseña' WHERE documento_identidad = $documento";
        $peticion = mysqli_query($conn, $consulta);
        
        // Verificación del éxito de la actualización
        if ($peticion) {
            echo json_encode(array('success' => 0));
        }
    } else {
        echo json_encode(array('success' => 'La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un carácter especial.'));
    };