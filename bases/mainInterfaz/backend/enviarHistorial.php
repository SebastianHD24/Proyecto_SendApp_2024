<?php
    include("../../conexion.php");
    $conn = connection();
    session_start();
    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
    }
    
    $historial_notificaciones = $_POST['historial_notificaciones'];

    function fecha() {
        // Establecer la zona horaria deseada
        $zonaHoraria = new DateTimeZone('America/Bogota'); // Cambia 'America/Bogota' por la zona horaria que desees
        // Obtener la fecha actual en la zona horaria especificada
        $fechaActual = new DateTime('now', $zonaHoraria);
        // Formatear la fecha en el formato deseado (año/mes/día)
        $fechaCompleta = $fechaActual->format('Y/m/d');
        // Devolver la fecha formateada
        return $fechaCompleta;
    }
    // Ejemplo de uso
    $fecha_actual = fecha(); 
    $fecha_ayer = date('Y/m/d', strtotime('-1 day', strtotime($fecha_actual)));
    $ultima_semana = date('Y/m/d', strtotime('-7 day', strtotime($fecha_actual)));
    $ultimo_mes = date('Y/m/d', strtotime('-1 month', strtotime($fecha_actual)));
    $ultimo_anio = date('Y/m/d', strtotime('-1 year', strtotime($fecha_actual)));
    


    if ($historial_notificaciones == "hoy"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta 
        FROM pqr p 
        INNER JOIN usuarios u 
        ON p.documento_us = u.documento_identidad 
        WHERE p.fecha_solicitud = '$fecha_actual' 
        AND p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC";        
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }
    
            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else if ($historial_notificaciones == "ayer"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta 
        FROM pqr p 
        INNER JOIN usuarios u 
        ON p.documento_us = u.documento_identidad 
        WHERE p.fecha_solicitud BETWEEN '$fecha_ayer' 
        AND p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC"; 
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }
    
            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else if ($historial_notificaciones == "semana"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta 
        FROM pqr p 
        INNER JOIN usuarios u 
        ON p.documento_us = u.documento_identidad 
        WHERE p.fecha_solicitud BETWEEN '$ultima_semana' AND '$fecha_actual' 
        AND p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC"; 
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }
    
            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else if ($historial_notificaciones == "mes"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta 
        FROM pqr p 
        INNER JOIN usuarios u 
        ON p.documento_us = u.documento_identidad 
        WHERE p.fecha_solicitud BETWEEN '$ultimo_mes' AND '$fecha_actual' 
        AND p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }
    
            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else if($historial_notificaciones == "anio"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta 
        FROM pqr p 
        INNER JOIN usuarios u 
        ON p.documento_us = u.documento_identidad 
        WHERE p.fecha_solicitud BETWEEN '$ultimo_anio' AND '$fecha_actual' 
        AND p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }
    
            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else if($historial_notificaciones == "todos"){
        $sql = "SELECT u.nombres, u.apellidos, u.documento_identidad, u.id_rol, p.id_peticion, p.tipo_pqrs, p.descripcion, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta FROM pqr p INNER JOIN usuarios u ON p.documento_us = u.documento_identidad and p.respuesta_pqrs IS NOT NULL ORDER BY p.id_peticion DESC";
        $resultado = mysqli_query($conn, $sql);
        
        // Verificar si la consulta devuelve resultados
        if ($resultado->num_rows > 0){
            $historial = array();
            // Agregar resultados de la primera consulta al arreglo de usuarios
            while ($fila = $resultado->fetch_assoc()) {
                $historial[] = $fila;
            }

            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($historial);
        } else {
            // Si no se encontraron usuarios, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    }else{
        echo "Error de conexión";
    }
?>