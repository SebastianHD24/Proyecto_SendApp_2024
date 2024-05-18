<?php

    // Inclusion para la conexion con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

    $conn = connection();
    
    // Obtencion y asignacion del JSON recibido desde el cliente 
    $data = json_decode(file_get_contents("php://input"));
        
    // Info del administrador del area
    $sql = "SELECT imagen, nombres, apellidos, correo, celular FROM usuarios WHERE documento_identidad = $data->admin";
    $query = mysqli_query($conn, $sql);
    
    //  Verificacion de si existe o no un admin
    if ($query->num_rows > 0){
        $adminArea = mysqli_fetch_assoc($query);
    
        echo json_encode($adminArea);
    } else {
        echo json_encode(array("adminNotFound" => true));
    }