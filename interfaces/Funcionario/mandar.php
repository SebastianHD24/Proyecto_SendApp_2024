<?php
// Conexión a la base de datos
include '../../Login/conexion.php';
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y obtener datos del formulario
    $documento = isset($_POST['documento']) ? intval($_POST['documento']) : 0;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
    $hora = isset($_POST['hora']) ? $_POST['hora'] : null;
    $estado= 'aceptado';
    if ($documento && $fecha && $hora) {
        // Crear la consulta para actualizar datos en la tabla 'citas'
        $stmt = $conn->prepare("UPDATE citas SET fecha = ?, hora = ?,estado_cita= ? WHERE documento_usuario = ?");
        
        // Unir parámetros a la consulta
        $stmt->bind_param("sssi", $fecha, $hora, $estado, $documento);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Cita actualizada correctamente";
            } else {
                echo "No se encontró una cita para el documento proporcionado";
            }
        } else {
            echo "Error al actualizar la cita: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Datos del formulario incompletos";
    }
}

// Cerrar la conexión
$conn->close();
?>
