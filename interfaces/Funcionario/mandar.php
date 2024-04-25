<?php
// Conexión a la base de datos
include '../../Login/conexion.php';
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y obtener datos del formulario
    $documento = isset($_POST['documento']) ? intval($_POST['documento']) : 0;
    $fecha = isset($_POST['dia']) ? $_POST['dia'] : null;
    $hora = isset($_POST['hora']) ? $_POST['hora'] : null;

    if ($documento && $fecha && $hora) {
        // Crear la consulta para insertar datos en la tabla 'citas'
        $stmt = $conn->prepare("INSERT INTO citas (estado_cita, fecha, hora, documento_usuario) VALUES (?, ?, ?, ?)");
        
        // Definir valores por defecto para los campos no especificados
        $estado_cita = 1; // Por ejemplo, 1 para "pendiente"

        // Unir parámetros a la consulta
        $stmt->bind_param("issi", $estado_cita, $fecha, $hora, $documento);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Cita insertada correctamente";
        } else {
            echo "Error al insertar la cita: " . $stmt->error;
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
