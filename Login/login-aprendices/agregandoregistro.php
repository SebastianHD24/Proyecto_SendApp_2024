<?php
session_start();
include("../../../Proyecto_SendApp_2024/bases/conexion.php");
$conn = connection();

if (!$conn) {
    die("Conexión falló: " . mysqli_connect_error());
}

// Tomando Datos del formulario HTML para luego ser enviados a la base de datos
$documento_identidad = $_POST['documento_identidad'];
$contrasena = $_POST['contrasena'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$programa = $_POST['programa'];
$ficha = $_POST['ficha'];
$tipo_documento = $_POST['tipo_documento'];
$estado = 1;

// Verificar si hay una sesión iniciada
if (isset($_SESSION['documento_identidad'])) {
    $id_rol = $_POST['id_rol'];
    $id_servicio = $_POST['id_servicio'];
} else {
    $id_rol = 3;
}

// Verificar si el rol existe en la base de datos
$query = "SELECT * FROM roles WHERE id_rol = '$id_rol'";
$result = mysqli_query($conn, $query);

// Verificar que el documento no esté en la base de datos
$queryDocumento = "SELECT documento_identidad FROM usuarios WHERE documento_identidad = '$documento_identidad'";
$resultDocumento = mysqli_query($conn, $queryDocumento);

// Encriptar la contraseña
$passwordHash = password_hash($contrasena, PASSWORD_BCRYPT);

// Requisitos para la contraseña    
const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_\-¡?¿·çºª.:,;=|+#\\/])(?=.{6,})/';

if (mysqli_num_rows($resultDocumento) > 0) {
    echo json_encode(array('success' => 5));
} else if (strlen(strval($contrasena)) < 6 && strlen(strval($documento_identidad)) < 5) {
    echo json_encode(array('success' => 4));
} else if (strlen(strval($documento_identidad)) < 5) {
    echo json_encode(array('success' => 1));
} else if (strlen(strval($contrasena)) < 6) {
    echo json_encode(array('success' => 2));
} else {
    if (preg_match(REGEX, $contrasena)) {
        if (mysqli_num_rows($result) > 0) {

            if (isset($_SESSION['documento_identidad']) && $id_rol == 2) {
                $sql = "INSERT INTO usuarios (tipo_documento, documento_identidad, contrasena, nombres, apellidos, correo, celular, programa, ficha, estado, id_rol, id_servicio) VALUES ('$tipo_documento', '$documento_identidad', '$passwordHash', '$nombres', '$apellidos', '$correo', '$celular', '$programa', '$ficha', '$estado', '$id_rol', '$id_servicio')";
            } elseif (isset($_SESSION['documento_identidad']) && $id_rol != 2) {
                $sql = "INSERT INTO usuarios (tipo_documento, documento_identidad, contrasena, nombres, apellidos, correo, celular, programa, ficha, estado, id_rol, id_servicio) VALUES ('$tipo_documento', '$documento_identidad', '$passwordHash', '$nombres', '$apellidos', '$correo', '$celular', '$programa', '$ficha', '$estado', '$id_rol', NULL)";

            } else {
                $sql = "INSERT INTO usuarios (tipo_documento, documento_identidad, contrasena, nombres, apellidos, correo, celular, programa, ficha, estado, id_rol) VALUES ('$tipo_documento', '$documento_identidad', '$passwordHash', '$nombres', '$apellidos', '$correo', '$celular', '$programa', '$ficha', '$estado', '$id_rol')";
            }
            
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array('success' => 6));
            } else {
                echo json_encode(array('success' => 0, 'error' => mysqli_error($conn)));
            }
        }
    } else {
        echo json_encode(array('success' => 3));
    }
}

mysqli_close($conn);
?>
