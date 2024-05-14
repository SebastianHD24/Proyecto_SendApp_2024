<?php
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

$conn = connection();

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$id_servicio = $_GET['id_servicio']; // Suponiendo que estás obteniendo el ID del servicio a través de la URL

// Consulta SQL para obtener el ID, nombre y apellido de los usuarios asociados al servicio
$sql = "SELECT documento_identidad, nombres, apellidos FROM usuarios WHERE id_servicio = $id_servicio";

$result = $conn->query($sql);

$funcionarios = array(); // Inicializar un arreglo para almacenar los datos de los funcionarios

// Verificar si la consulta se ejecutó correctamente y si hay resultados
if ($result && $result->num_rows > 0) {
    // Iterar sobre los resultados y agregar los datos de los funcionarios al arreglo
    while ($row = $result->fetch_assoc()) {
        $funcionarios[] = array(
            'id_usuario' => $row["documento_identidad"],
            'nombre' => $row["nombres"],
            'apellido' => $row["apellidos"]
        );
    }

    // Devolver los datos de los funcionarios en formato JSON
    echo json_encode($funcionarios);
} else {
    // Si no hay resultados, devolver un mensaje de error
    echo json_encode(array('error' => 'No se encontraron funcionarios asociados al servicio.'));
}

// Cerrar conexión a la base de datos
$conn->close();
?>
