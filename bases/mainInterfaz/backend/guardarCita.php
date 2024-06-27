<?php
session_start(); // Asegúrate de iniciar la sesión
include '../../../../Proyecto_SendApp_2024/bases/conexion.php'; // Conexión a la base de datos

$conn = connection(); // Conexión a la base de datos

if (!$conn) {
    echo json_encode(['success' => 0, 'message' => 'Error al conectar a la base de datos']);
    exit();
}

// Obtener el ID del servicio del formulario
$id_servicio = isset($_POST['id_servicio']) ? intval($_POST['id_servicio']) : null;

if ($id_servicio === null) {
    echo json_encode(['success' => 0, 'message' => 'Error: El campo \'id_servicio\' es obligatorio.']);
    exit();
}

// Consulta preparada para obtener el estado del servicio
$sql = "SELECT estado_servicio FROM servicios WHERE id_servicio = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_servicio); // Evitar inyección SQL
$stmt->execute();
$query = $stmt->get_result();

// Obtener el estado actual del servicio
$estadoServicio = mysqli_fetch_array($query);
$estado = $estadoServicio['estado_servicio'];

// Verificar el estado del servicio
if ($estado != 1) {
    echo json_encode(['success' => 0, 'message' => 'Error: El estado del servicio no permite agendar citas en este momento.']);
    exit();
}

// Obtener los demás datos del formulario
$documento_identidad = $_SESSION['documento_identidad'];
$jornada = isset($_POST['jornada']) ? $_POST['jornada'] : null;
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
$usuario_f = isset($_POST['usuario_f']) ? $_POST['usuario_f'] : null;

if ($jornada === null || $descripcion === null || $usuario_f === null) {
    echo json_encode(['success' => 0, 'message' => 'Error: Todos los campos son obligatorios.']);
    exit();
}

if (empty($descripcion)) {
    echo json_encode(['success' => 0, 'message' => 'El campo descripción no está lleno.']);
    exit();
}

$estado_cita = 'pendiente'; // Estado predeterminado para la cita

// Uso de declaración preparada para evitar inyección SQL
$sql_insert = "INSERT INTO citas (descripcion, documento_usuario, jornada, estado_cita, id_servicio, usuario_f) VALUES (?, ?, ?, ?, ?, ?)";
$stmt_insert = mysqli_prepare($conn, $sql_insert);

if ($stmt_insert) {
    mysqli_stmt_bind_param($stmt_insert, 'ssssii', $descripcion, $documento_identidad, $jornada, $estado_cita, $id_servicio, $usuario_f);

    if (mysqli_stmt_execute($stmt_insert)) {
        mysqli_stmt_close($stmt_insert);
        mysqli_close($conn);
        echo json_encode(['success' => 1, 'message' => 'Cita guardada correctamente.']);
        exit();
    } else {
        echo json_encode(['success' => 0, 'message' => 'Error al guardar la cita: ' . mysqli_stmt_error($stmt_insert)]);
        exit();
    }
} else {
    echo json_encode(['success' => 0, 'message' => 'Error al preparar la declaración de inserción: ' . mysqli_error($conn)]);
    exit();
}

mysqli_close($conn);
