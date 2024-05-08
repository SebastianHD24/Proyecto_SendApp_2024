<?php

    //Incluimos la sesion iniciada y la conexion a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();
    
    // Obtención de los valores en los inputs y actualización de la base de datos y sesión
    $documento_identidad = $_SESSION['documento_identidad'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
    
    // Validación del formato del correo electrónico y del número de celular
    if (!preg_match($regex, $correo)){
        echo json_encode(array('success' => 1));
    } else if (!ctype_digit($celular)){
        echo json_encode(array('success' => 2));
    } else if ((strlen($celular) != 10) && (strlen($celular) != 15)){
        echo json_encode(array('success' => 3));
    } else {
        // Actualización de la base de datos
        $consulta = "UPDATE usuarios SET correo='$correo', celular='$celular' WHERE documento_identidad = $documento_identidad";
        $peticion = mysqli_query($conn, $consulta);
    
        // Verificación del éxito de la actualización
        if ($peticion) {
            echo json_encode(array('success' => 0));
        }
    };
?>