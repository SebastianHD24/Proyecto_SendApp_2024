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

        $consulta = mysqli_query($conn, "SELECT id_peticion FROM pqr WHERE documento_us = '$id_usuario' AND vista = 1 AND respuesta_pqrs IS NOT NULL ORDER BY id_peticion DESC");

        if ($consulta) {
            $id_peticion = array(); // Array para almacenar las id_peticion
            // Recorrer los resultados y almacenar las id_peticion en el array
            while ($fila = $consulta->fetch_assoc()) {
                $id_peticion[] = $fila['id_peticion'];
            }
            // Obtener el número de registros desde el array
            $num_registros = count($id_peticion);

            // Devolver el número de registros y las id_peticion en formato JSON
            echo json_encode(array('num_registros' => $num_registros, 'id_peticion' => $id_peticion));
        } else {
            // Si hay algún error en la consulta, devolver un mensaje de error en JSON
            echo json_encode(array('error' => "Error al realizar la consulta"));
        }
    }
    $conn->close();