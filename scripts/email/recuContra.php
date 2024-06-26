<?php
include("../../../Proyecto_SendApp_2024/bases/conexion.php");
$conn = connection();

// Verificar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Expresión regular que establece los requisitos para que la contraseña sea segura
const REGEX = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&_\-¡?¿·çºª.:,;=|+#\\/])(?=.{6,})/';

// Definir las constantes para los caracteres de la contraseña
const MAYUSCULAS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const MINUSCULAS = 'abcdefghijklmnopqrstuvwxyz';
const NUMEROS = '0123456789';
const ESPECIALES = '!@#$%^&*_\-¿.:,;=|+#';

// Incluir PHPMailer y sus dependencias
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Función que genera una contraseña segura
function generarContrasena() {
    $mayusculas = MAYUSCULAS;
    $minusculas = MINUSCULAS;
    $numeros = NUMEROS;
    $especiales = ESPECIALES;

    $longitud = 10;
    $contraseña = '';

    $contraseña .= $mayusculas[random_int(0, strlen($mayusculas) - 1)];
    $contraseña .= $numeros[random_int(0, strlen($numeros) - 1)];
    $contraseña .= $especiales[random_int(0, strlen($especiales) - 1)];

    for ($i = 0; $i < ($longitud - 3); $i++) {
        $caracterAleatorio = $mayusculas . $minusculas . $numeros . $especiales;
        $contraseña .= $caracterAleatorio[random_int(0, strlen($caracterAleatorio) - 1)];
    }

    $contraseña = str_shuffle($contraseña);

    if (!preg_match(REGEX, $contraseña)) {
        return generarContrasena();
    }

    return $contraseña;
}

// Verificar si se recibieron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoDocumento = $_POST['tipo_documento'];
    $documento_identidad = $_POST['documento_identidad'];
    $correoE = $_POST['correo'];

    // Consultar la base de datos para obtener el correo y contraseña actual
    $consultaCorreo = "SELECT correo, contrasena FROM usuarios WHERE documento_identidad = ? AND tipo_documento = ? AND correo = ?";
    $stmt = $conn->prepare($consultaCorreo);
    $stmt->bind_param("iss", $documento_identidad, $tipoDocumento, $correoE);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $valorColumna = $resultado->fetch_assoc();
        $correo = $valorColumna['correo'];
        $contrasena = $valorColumna['contrasena'];

        // Generar una nueva contraseña temporal
        $contrasenaProvisional = generarContrasena();

        // Preparar el correo con la nueva contraseña
        $mensaje = "Contraseña temporal: $contrasenaProvisional <br><br>
                    Ingrese a su cuenta para cambiar su contraseña<br><br>
                    Si tiene algún inconveniente, no dude en contactarnos a través de soporte@sendapp.com.co <br><br>
                    Link para volver al login: https://sendapp.com.co/Proyecto_SendApp_2024/Login/login-aprendices/login.php <br><br>
                    NOTA: No responder a este correo";

        $mail = new PHPMailer(true);

        try {
            // Habilitar depuración SMTP detallada
            $mail->SMTPDebug = 0; // Cambia a 2 o 3 para más detalles, 0 para desactivar
            $mail->Debugoutput = 'html';

            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host       = 'mail.sendapp.com.co'; // Especifica el servidor SMTP de tu proveedor de correo
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply@sendapp.com.co'; // Tu dirección de correo electrónico
            $mail->Password   = '^-0+,Z%kCDdx'; // Tu contraseña de correo electrónico

            // Intentar SSL en puerto 465
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // Configuración del email
            $mail->setFrom('noreply@sendapp.com.co', 'SendApp');
            $mail->addAddress($correo, '');

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'RECUPERACION DE LA CONTRASEÑA';
            $mail->Body    = $mensaje;

            // Envía el correo
            $mail->send();

            // Encripta la nueva contraseña
            $encriptada = password_hash($contrasenaProvisional, PASSWORD_BCRYPT);

            // Actualiza la contraseña en la base de datos
            $consulta = "UPDATE usuarios SET contrasena=? WHERE documento_identidad = ? AND tipo_documento = ? AND correo = ?";
            $stmt = $conn->prepare($consulta);
            $stmt->bind_param("siss", $encriptada, $documento_identidad, $tipoDocumento, $correo);
            $stmt->execute();

            // Envía una respuesta JSON de éxito
            echo json_encode(array('success' => 0, 'message' => 'Contraseña actualizada correctamente.'));
        } catch (Exception $e) {
            // Si ocurre un error al enviar el correo, envía una respuesta JSON de error
            echo json_encode(array('success' => 2, 'message' => 'Error al enviar el correo: ' . $mail->ErrorInfo));
        }
    } else {
        // No se encontró un usuario con los datos proporcionados
        echo json_encode(array('success' => 1, 'message' => 'No se encontró un usuario con los datos proporcionados.'));
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
};