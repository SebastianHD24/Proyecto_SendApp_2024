<?php 
session_start();
include '../../Login/conexion.php';

$conn = connection();

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$documento_identidad = $_SESSION['documento_identidad'];

if (isset($_POST['descripcion']) && $_POST['descripcion'] != "") {
    $datos = $_POST['descripcion'];

    if (isset($_POST['jornada']) && $_POST['jornada'] != "") {
        $jornada = $_POST['jornada'];
    
        // Uso de declaración preparada para inserción segura
        $estado= 'pendiente';
        $sql = "INSERT INTO citas (descripcion, documento_usuario, jornada, estado_cita) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Definir la cadena de tipos correcta: 'ssis' (cadena, entero, cadena, cadena)
            mysqli_stmt_bind_param($stmt, 'siss', $datos, $documento_identidad, $jornada, $estado);

            if (mysqli_stmt_execute($stmt)) {
                // Redirigir a 'usuarioSesion.php' después de una inserción exitosa
                header('Location: ../../interfaces/Usuario/usuarioSesion.php');
                exit();  // Asegúrate de usar exit() para evitar cualquier procesamiento adicional
            } else {
                echo "Error al guardar datos: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error al preparar la declaración: " . mysqli_error($conn);
        }
    } else {
        // Mensaje de error si 'jornada' no está definido
        echo "Error: El campo 'jornada' no está definido.";
    }
} else {
    echo "Por favor, ingresa datos válidos.";
}

mysqli_close($conn);
?>
