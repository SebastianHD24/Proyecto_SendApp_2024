<?php
include './bases/conexion.php';
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
$funcionario = $_SESSION["documento_identidad"];
$sql = "SELECT citas.id_cita, citas.documento_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, citas.descripcion, citas.jornada, citas.estado_cita, citas.confirmacion 
FROM citas
INNER JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad AND citas.usuario_f='$funcionario' WHERE citas.estado_cita='rechazado' ORDER BY citas.id_cita ASC ";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    die("Error en la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $rejected = $row['estado_cita'] === 'rechazado';
        if ($rejected) {
            echo '<tr style="background-color: #f2f2f2;">';
            echo '<td>' . htmlspecialchars($row['documento_identidad']) . '</td>';
            echo '<td>' . htmlspecialchars($row['nombres']) . '</td>';
            echo '<td>' . htmlspecialchars($row['apellidos']) . '</td>';
            echo '<td>' . htmlspecialchars($row['descripcion']) . '</td>';
            echo '<td>' . htmlspecialchars($row['confirmacion']) . '</td>';
            echo '<td>' . htmlspecialchars($row['jornada']) . '</td>';
            echo '</tr>';
        }
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron citas rechazadas.</td></tr>";
}

mysqli_close($conn); // Esta línea cierra la conexión a la base de datos
?>
