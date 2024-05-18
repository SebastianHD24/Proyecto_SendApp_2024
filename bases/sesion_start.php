<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if(!isset($_SESSION["documento_identidad"])) {
    // Si el usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
    header("Location: ../../Login/login-aprendices/login.php");
    exit;
}