<?php
include '../../Login/conexion.php';
$conn = connection();


if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}


// Consulta para obtener datos de la tabla prueba y el nombre del usuario de la tabla usuarios
$sql = "SELECT prueba.id_usuario, usuarios.nombres,usuarios.apellidos, prueba.datos 
        FROM prueba 
        INNER JOIN usuarios ON prueba.id_usuario = usuarios.documento_identidad"; // Ajusta los nombres de las tablas y campos si es necesario

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . mysqli_error($conn));
}

// Mostrar resultados
if (mysqli_num_rows($result) > 0) {
    // Recorre las filas y muestra la información
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID Usuario: " . $row['id_usuario'] . " - Nombre: " . $row['nombres'] . " apellido " . $row['apellidos']. " - Datos: " . $row['datos'] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($conn);
?>
