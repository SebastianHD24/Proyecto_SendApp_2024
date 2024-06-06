<?php
    // Incluir el archivo de conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    
    // Establecer la conexión a la base de datos
    $conn = connection();
    
    // Obtener y decodificar los datos JSON enviados desde el cliente
    $data = json_decode(file_get_contents("php://input"));
    $idServicio = $data->idServicio;  // ID del servicio
    $admin = $data->admin;  // Nuevo administrador asignado
    
    // Inicializar la respuesta que se enviará al cliente
    $response = array();
    
    // Verificar si se ha proporcionado un nuevo administrador válido
    if ($admin === null || $admin === "-") {
        // Si el valor de $admin es nulo o "-", establecer éxito en 1 para indicar un error
        $response['success'] = 1;
    } else {
        // Preparar la consulta para obtener el área administrativa actual del servicio
        $stmt = $conn->prepare("SELECT admin_area FROM servicios WHERE id_servicio = ?");
        $stmt->bind_param("i", $idServicio);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Obtener el área administrativa actual del servicio
        if ($result->num_rows > 0) {
            $servicioAdmin = $result->fetch_assoc();
            $adminArea = $servicioAdmin['admin_area'];
        
            // Preparar la consulta para actualizar el campo admin_area del servicio con el nuevo administrador
            $stmt = $conn->prepare("UPDATE servicios SET admin_area = ? WHERE id_servicio = ?");
            $stmt->bind_param("ii", $admin, $idServicio);
            $peticion = $stmt->execute();
        
            // Verificar si la actualización fue exitosa
            if ($peticion) {
                // Si la actualización fue exitosa, establecer éxito en 0
                $response['success'] = 0;
            }
        }
        $stmt->close();
    }
    
    // Convertir la respuesta a JSON y enviarla de vuelta al cliente
    echo json_encode($response);