<?php
    // Incluimos la sesión iniciada y la conexión a la base de datos
    include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();

    // Obtención de los valores en los inputs y actualización de la base de datos y sesión
    $documento_identidad = $_SESSION['documento_identidad'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

// Verificar si el correo ha cambiado
$query_current_email = "SELECT correo FROM usuarios WHERE documento_identidad = '$documento_identidad'";
$result_current_email = mysqli_query($conn, $query_current_email);

if ($result_current_email) {
    $row_current_email = mysqli_fetch_assoc($result_current_email);
    $current_email = $row_current_email['correo'];

    if ($current_email !== $correo) {
        // El correo ha cambiado, verificar si el nuevo correo ya existe en la base de datos
        $query_check_email = "SELECT correo FROM usuarios WHERE correo = '$correo'";
        $result_check_email = mysqli_query($conn, $query_check_email);

        if (mysqli_num_rows($result_check_email) > 0) {
            // El nuevo correo ya existe en la base de datos
            echo json_encode(array('success' => 4));
            exit();
        }
    }
} else {
    // Error al obtener el correo actual
    echo "Error al obtener el correo actual: " . mysqli_error($conn);
    exit();
}
    // Validación del formato del correo electrónico
    if (!preg_match($regex, $correo)) {
        echo json_encode(array('success' => 1));
    // Validación de que el numero celular solo contenga números
    } else if (!ctype_digit($celular)) {
        echo json_encode(array('success' => 2));
    // Validación de la longitud del número de celular
    } else if ((strlen($celular) != 10) && (strlen($celular) != 15)) {
        echo json_encode(array('success' => 3));
    // Consulta y actualizacion de los campos
    } else {
        // Actualización de la base de datos utilizando consultas preparadas
        $consulta = "UPDATE usuarios SET correo=?, celular=? WHERE documento_identidad = ?";
        $stmt = $conn->prepare($consulta);
        $stmt->bind_param("ssi", $correo, $celular, $documento_identidad);
        $peticion = $stmt->execute();

        // Verificación del éxito de la actualización
        if ($peticion) {
            echo json_encode(array('success' => 0));
        }
    };