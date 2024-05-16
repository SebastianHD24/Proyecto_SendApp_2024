<?php
// Inclusión para la conexión con la base de datos
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

$conn = connection();

// Array para almacenar la respuesta
$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cita = isset($_POST['id_cita']) ? intval($_POST['id_cita']) : 0;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
    $hora = isset($_POST['hora']) ? $_POST['hora'] : null;

    if ($id_cita && $fecha && $hora) {
        $estado = 'aceptado';

        // Actualizar la cita
        $stmt = $conn->prepare("UPDATE citas SET fecha = ?, hora = ?, estado_cita = ? WHERE id_cita = ?");
        $stmt->bind_param("sssi", $fecha, $hora, $estado, $id_cita);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                // Cita actualizada correctamente
                $response['success'] = true;
                $response['message'] = "Cita actualizada correctamente";
            } else {
                $response['success'] = false;
                $response['message'] = "No se encontró una cita para el ID proporcionado";
            }
        } else {
            $response['success'] = false;
            $response['message'] = "Error al actualizar la cita: " . $stmt->error;
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Datos del formulario incompletos o ID de la cita no proporcionado";
    }

    // Devolver la respuesta JSON
    echo json_encode($response);
}