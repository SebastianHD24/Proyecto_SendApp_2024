<?php
session_start(); // Iniciar sesión
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

// Establecer conexión a la base de datos
$conn = connection();

// Verificar si la conexión se realizó correctamente
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Verificar si se ha enviado un ID de cita y es un número entero válido
if(isset($_GET['id_cita']) && is_numeric($_GET['id_cita'])) {
    $id_cita = $_GET['id_cita'];
    
    // Actualizar la confirmación de la cita en la base de datos
    $sql = "UPDATE citas SET confirmacion='si' WHERE id_cita=$id_cita";

    if (mysqli_query($conn, $sql)) {
        // No hay redirección aquí
        // Solo salir del script después de confirmar
        exit();
    } else {
        echo "Error al confirmar la cita: " . mysqli_error($conn);
    }
} else {
    echo "ID de cita inválido";
}

mysqli_close($conn);
?>
