<?php

    // Inclusion para la conexion con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

    $conn = connection();
    
    // Obtencion y asignacion del JSON recibido desde el cliente 
    $data = json_decode(file_get_contents("php://input"));
        
    // Servicio y admin
    $sql = "SELECT imagen, nombres, apellidos, correo, celular FROM usuarios WHERE documento_identidad = $data->admin";
    $query = mysqli_query($conn, $sql);
    
    if ($query->num_rows > 0){
        $adminArea = mysqli_fetch_assoc($query);
    
        // Codificar la imagen como una URL base64
        $imagenCodificada = base64_encode($adminArea['imagen']);
        $adminArea['imagen'] = 'data:image/jpeg;base64,' . $imagenCodificada;
    
        echo json_encode($adminArea);
    } else {
        echo json_encode(array("adminNotFound" => true));
    }