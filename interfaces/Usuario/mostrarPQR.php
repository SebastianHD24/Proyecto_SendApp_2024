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

        $consulta = mysqli_query($conn, "SELECT id_peticion FROM pqr WHERE documento_us = '$id_usuario' AND vista = 0 AND respuesta_pqrs IS NOT NULL");

        if ($consulta->num_rows > 0){
            echo json_encode(array('success' => "1"));
        } else {
            echo json_encode(array('success' => "2"));
        }
    }
    $conn->close();