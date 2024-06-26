<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    if(!$conn){
        die("Conexión fallida: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT descripcion FROM pqr WHERE id_peticion = '$id'";
        $resultado = mysqli_query($conn, $sql);

        // Verificar si la consulta devuelve resultados
        if ($resultado->num_rows > 0){
            $descripcion = $resultado->fetch_assoc();

            $conn->close();
            // Devolver los resultados en formato JSON
            header('Content-Type: application/json');
            echo json_encode($descripcion);
        } else {
            // Si no se encontraron resultados, devolver un objeto vacío en JSON
            echo json_encode(array());
        }
    } else {
        // Si no se recibe el parámetro 'id', devolver un error
        echo json_encode(array("error" => "No se proporcionó un ID"));
    }