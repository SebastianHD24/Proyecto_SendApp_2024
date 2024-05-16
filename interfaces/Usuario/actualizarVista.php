<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    session_start();
    $id_usuario = $_SESSION["documento_identidad"];
    $vista = 1;

    // Consulta para actualizar el primer registro no visto a visto
    $consulta_id_primero = mysqli_prepare($conn, "SELECT id_peticion FROM pqr WHERE documento_us = ? AND vista = 0 AND respuesta_pqrs IS NOT NULL ORDER BY id_peticion DESC LIMIT 1");
    mysqli_stmt_bind_param($consulta_id_primero, "s", $id_usuario);
    mysqli_stmt_execute($consulta_id_primero);
    mysqli_stmt_bind_result($consulta_id_primero, $id_peticion);
    mysqli_stmt_fetch($consulta_id_primero);
    mysqli_stmt_close($consulta_id_primero);

    if (!$id_peticion) {
        // No se encontró ningún registro no visto, salir
        $conn->close();
        echo json_encode(array()); // Devolver objeto vacío en JSON
        exit();
    }

    // Actualizar el registro a visto
    $sql = mysqli_prepare($conn, "UPDATE pqr SET vista = ? WHERE documento_us = ? and id_peticion = ?");
    $vista = 1;
    mysqli_stmt_bind_param($sql, "iss", $vista, $id_usuario, $id_peticion);
    mysqli_stmt_execute($sql);
    mysqli_stmt_close($sql);

    // Consulta para obtener los datos del registro actualizado
    $consulta = mysqli_prepare($conn, "SELECT u.nombres, u.apellidos, u.id_rol, p.id_peticion,
    p.tipo_pqrs, p.respuesta_pqrs, p.fecha_solicitud, p.fecha_respuesta FROM pqr p INNER JOIN usuarios u ON p.documento_us = u.documento_identidad and u.documento_identidad = ? and id_peticion = ?");
    mysqli_stmt_bind_param($consulta, "ss", $id_usuario, $id_peticion);
    mysqli_stmt_execute($consulta);
    $resultado = mysqli_stmt_get_result($consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $usuarios = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $usuarios[] = $fila;
        }
        // Devolver los resultados en formato JSON
        header('Content-Type: application/json');
        echo json_encode($usuarios);
    } else {
        // Si no se encontraron usuarios, devolver un objeto vacío en JSON
        echo json_encode(array());
    }

    $conn->close();