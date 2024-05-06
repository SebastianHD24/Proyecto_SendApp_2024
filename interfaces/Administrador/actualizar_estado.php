<?php
// Incluir el archivo de conexión
include("../../bases/conexion.php");
// Establecer conexión a la base de datos
$con = connection();

// Verificar si se recibieron los parámetros esperados en la solicitud GET
if(isset($_GET['documento_identidad']) && isset($_GET['action'])) { // Cambiado de 'estado' a 'action'
    $documento_identidad = $_GET['documento_identidad'];
    $action = $_GET['action']; // Cambiado de 'estado' a 'action'

    // Convertir la acción en el valor de estado correspondiente
    $estado = ($action === 'activar') ? 1 : 0;

    // Consulta SQL para actualizar el estado del usuario en la base de datos
    $sql = "UPDATE usuarios SET estado = ? WHERE documento_identidad = ?";
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        // Enlazar parámetros a la consulta preparada
        mysqli_stmt_bind_param($stmt, "ii", $estado, $documento_identidad);
        // Ejecutar la consulta preparada
        mysqli_stmt_execute($stmt);
        // Cerrar la consulta preparada
        mysqli_stmt_close($stmt);
        // Redirigir a la página principal después de la actualización
        header("Location: ../Administrador/Administrador.php");
        exit(); // Terminar la ejecución del script
    } else {
        // Mostrar un mensaje de error si la preparación de la consulta falla
        echo "Error en la preparación de la consulta: " . mysqli_error($con);
    }
} else {
    // Mostrar un mensaje de error si faltan parámetros en la solicitud
    echo "Error: Parámetros faltantes.";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>