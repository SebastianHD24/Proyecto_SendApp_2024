<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if(!isset($_SESSION["documento"])) {
    // Si el usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
    header("Location: ../login/login.html");
    exit;
}
?>