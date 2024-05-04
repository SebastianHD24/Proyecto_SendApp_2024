<?php
    session_start();

    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION["documento_identidad"])) {
        // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
        echo json_encode(array('success' => 2)); // Asegurarse de que el script se detenga después de la direccion
    } else {
        echo json_encode(array('success' => 1));
    }
?>