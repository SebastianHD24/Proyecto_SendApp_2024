<?php
include("../../../Proyecto_SendApp_2024/bases/conexion.php");
$conn = connection();
if(!$conn){
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    // Obtener el ID del usuario de la sesión
    session_start();
    $id_usuario = $_SESSION["documento_identidad"];

    $fecha_actual = new DateTime();
    $fecha_actual->modify('-3 days');
    $fecha_limite = $fecha_actual->format('Y-m-d');

    $consulta = mysqli_query($conn, "SELECT s.nombre_servicio 
    FROM citas c 
    JOIN servicios s ON c.id_servicio = s.id_servicio 
    WHERE c.estado_cita = 'rechazado' AND c.documento_usuario = '$id_usuario' AND c.fecha >= '$fecha_limite'");

    if ($consulta) {
        $num_registros = mysqli_num_rows($consulta);
        $datos = array();

        while($fila = mysqli_fetch_assoc($consulta)) {
            $datos[] = $fila;
        }

        // Devolver los datos en formato JSON
        echo json_encode(array('num_registros' => $num_registros, 'datos' => $datos));
    } else {
        echo json_encode(array('error' => "Error al realizar la consulta"));
    }
}
$conn->close();