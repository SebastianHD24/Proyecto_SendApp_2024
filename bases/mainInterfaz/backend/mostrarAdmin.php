<?php

    // Inclusion para la conexion con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

    $conn = connection();

    // Obtencion y asignacion del JSON recibido desde el cliente 
    $data = json_decode(file_get_contents("php://input"));

    // Verificación si el admin es 0
    if ($data->admin == 0) {
        echo json_encode(array("adminNotFound" => true));
        exit();
    }

    // Info del administrador del area , preparacion y realizacion de la consulta
    $sql = "SELECT nombres, apellidos, correo, celular FROM usuarios WHERE documento_identidad = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $data->admin);
    $stmt->execute();
    $query = $stmt->get_result();

    // Verificacion de si existe o no un admin
    if ($query->num_rows > 0){
        $adminArea = $query->fetch_assoc();
        echo json_encode($adminArea);
    } else {
        echo json_encode(array("adminNotFound" => true));
    }

    $stmt->close();
    $conn->close();