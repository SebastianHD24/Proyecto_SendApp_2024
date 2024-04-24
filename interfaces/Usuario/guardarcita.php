<?php 
    session_start();
    include '../../Login/conexion.php';
    $conn = connection();

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$documento_identidad = $_SESSION['documento_identidad'];

if (isset($_POST['datos']) && $_POST['datos'] != "") {
    $datos = $_POST['datos'];
    
    // Uso de declaración preparada para inserción segura
    $sql = "INSERT INTO prueba (datos,id_usuario) VALUES (?,$documento_identidad)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $datos);

    if (mysqli_stmt_execute($stmt)) {
        // Redirigir a 'mostarcita.php' después de una inserción exitosa
        header("Location: usuarioSesion.php");
        exit();  // Asegúrate de usar exit() para evitar cualquier procesamiento adicional
    } else {
        echo "Error al guardar datos: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Por favor, ingresa datos válidos.";
}

mysqli_close($conn);
?>
