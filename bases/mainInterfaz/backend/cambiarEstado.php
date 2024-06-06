<?php
    // Inclusión del archivo para la conexión con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    
    // Establecer la conexión a la base de datos
    $conn = connection();
    
    // Obtener y decodificar los datos JSON enviados desde el cliente
    $data = json_decode(file_get_contents("php://input"));
    
    // Consulta preparada para obtener el estado del servicio
    $sql = "SELECT estado_servicio FROM servicios WHERE id_servicio = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $data->idServicio); // Evitar inyección SQL
    $stmt->execute();
    $query = $stmt->get_result();
    
    // Inicializar la respuesta que se enviará al cliente
    $response = array();
    $response['cambio'] = 0;
    
    // Obtener el estado actual del servicio
    $estadoServicio = mysqli_fetch_array($query);
    $estado = $estadoServicio['estado_servicio'];
    
    // Preparar la consulta para cambiar el estado del servicio
    if ($estado == 1) {
        $sqlUpdate = "UPDATE servicios SET estado_servicio = 0 WHERE id_servicio = ?";
    } elseif ($estado == 0) {
        $sqlUpdate = "UPDATE servicios SET estado_servicio = 1 WHERE id_servicio = ?";
    }
    
    // Ejecutar la actualización del estado del servicio
    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param("i", $data->idServicio); // Evitar inyección SQL
    $peticion = $stmtUpdate->execute();
    
    // Verificar si la actualización fue exitosa
    if ($peticion) {
        $response['cambio'] = 1; // Indicador de cambio exitoso
    }
    
    // Convertir la respuesta a JSON y enviarla de vuelta al cliente
    echo json_encode($response);
    
    // Cierre de las declaraciones preparadas y la conexión
    $stmt->close();
    $stmtUpdate->close();
    $conn->close();