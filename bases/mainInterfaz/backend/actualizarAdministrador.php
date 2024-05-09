<?php
    // Inclusion para la conexion con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    
    $conn = connection();
    
    // Obtencion y asignacion del JSON recibido desde el cliente
    $data = json_decode(file_get_contents("php://input"));
    $idServicio = $data-> idServicio;
    $admin = $data->admin;
    
    // Obtencion de la informacion del servicio
    $sql = "SELECT admin_area FROM servicios WHERE id_servicio = $idServicio";
    $query = mysqli_query($conn, $sql);
    
    // Variable para almacenar el resultado de la operación
    $response = array();
    
    // Validacion que maneja los posibles errores al realizar la actualizacion del administrador
    if ($admin === null || $admin === "-") {
        $response['success'] = 1;
    } else {
        $servicioAdmin = mysqli_fetch_array($query);
        $adminArea = $servicioAdmin['admin_area'];    
        $consulta = "UPDATE servicios SET admin_area = $admin WHERE id_servicio = $idServicio";
        $peticion = mysqli_query($conn, $consulta);
        if ($peticion) {
            $response['success'] = 0;
        }
    };
    echo json_encode($response);