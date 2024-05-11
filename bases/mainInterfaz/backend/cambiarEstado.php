<?php
    // Inclusion para la conexion con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

    $conn = connection();

    // Obtencion y asignacion del JSON recibido desde el cliente 
    $data = json_decode(file_get_contents("php://input"));

    // Obtencion de la informacion del servicio
    $sql = "SELECT estado_servicio FROM servicios WHERE id_servicio = $data->idServicio";
    $query = mysqli_query($conn, $sql);

    // Variable para almacenar el resultado de la operación
    $response = array();
    $response['cambio'] = 0;

    // Estado del servicio
    $estadoServicio = mysqli_fetch_array($query);
    $estado = $estadoServicio['estado_servicio'];

    // Cambio del estado
    if ($estado == 1){
        $consulta = "UPDATE servicios SET estado_servicio = 0 WHERE id_servicio = $data->idServicio";
        $peticion = mysqli_query($conn, $consulta);
    } else if  ($estado == 0){
        $consulta2 = "UPDATE servicios SET estado_servicio = 1 WHERE id_servicio = $data->idServicio";
        $peticion = mysqli_query($conn, $consulta2);
    }
    
    // Respuesta al cliente en forma de JSON
    echo json_encode($response);