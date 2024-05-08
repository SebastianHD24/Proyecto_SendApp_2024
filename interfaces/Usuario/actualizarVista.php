<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    session_start();
    // Acceder al documento de identidad almacenado en la variable de sesión
    $id_usuario = $_SESSION["documento_identidad"];
    $vista = 1;

    $sql = mysqli_query($conn, "UPDATE pqr SET vista = $vista WHERE documento_us = '$id_usuario'");
    $consulta = "SELECT u.nombres, u.apellidos, u.id_rol, p.tipo_pqrs, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta FROM pqr p INNER JOIN usuarios u ON p.documento_us = u.documento_identidad and u.documento_identidad = '$id_usuario'";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado->num_rows > 0){
        $usuarios = array();
        // Agregar resultados de la primera consulta al arreglo de usuarios
        while ($fila = $resultado->fetch_assoc()) {
            $usuarios[] = $fila;
        }

        $conn->close();
        // Devolver los resultados en formato JSON
        header('Content-Type: application/json');
        echo json_encode($usuarios);
    } else {
        // Si no se encontraron usuarios, devolver un objeto vacío en JSON
        echo json_encode(array());
    }
