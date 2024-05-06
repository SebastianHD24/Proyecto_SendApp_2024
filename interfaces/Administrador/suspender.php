<?php
// suspender.php

include("../../bases/conexion.php");
$con = connection();

if (isset($_GET['documento_identidad'])) {
    $documento_identidad = $_GET['documento_identidad'];

    // Verifica si el usuario está activo o inactivo y cambia su estado
    $sql = "SELECT estado FROM usuarios WHERE documento_identidad = ?";
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $documento_identidad);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $estado_actual);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        // Cambia el estado del usuario
        $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
        $sql_update = "UPDATE usuarios SET estado = ? WHERE documento_identidad = ?";
        $stmt_update = mysqli_prepare($con, $sql_update);
        if ($stmt_update) {
            mysqli_stmt_bind_param($stmt_update, "ii", $nuevo_estado, $documento_identidad);
            mysqli_stmt_execute($stmt_update);
            mysqli_stmt_close($stmt_update);
            echo $nuevo_estado; // Devuelve el nuevo estado
        } else {
            echo "Error al suspender el usuario. Inténtalo de nuevo.";
        }
    } else {
        echo "Error al suspender el usuario. Inténtalo de nuevo.";
    }
} else {
    // Si no se proporciona el documento de identidad, devuelve un error
    http_response_code(400);
    echo "Error: No se proporcionó el documento de identidad.";
}
?>