<?php
// Incluir la conexión a la base de datos y la sesión
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';

// Obtener la conexión a la base de datos
$conn = connection();

// Inicializar la respuesta
$response = array('success' => false);

// Verificar si se han enviado los datos como JSON
$input = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los parámetros esperados
if ($input && isset($input['fecha']) && isset($input['hora']) && isset($input['documento_identidad']) && isset($input['idCita'])) {
    // Obtener los parámetros del JSON recibido
    $fecha = $input['fecha'];
    $hora = $input['hora'];
    $documento_identidad = $input['documento_identidad'];
    $idCita = $input['idCita'];

    // Consultar los datos del usuario y la cita
    $query = "SELECT u.nombres, u.apellidos, u.programa, u.ficha, c.descripcion 
              FROM usuarios u 
              INNER JOIN citas c ON u.documento_identidad = c.documento_usuario
              WHERE c.documento_usuario = ? AND c.fecha = ? AND c.hora = ? AND c.id_cita = ?";
    $stmt = mysqli_prepare($conn, $query);
    
    // Verificar si la consulta se preparó correctamente
    if ($stmt) {
        // Bind de los parámetros por referencia
        mysqli_stmt_bind_param($stmt, "issi", $documento_identidad, $fecha, $hora, $idCita);
        
        // Ejecutar la consulta
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        // Obtener el resultado de la consulta
        if ($row = mysqli_fetch_assoc($result)) {
            // Preparar la respuesta con los datos obtenidos
            $response['success'] = true;
            $response['nombre_aprendiz'] = $row['nombres'] . ' ' . $row['apellidos'];
            $response['programa'] = $row['programa'];
            $response['ficha'] = $row['ficha'];
            $response['descripcion'] = $row['descripcion'];
        }
    } else {
        $response['error'] = 'Error al preparar la consulta';
    }
} else {
    $response['error'] = 'Datos insuficientes';
}

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);