<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Styles/aceptarcita.css">

    <title>Aceptar cita</title>
</head>
<body>
<?php
include '../../Login/conexion.php';
$conn = connection();

$documento = isset($_GET['documento']) ? htmlspecialchars($_GET['documento'], ENT_QUOTES, 'UTF-8') : '';

$nombres = '';
$apellidos = '';

if ($documento) {
    $stmt = $conn->prepare("SELECT nombres, apellidos FROM usuarios WHERE documento_identidad = ?");
    $stmt->bind_param("s", $documento);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombres = htmlspecialchars($row['nombres'], ENT_QUOTES, 'UTF-8');
        $apellidos = htmlspecialchars($row['apellidos'], ENT_QUOTES, 'UTF-8');
    } else {
        echo "No se encontró el usuario con documento: $documento";
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
                <td>
                    <input type="text" name="documento" placeholder="Documento"  value="<?php echo $documento; ?>">
                </td>
            </tr>
            <tr>
                <td>Nombres</td>
                <td>
                    <input type="text" name="nombres" placeholder="Nombres"  value="<?php echo $nombres; ?>">
                </td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td>
                    <input type="text" name="apellidos" placeholder="Apellidos"  value="<?php echo $apellidos; ?>">
                </td>
            </tr>
            <tr>
                <td>Día</td>
                <td>
                    <input type="date" name="fecha" placeholder="Día" required>
                </td>
            </tr>
            <tr>
                <td>Hora</td>
                <td>
                    <input type="time" name="hora" placeholder="Hora" required>
                </td>
            </tr>
        </table>
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
