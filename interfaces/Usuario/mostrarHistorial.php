<?php
    if(isset($_GET['id'])) {
        $id_peticion = $_GET['id'];
        
        include("../../../Proyecto_SendApp_2024/bases/conexion.php");
        $conn = connection();

        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Consulta preparada para prevenir la inyección de SQL
        $consulta = "SELECT u.nombres, u.apellidos, u.id_rol, p.id_peticion, p.tipo_pqrs, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta FROM pqr p INNER JOIN usuarios u ON p.documento_us = u.documento_identidad WHERE p.id_peticion = ?";
        
        $stmt = $conn->prepare($consulta);
        $stmt->bind_param("s", $id_peticion);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0){
            $datos_pqr = $resultado->fetch_assoc(); // Obtener los datos de la consulta
            $conn->close();
            header('Content-Type: application/json');
            echo json_encode($datos_pqr);
        } else {
            echo json_encode(array()); // Devolver objeto vacío en caso de no encontrar resultados
        }
    } else {
        echo json_encode(array('error' => "No se proporcionó el ID"));
    }