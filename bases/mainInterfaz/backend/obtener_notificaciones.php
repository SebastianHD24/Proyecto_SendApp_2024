<?php

//Incluimos la sesion iniciada, la conexion a la base de datos
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';

// Obtener la conexión a la base de datos
$conn = connection();

$funcionario = $_SESSION["documento_identidad"];

// Obtener la fecha del POST
$data = json_decode(file_get_contents("php://input"));
$day = $data->dia;
$month = $data->mes;
$year = $data->anio;

// Formatear la fecha para que coincida con el formato en la base de datos (YYYY-MM-DD)
$fecha = sprintf("%04d-%02d-%02d", $year, $month, $day);

// Realizar la consulta SQL para verificar si hay citas para la fecha proporcionada
$query = "SELECT * FROM citas WHERE fecha = '$fecha' AND usuario_f = $funcionario AND estado_cita = 'aceptado' ";
$result = mysqli_query($conn, $query);

// Verificar si hay resultados
if(mysqli_num_rows($result) > 0) {
    // Si hay citas, devolver "si" en JSON
    $response = array('respuesta' => 'si');
} else {
    // Si no hay citas, devolver "no" en JSON
    $response = array('respuesta' => 'no');
}

// Devolver la respuesta en formato JSON
echo json_encode($response);
?>