<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    if(!$conn){
        die("Conexión fallida: " . mysqli_connect_error());
    } else {
        $consulta = mysqli_query($conn, "SELECT * FROM pqr WHERE respuesta_pqrs IS NULL");

        if ($consulta->num_rows > 0){
            echo json_encode(array('success' => 1));
        } else {
            echo json_encode(array('success' => 2));
        }
    }
