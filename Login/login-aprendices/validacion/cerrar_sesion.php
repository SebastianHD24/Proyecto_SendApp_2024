<?php
    // Inicia la sesión
    session_start();

    // Destruye la sesión
    session_destroy();

    // Elimina la cookie de sesión
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }

    // Redirige a la página de inicio
    header("Location: ../../../../Proyecto_SendApp_2024/index.php   ");
    exit(); // Asegura que el script se detenga después de la redirección
?>
