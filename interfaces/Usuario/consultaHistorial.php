<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    if(!$conn){
        die("Conexión fallida: " . mysqli_connect_error());
    } else {
        // Obtener el ID del usuario de la sesión
        session_start();
        // Acceder al documento de identidad almacenado en la variable de sesión
        $id_usuario = $_SESSION["documento_identidad"];

        $consulta = mysqli_query($conn, "SELECT COUNT(*) AS num_registros FROM pqr WHERE documento_us = '$id_usuario' AND vista = 1 AND respuesta_pqrs IS NOT NULL");

        if ($consulta) {
            // Obtener el número de registros desde la consulta
            $fila = $consulta->fetch_assoc();
            $num_registros = $fila['num_registros'];

            // Devolver el número de registros en formato JSON
            echo json_encode(array('num_registros' => $num_registros));
        } else {
            // Si hay algún error en la consulta, devolver un mensaje de error en JSON
            echo json_encode(array('error' => "Error al realizar la consulta"));
        }
    }
    $conn->close();