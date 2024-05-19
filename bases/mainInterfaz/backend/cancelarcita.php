<?php
// Verifica si se recibió el ID de la cita y la justificación
if(isset($_POST['id_cita']) && isset($_POST['justificacion'])) {
    // Aquí incluye tu lógica de conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    // Verifica la conexión
    if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Sanitiza los datos recibidos
    $id_cita = mysqli_real_escape_string($conn, $_POST['id_cita']);
    $justificacion = mysqli_real_escape_string($conn, $_POST['justificacion']);

    // Actualiza la columna de confirmación a "no" y la columna de justificación de cancelación
    $sql = "UPDATE citas SET confirmacion = 'no', justificacion_cancelacion = '$justificacion' WHERE id_cita = $id_cita";

    // Ejecuta la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Cita cancelada con éxito.";
    } else {
        echo "Error al cancelar la cita: " . mysqli_error($conn);
    }

    // Cierra la conexión
    mysqli_close($conn);
} else {
    echo "No se recibió el ID de la cita o la justificación.";
}
?>