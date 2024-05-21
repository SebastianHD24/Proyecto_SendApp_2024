<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    if(!$conn){
        die("Conexión fallida: " . mysqli_connect_error());
    }

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
?>