<?php
    // Incluimos la sesión iniciada y la conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    // Obtención de los valores en los inputs y actualización de la base de datos y sesión
    $documento_identidad = $_SESSION['documento_identidad'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

    // Validación del formato del correo electrónico
    if (!preg_match($regex, $correo)) {
        echo json_encode(array('success' => 1));
    // Validación de que el numero celular solo contenga números
    } else if (!ctype_digit($celular)) {
        echo json_encode(array('success' => 2));
    // Validación de la longitud del número de celular
    } else if ((strlen($celular) != 10) && (strlen($celular) != 15)) {
        echo json_encode(array('success' => 3));
    // Consulta y actualizacion de los campos
    } else {
        // Actualización de la base de datos utilizando consultas preparadas
        $consulta = "UPDATE usuarios SET correo=?, celular=? WHERE documento_identidad = ?";
        $stmt = $conn->prepare($consulta);
        $stmt->bind_param("ssi", $correo, $celular, $documento_identidad);
        $peticion = $stmt->execute();

        // Verificación del éxito de la actualización
        if ($peticion) {
            echo json_encode(array('success' => 0));
        }
    };