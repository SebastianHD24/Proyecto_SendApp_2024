<?php
    // Inclusión para la conexión con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    
    $conn = connection();
    
    // Obtencion y asignacion del JSON recibido desde el cliente 
    $data = json_decode(file_get_contents("php://input"));
    
    // Obtencion de la informacion del servicio usando una declaración preparada
    $sql = "SELECT estado_servicio FROM servicios WHERE id_servicio = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $data->idServicio);
    $stmt->execute();
    $query = $stmt->get_result();
    
    // Variable para almacenar el resultado de la operación
    $response = array();
    $response['cambio'] = 0;
    
    // Estado del servicio
    $estadoServicio = mysqli_fetch_array($query);
    $estado = $estadoServicio['estado_servicio'];
    
    // Cambio del estado usando una declaración preparada
    if ($estado == 1) {
        $sqlUpdate = "UPDATE servicios SET estado_servicio = 0 WHERE id_servicio = ?";
    } elseif ($estado == 0) {
        $sqlUpdate = "UPDATE servicios SET estado_servicio = 1 WHERE id_servicio = ?";
    }
    
    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param("i", $data->idServicio);
    $peticion = $stmtUpdate->execute();
    
    if ($peticion) {
        $response['cambio'] = 1; // Indicador de cambio exitoso
    }
    
    // Respuesta al cliente en forma de JSON
    echo json_encode($response);
    
    // Cierre de las declaraciones y la conexión
    $stmt->close();
    $stmtUpdate->close();
    $conn->close();