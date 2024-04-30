<?php
include '../../Login/conexion.php';
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cita = isset($_POST['id_cita']) ? intval($_POST['id_cita']) : 0;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
    $hora = isset($_POST['hora']) ? $_POST['hora'] : null;
    $estado = 'aceptado';

    if ($id_cita && $fecha && $hora) {
        $stmt = $conn->prepare("UPDATE citas SET fecha = ?, hora = ?, estado_cita = ? WHERE id_cita = ?");
        $stmt->bind_param("sssi", $fecha, $hora, $estado, $id_cita);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Cita actualizada correctamente";
            } else {
                echo "No se encontró una cita para el ID proporcionado";
            }
        } else {
            echo "Error al actualizar la cita: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Datos del formulario incompletos o ID de la cita no proporcionado";
    }
}

$conn->close();
?>
