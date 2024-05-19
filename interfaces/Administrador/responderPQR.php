<?php
    include("../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();
    // Create connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $respuesta = $_POST['respuesta_pqrs'];
    $id_pqr = $_POST['id_peticion'];

    function fecha() {
        // Establecer la zona horaria deseada
        $zonaHoraria = new DateTimeZone('America/Bogota'); // Cambia 'America/Bogota' por la zona horaria que desees
        // Obtener la fecha actual en la zona horaria especificada
        $fechaActual = new DateTime('now', $zonaHoraria);
        // Formatear la fecha en el formato deseado (año/mes/día)
        $fechaCompleta = $fechaActual->format('Y/m/d');
        // Devolver la fecha formateada
        return $fechaCompleta;
    }
    // Ejemplo de uso
    $fecha = fecha();


    $sql = "UPDATE pqr SET respuesta_pqrs = '$respuesta', fecha_respuesta = '$fecha' WHERE id_peticion = $id_pqr";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array('success' => 3));
    } else {
        echo json_encode(array('success' => 4));
    }

    mysqli_close($conn);
?>