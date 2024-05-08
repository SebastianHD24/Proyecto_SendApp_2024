<?php
// echo 'probando si llega';
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
$nombreServicio = ''; // Valor predeterminado para evitar errores de variable indefinida

// Establecer la conexión a la base de datos
$conn = connection(); // Asegúrate de tener una función `connection()`

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$idServicio = isset($_GET['id_servicio']) ? intval($_GET['id_servicio']) : null;

$response = [];

if ($idServicio) {
    // Consulta para obtener el nombre del servicio por ID
    $sql = "SELECT nombre_servicio FROM servicios WHERE id_servicio = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idServicio);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response['nombre_servicio'] = $row['nombre_servicio'];
    } else {
        $response['error'] = 'No se encontró el servicio';
    }

    $stmt->close();
} else {
    $response['error'] = 'ID de servicio no proporcionado';
}

$conn->close();

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
