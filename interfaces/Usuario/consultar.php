<?php
    //llamar el archivo que hace la conexion a la base de datos
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    //condicional para saber si no se conecto a la base de datos
    if(!$conn){
        //terminar la ejecucion del codigo y madar un error
        die("Conexión fallida: " . mysqli_connect_error());
    } else {
        $consulta = mysqli_query($conn, "SELECT * FROM pqr WHERE respuesta_pqrs IS NULL");
        //encaso de encontrar un registro con los datos de la consulta mandar un respuesta
        if ($consulta->num_rows > 0){
            echo json_encode(array('success' => 1));
        } else {
            echo json_encode(array('success' => 2));
        }
    }
