<?php
// Incluimos la sesión iniciada y la conexión a la base de datos
include '../../../../Proyecto_SendApp_2024/bases/sesion_start.php';
include '../../../../Proyecto_SendApp_2024/bases/conexion.php';
$conn = connection();

// Obtención de los valores en los inputs y sesión
$documento_identidad = $_SESSION['documento_identidad'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$nombre = $_POST['nombres'];
$documento = $_POST['documento_identidad'];
$tipo = $_POST['tipo_documento'];
$apellido = $_POST['apellidos'];
$regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

// Consulta para obtener los valores actuales de la cuenta
$consultaTipo = "SELECT tipo_documento, id_rol, nombres, apellidos, correo, celular FROM usuarios WHERE documento_identidad = ?";
$stmt1 = $conn->prepare($consultaTipo);
$stmt1->bind_param("i", $documento_identidad);
$peticion1 = $stmt1->execute();

// Verificación del éxito de la consulta
if ($peticion1) {
    $resultado1 = $stmt1->get_result();
    if ($resultado1->num_rows > 0) {
        $valorColumnas = $resultado1->fetch_assoc();
        $tipoDocumento = $valorColumnas['tipo_documento'];
        $tipoRol = $valorColumnas['id_rol'];
        $nombres = $valorColumnas['nombres'];
        $apellidos = $valorColumnas['apellidos'];
        $correos = $valorColumnas['correo'];
        $celulares = $valorColumnas['celular'];
    } else {
        echo json_encode(array('success' => 7)); // Si no se encuentran datos del usuario
        exit;
    }
} else {
    echo json_encode(array('success' => 7)); // Si la consulta falla
    exit;
}

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
            echo json_encode(array('success' => 9));
            exit();
        }
    }
} else {
    // Error al obtener el correo actual
    echo "Error al obtener el correo actual: " . mysqli_error($conn);
    exit();
}

// Variable que verifica que se hicieron cambios y estos son válidos
$actualizar = false;
$documentoCambiado = false;

// Función para actualizar un campo
function actualizarCampo($conn, $campo, $valor, $documento) {
    $consulta = "UPDATE usuarios SET $campo = ? WHERE documento_identidad = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("si", $valor, $documento);
    return $stmt->execute();
}

// Validar roles
if ($tipoRol == 1) {
    // Validación del formato del correo electrónico
    if (!preg_match($regex, $correo)) {
        echo json_encode(array('success' => 1));
        exit;
    }
    // Validación de que el número celular solo contenga números
    if (!ctype_digit($celular)) {
        echo json_encode(array('success' => 2));
        exit;
    }
    // Validación de la longitud del número de celular
    if (strlen($celular) != 10 && strlen($celular) != 15) {
        echo json_encode(array('success' => 3));
        exit;
    }
    // Validación del documento de identidad
    if (!ctype_digit($documento) || strlen($documento) < 5) {
        echo json_encode(array('success' => 4));
        exit;
    }
    // Verificar que los inputs no estén vacíos
    if (empty($correo) || empty($celular) || empty($nombre) || empty($documento) || empty($apellido)|| empty($tipo)) {
        echo json_encode(array('success' => 6));
        exit;
    }
    // Validar si el documento ha cambiado
    if ($documento != $documento_identidad) {
        // Consulta para saber si existe un registro con esos mismos datos
        $consultaExistencia = "SELECT nombres FROM usuarios WHERE documento_identidad = ? AND tipo_documento = ?";
        $stmtExistencia = $conn->prepare($consultaExistencia);
        $stmtExistencia->bind_param("is", $documento, $tipo);
        $peticionExistencia = $stmtExistencia->execute();

        // Verificación del éxito de la búsqueda
        if ($peticionExistencia) {
            $resultadoExistencia = $stmtExistencia->get_result();
            if ($resultadoExistencia->num_rows > 0) {
                echo json_encode(array('success' => 5));
                exit;
            } else {
                // Actualización del documento de identidad
                if (actualizarCampo($conn, 'documento_identidad', $documento, $documento_identidad)) {
                    $actualizar = true;
                    $documentoCambiado = true;
                }
            }
        }
    }

    // Validar si el tipo de documento ha cambiado
    if ($tipo != $tipoDocumento) {
        // Consulta para saber si existe un registro con esos mismos datos
        $consultaExistencia = "SELECT nombres FROM usuarios WHERE documento_identidad = ? AND tipo_documento = ?";
        $stmtExistencia = $conn->prepare($consultaExistencia);
        $stmtExistencia->bind_param("is", $documento, $tipo);
        $peticionExistencia = $stmtExistencia->execute();

        // Verificación del éxito de la búsqueda
        if ($peticionExistencia) {
            $resultadoExistencia2 = $stmtExistencia->get_result();
            if ($resultadoExistencia2->num_rows > 0) {
                echo json_encode(array('success' => 5));
                exit;
            } else {
                // Actualización del tipo de documento
                if (actualizarCampo($conn, 'tipo_documento', $tipo, $documento)) {
                    $actualizar = true;
                }
            }
        }
    }

    // Validar si el correo ha cambiado
    if ($correo != $correos) {
        if (actualizarCampo($conn, 'correo', $correo, $documento)) {
            $actualizar = true;
        }
    }

    // Validar si el celular ha cambiado
    if ($celular != $celulares) {
        if (actualizarCampo($conn, 'celular', $celular, $documento)) {
            $actualizar = true;
        }
    }

    // Validar si los nombres han cambiado
    if ($nombre != $nombres) {
        if (actualizarCampo($conn, 'nombres', $nombre, $documento)) {
            $actualizar = true;
        }
    }

    // Validar si los apellidos han cambiado
    if ($apellido != $apellidos) {
        if (actualizarCampo($conn, 'apellidos', $apellido, $documento)) {
            $actualizar = true;
        }
    }

    if ($actualizar) {
        if ($documentoCambiado) {
            $_SESSION["documento_identidad"] = $documento;
        }
        echo json_encode(array('success' => 0));
    } else {
        echo json_encode(array('success' => 8));
    }
} else {
    echo json_encode(array('success' => 7));
}

// Cierre de las conexiones y liberación de resultados
$stmt1->close();
if (isset($stmtExistencia)) {
    $stmtExistencia->close();
}
$conn->close();