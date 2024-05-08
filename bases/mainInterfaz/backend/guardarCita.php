<?php 
session_start(); // Asegúrate de iniciar la sesión
include '../../../../Proyecto_SendApp_2024/bases/conexion.php'; // Conexión a la base de datos

$conn = connection(); // Conexión a la base de datos

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtenemos el ID del servicio del formulario
$id_servicio = isset($_POST['id_servicio']) ? intval($_POST['id_servicio']) : null;

if ($id_servicio === null) {
    die("Error: El campo 'id_servicio' es obligatorio.");
}

$documento_identidad = $_SESSION['documento_identidad']; // Obtenemos el documento de identidad del usuario

// Verificamos que se haya proporcionado una descripción
if (isset($_POST['descripcion']) && $_POST['descripcion'] !== "") {
    $descripcion = $_POST['descripcion'];

    // Verificamos que se haya proporcionado la jornada
    if (isset($_POST['jornada']) && $_POST['jornada'] !== "") {
        $jornada = $_POST['jornada'];
        $estado = 'pendiente'; // Estado predeterminado para la cita
        
        // Uso de declaración preparada para evitar inyección SQL
        $sql = "INSERT INTO citas (descripcion, documento_usuario, jornada, estado_cita, id_servicio) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Definimos los tipos de datos para bind_param
            mysqli_stmt_bind_param($stmt, 'sisss', $descripcion, $documento_identidad, $jornada, $estado, $id_servicio);

            if (mysqli_stmt_execute($stmt)) {
                // Si la inserción es exitosa, redirigimos al usuario a su sesión
                header('Location: ../../../../Proyecto_SendApp_2024/interfaces/Usuario/usuarioSesion.php');
                exit(); // Termina el script para evitar más procesamiento
            } else {
                echo "Error al guardar datos: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt); // Cierra el statement
        } else {
            echo "Error al preparar la declaración: " . mysqli_error($conn); // Manejo de errores de preparación
        }
    } else {
        echo "Error: El campo 'jornada' es obligatorio.";
    }
} else {
    echo "Error: El campo 'descripcion' es obligatorio.";
}

mysqli_close($conn); // Cierra la conexión a la base de datos
?>
