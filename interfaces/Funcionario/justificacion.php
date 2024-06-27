<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    if(!$conn){
        die("Conexión fallida: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT justificacion_rechazo FROM citas WHERE id_cita = '$id'";
        $resultado = mysqli_query($conn, $sql);

        // Verificar si la consulta devuelve resultados
        if ($resultado->num_rows > 0){
            $justificacion = $resultado->fetch_assoc();

            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($justificacion);
        } else {
            // Si no se encontraron resultados, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    } else {
        // Si no se recibe el parámetro 'id', devolver un error
        echo json_encode(array("error" => "No se proporcionó un ID"));
    }