<?php

include("../../bases/conexion.php");
$con = connection();

// Obtener los datos del formulario
$documento_identidad = $_POST['documento_identidad'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$ficha = $_POST['ficha'];
$id_rol = $_POST['id_rol'];
$id_servicio = $_POST['id_servicio'];

// Verificar si se seleccionó "N/Aplica" para el servicio
if ($id_servicio == "N/Aplica") {
    // No hacer cambios en el estado del servicio
    $sql = "UPDATE usuarios SET nombres=?, apellidos=?, celular=?, correo=?, ficha=?, id_rol=? WHERE documento_identidad=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssii", $nombres, $apellidos, $celular, $correo, $ficha, $id_rol, $documento_identidad);
} else {
    // Actualizar todos los campos, incluido el id_servicio
    $sql = "UPDATE usuarios SET nombres=?, apellidos=?, celular=?, correo=?, ficha=?, id_rol=?, id_servicio=? WHERE documento_identidad=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssisii", $nombres, $apellidos, $celular, $correo, $ficha, $id_rol, $id_servicio, $documento_identidad);
}

// Ejecutar la consulta preparada
if (mysqli_stmt_execute($stmt)) {
    // Redirigir al usuario de vuelta a la página principal
    header("Location: ../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php");
    exit(); // Terminar el script después de redirigir
} else {
    // Error al actualizar
    echo "Error al actualizar el usuario: " . mysqli_error($con);
}

// Cerrar la conexión
mysqli_close($con);
?>