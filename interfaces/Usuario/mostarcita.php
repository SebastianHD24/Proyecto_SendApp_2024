<?php 
// Paso 1: Incluir la conexión a la base de datos
include('C:/xampp/htdocs/Proyecto_SendApp_2024/Login/conexion.php');  // Ajusta según la ubicación de tu archivo de conexión
$conn = connection();  // Asegúrate de llamar a la función correcta

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Paso 2: Escribir la consulta para recuperar los datos
$sql = "SELECT * FROM prueba";  // Cambia 'prueba' por el nombre de tu tabla

// Paso 3: Ejecutar la consulta y obtener los resultados
$result = mysqli_query($conn, $sql);

if ($result) {
    // Paso 4: Mostrar los datos
    echo "<h2>Datos Guardados:</h2>";
    echo "<ul>";  // Usa listas o tablas para mostrar datos
    while ($row = mysqli_fetch_assoc($result)) {
        // Puedes acceder a las columnas por nombre (por ejemplo, 'datos')
        echo "<li>{$row['datos']}</li>";  // Muestra el campo 'datos'
    }
    echo "</ul>";
} else {
    echo "Error al recuperar datos: " . mysqli_error($conn);
}

// Paso 5: Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
