<?php 
    session_start();
    include '../../Login/conexion.php';
    $conn = connection();

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$documento_identidad = $_SESSION['documento_identidad'];

if (isset($_POST['descripcion']) && $_POST['descripcion'] != "") {
    $datos = $_POST['descripcion'];

    if (isset($_POST['jornada']) && $_POST['jornada'] != "") {
        $jornada = $_POST['jornada'];
    
    // Uso de declaración preparada para inserción segura
    $sql = "INSERT INTO solicitud_citas (descripcion,id_usuario,jornada) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sis', $datos, $documento_identidad,$jornada);

    if (mysqli_stmt_execute($stmt)) {
        // Redirigir a 'usuarioSesion.php' después de una inserción exitosa
        header("Location: usuarioSesion.php");
        exit();  // Asegúrate de usar exit() para evitar cualquier procesamiento adicional
    } else {
        echo "Error al guardar datos: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    // Mensaje de error si 'jornada' no está definido
    echo "Error: El campo 'jornada' no está definido.";
}
} else {
    echo "Por favor, ingresa datos válidos.";
}

mysqli_close($conn);
?>
