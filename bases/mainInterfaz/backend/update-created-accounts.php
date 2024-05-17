<?php
include("../../../bases/conexion.php");
$conn = connection();

// Obtener los datos del formulario
$tipo_documento = $_POST['tipo_documento'];
$documento_identidad = $_POST['documento_identidad'];
$nuevo_documento_identidad = $_POST['nuevo_documento_identidad'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$programa = $_POST['programa'];
$ficha = $_POST['ficha'];
$id_rol = $_POST['id_rol'];
$id_servicio = isset($_POST['id_servicio']) ? $_POST['id_servicio'] : null;

// Verificar si se seleccionó "N/Aplica" para el servicio
if ($id_rol == 3) {
    $sql = "UPDATE usuarios SET tipo_documento = '$tipo_documento', documento_identidad = '$nuevo_documento_identidad', nombres='$nombres', apellidos='$apellidos', celular='$celular', correo='$correo', ficha='$ficha', programa='$programa', id_rol='$id_rol', id_servicio=NULL WHERE documento_identidad='$documento_identidad'"; 
} else {
    // Verificar si el id_servicio existe en la tabla 'servicios'
    if ($id_servicio !== null) {
        $check_sql = "SELECT id_servicio FROM servicios WHERE id_servicio = '$id_servicio'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) > 0) {
            // Actualizar todos los campos, incluido el id_servicio
            $sql = "UPDATE usuarios SET tipo_documento = '$tipo_documento', documento_identidad = '$nuevo_documento_identidad', nombres='$nombres', apellidos='$apellidos', celular='$celular', correo='$correo', ficha=NULL, programa=NULL, id_rol='$id_rol', id_servicio='$id_servicio' WHERE documento_identidad='$documento_identidad'";
        } else {
            // El id_servicio no existe en la tabla 'servicios'
            echo "Error: El servicio seleccionado no existe.";
            exit();
        }
    } else {
        // id_servicio es null, lo que significa que no se seleccionó ningún servicio
        echo "Error: Debes seleccionar un servicio.";
        exit();
    }
}

if (mysqli_query($conn, $sql)){ 
    echo json_encode(array('respuesta' => 0));
    //header("Location: ../../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php");
}else {
    // Error al actualizar
    //echo "Error al actualizar el usuario: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
