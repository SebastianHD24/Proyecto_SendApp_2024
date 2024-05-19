<?php
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cita = isset($_POST['id_cita']) ? intval($_POST['id_cita']) : 0;
    $justificacion = isset($_POST['justificacion']) ? $_POST['justificacion'] : null;
    $estado = 'rechazado'; // Cambiar el estado a 'rechazado'

    if ($id_cita && $justificacion) {
        // Actualizar la cita con el estado rechazado y la justificación proporcionada
        $stmt = $conn->prepare("UPDATE citas SET estado_cita = ?, justificacion_rechazo = ? WHERE id_cita = ?");
        $stmt->bind_param("ssi", $estado, $justificacion, $id_cita);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Cita actualizada correctamente";
                // Redirigir al usuario a citaspendiente.php después de actualizar la cita correctamente
                header('Location: citaspendiente.php');
                exit; // Asegura que el script se detenga después de la redirección
            } else {
                echo "No se encontró una cita para el ID proporcionado";
            }
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Datos del formulario incompletos o ID de la cita no proporcionado";
    }
}

$conn->close();
?>