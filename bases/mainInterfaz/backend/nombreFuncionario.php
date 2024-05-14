<?php 
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

$conn = connection();

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
$id_servicio = $_GET['id_servicio']; // Esto supone que estás obteniendo el ID del servicio a través de la URL

// Consulta SQL para obtener el nombre del usuario asociado al servicio
$sql = "SELECT usuarios.nombres, usuarios.apellidos
        FROM usuarios 
        INNER JOIN servicios ON usuarios.id_servicio = servicios.id_servicio 
        WHERE servicios.id_servicio = $id_servicio";

$result = $conn->query($sql);

$names = array(); // Inicializar un arreglo para almacenar los nombres de los funcionarios

// Iterar sobre los resultados y agregar los nombres al arreglo
while ($row = $result->fetch_assoc()) {
    $names[] = array(
        'nombre' => $row["nombres"],
        'apellido' => $row["apellidos"]
    );
}

// Devolver el arreglo de nombres en formato JSON
echo json_encode($names);

// Cerrar conexión a la base de datos
$conn->close();
?>
