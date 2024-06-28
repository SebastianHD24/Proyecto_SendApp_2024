<?php
// Inclusión para la conexión con la base de datos
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
$conn = connection();
// Obtener el ID del usuario de la sesión
session_start();
// Acceder al documento de identidad almacenado en la variable de sesión
$id_usuario = $_SESSION["documento_identidad"];

// Array para almacenar la respuesta
$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cita = isset($_POST['id_cita']) ? intval($_POST['id_cita']) : 0;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
    $hora = isset($_POST['hora']) ? $_POST['hora'] : null;

    if ($fecha && $hora && $id_usuario) {
        $sql = $conn->prepare("SELECT hora, fecha FROM citas WHERE fecha = ? AND hora = ? AND usuario_f = ?");
        $sql->bind_param("sss", $fecha, $hora, $id_usuario);
        
        if ($sql->execute()) {
            $sql->store_result();
            if ($sql->num_rows > 0) {
                $response['success'] = false;
                $response['message'] = "Ya hay una cita agendada a la misma hora";
            } else {
                if ($id_cita) {
                    $estado = 'aceptado';
        
                    // Actualizar la cita
                    $stmt = $conn->prepare("UPDATE citas SET fecha = ?, hora = ?, estado_cita = ? WHERE id_cita = ?");
                    $stmt->bind_param("sssi", $fecha, $hora, $estado, $id_cita);
        
                    if ($stmt->execute()) {
                        if ($stmt->affected_rows > 0) {
                            // Cita actualizada correctamente
                            $response['success'] = true;
                            $response['message'] = "Cita actualizada correctamente";
        
                            $url = 'http://sendapp.com.co/Proyecto_SendApp_2024/scripts/email/emailCitas.php?id_cita=' . $id_cita;
                            $emailResponse = file_get_contents($url);
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
            }
        } else {
            $response['success'] = false;
            $response['message'] = "Error al ejecutar la consulta: " . $sql->error;
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Fecha y hora no proporcionadas";
    }

    // Devolver la respuesta JSON
    echo json_encode($response);
}
?>


