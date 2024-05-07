<?php
    session_start(); // Iniciar la sesión si no está iniciada

    include("../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $documento = $_SESSION["documento_identidad"];

    $sql = "SELECT id_rol FROM usuarios WHERE documento_identidad = $documento";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        $id_rol = $fila['id_rol'];

        if ($id_rol == 1) {
            echo json_encode(array('success' => 1));
        } elseif ($id_rol == 2) {
            echo json_encode(array('success' => 2));
        } elseif ($id_rol == 3) {
            echo json_encode(array('success' => 3));
        } else {
            echo json_encode(array('success' => 'Error en la consulta SQL'));
        }
    } else {
        echo json_encode(array('success' => 'Error en la consulta SQL'));
    }

    mysqli_close($conn); // Cerrar la conexión después de usarla
?>
