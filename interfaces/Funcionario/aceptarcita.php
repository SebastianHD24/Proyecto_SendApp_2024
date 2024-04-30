<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/aceptarcita.css">
    <title>Aceptar cita</title>
</head>
<body>
<?php
include '../../Login/conexion.php';
$conn = connection();

// Obtener el documento del usuario
$documento = isset($_GET['documento']) ? htmlspecialchars($_GET['documento'], ENT_QUOTES, 'UTF-8') : '';
$id_cita = isset($_GET['id_cita']) ? ($_GET['id_cita']) :0;

$nombres = '';
$apellidos = '';

// Validar si tenemos el documento
if ($documento) {
    // Obtener información del usuario y el ID de la cita
    $stmt = $conn->prepare("SELECT citas.id_cita, usuarios.nombres, usuarios.apellidos 
                            FROM citas AS citas 
                            JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad 
                            WHERE citas.id_cita = ? AND usuarios.documento_identidad= ?");
    $stmt->bind_param("is", $id_cita, $documento);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombres = htmlspecialchars($row['nombres'], ENT_QUOTES, 'UTF-8');
        $apellidos = htmlspecialchars($row['apellidos'], ENT_QUOTES, 'UTF-8');
        $id_cita = intval($row['id_cita']); // Aquí obtenemos el ID de la cita
    } else {
        echo "No se encontró un usuario o una cita con el documento: $documento";
    }

    $stmt->close();
} else {
    echo "Documento no proporcionado.";
}

?>

<form action="mandar.php" method="post">
    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Documento de Identidad</td>
            <td><input type="text" name="documento" placeholder="Documento" value="<?php echo $documento; ?>" readonly></td>
        </tr>
        
            <input type="hidden" name="id_cita" value="<?php echo $id_cita; ?>"> <!-- Campo oculto para el ID de la cita -->
        
        <tr>
            <td>Nombres</td>
            <td><input type="text" name="nombres" placeholder="Nombres" value="<?php echo $nombres; ?>" readonly></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>" readonly></td>
        </tr>
        <tr>
            <td>Día</td>
            <td><input type="date" name="fecha" required></td>
        </tr>
        <tr>
            <td>Hora</td>
            <td><input type="time" name="hora" required></td>
        </tr>
    </table>
     
    <button type="submit">Aceptar</button>
</form>

</body>
</html>
