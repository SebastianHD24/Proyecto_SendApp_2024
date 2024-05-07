<?php

    //Incluimos la sesion iniciada y la conexion a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    $servicio = $_POST['idServicio'];

    // Registro del servicio 
    $consultaSql = "SELECT estado_servicio FROM servicios WHERE id_servicio = $servicio";
    $peticion = mysqli_query($conn, $consultaSql);
    $estadoServicio = mysqli_fetch_array($peticion);
    $estado = $estadoServicio['estado_servicio'];

    if ($estado == 1){
        $consultaSer = "UPDATE servicios SET estado_servicio = 0 WHERE id_servicio = '$servicio'";
        $peticionSer = mysqli_query($conn, $consultaSer);
    } else if  ($estado == 0){
        $consultaSer2 = "UPDATE servicios SET estado_servicio = 1 WHERE id_servicio = '$servicio'";
        $peticionSer2 = mysqli_query($conn, $consultaSer2);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit(); 