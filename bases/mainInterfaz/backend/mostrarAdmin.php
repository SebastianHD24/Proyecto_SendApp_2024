<?php
    // Inclusión del archivo para la conexión con la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';

    // Establecer la conexión a la base de datos
    $conn = connection();

    // Obtener y decodificar los datos JSON enviados desde el cliente
    $data = json_decode(file_get_contents("php://input"));

    // Verificación si el admin es 0
    if ($data->admin == 0) {
        // Si el valor de admin es 0, enviar una respuesta indicando que no se encontró el admin y terminar el script
        echo json_encode(array("adminNotFound" => true));
        exit();
    }

    // Preparar y ejecutar la consulta para obtener la información del administrador del área
    $sql = "SELECT nombres, apellidos, correo, celular FROM usuarios WHERE documento_identidad = ?";
    $stmt = $conn->prepare($sql); // Preparar la consulta para evitar inyección SQL
    $stmt->bind_param("i", $data->admin); // Vincular el parámetro de forma segura
    $stmt->execute(); // Ejecutar la consulta
    $query = $stmt->get_result(); // Obtener el resultado de la consulta

    // Verificación de si existe o no un admin
    if ($query->num_rows > 0) {
        // Si se encuentra un admin, obtener la información y enviarla como respuesta en formato JSON
        $adminArea = $query->fetch_assoc();
        echo json_encode($adminArea);
    } else {
        // Si no se encuentra un admin, enviar una respuesta indicando que no se encontró el admin
        echo json_encode(array("adminNotFound" => true));
    }

    // Cierre de la declaración preparada y la conexión a la base de datos
    $stmt->close(); 
    $conn->close(); 