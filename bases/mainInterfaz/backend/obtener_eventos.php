<?php
//Incluimos la sesion iniciada, la conexion a la base de datos
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
// Obtener la conexión a la base de datos 
$conn = connection();
$funcionario = $_SESSION["documento_identidad"];

// Verificar si se ha enviado un día, mes y año 
if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
    // Obtener el día, mes y año 
    $day = $_GET['day'];
    $month = $_GET['month'] + 1; // Suma 1 al mes 
    $year = $_GET['year'];

    // Formatear la fecha para que coincida con el formato en la base de datos (YYYY-MM-DD) 
    $fecha = sprintf("%04d-%02d-%02d", $year, $month, $day);
    $funcionario = $_SESSION["documento_identidad"];
    // Realizar la consulta SQL para obtener los datos de la tabla de citas 
    $query = "SELECT citas.descripcion AS evento, citas.hora AS hora, usuarios.nombres AS nombre_usuario 
              FROM citas 
              INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad 
              WHERE citas.fecha = '$fecha' AND citas.estado_cita = 'aceptado' AND citas.usuario_f= $funcionario";
    
    $result = mysqli_query($conn, $query);

    // Verificar si hay resultados 
    if(mysqli_num_rows($result) > 0) {
        // Mostrar los eventos debajo del calendario 
        echo "<h2>Eventos</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Evento</th><th>Hora</th><th>Nombre</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['evento']}</td>";
            echo "<td>{$row['hora']}</td>";
            echo "<td>{$row['nombre_usuario']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron citas para el día seleccionado.";
    }
} else {
    // Si no se ha proporcionado un día, mes y año, mostrar un mensaje de error o simplemente no hacer nada 
}
?>


