<?php
include("../../../Proyecto_SendApp_2024/bases/conexion.php");
$conn = connection();
// Create connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_cita = $_GET['id_cita'];

// Consulta SQL para obtener datos del usuario y PQR
$sql2 = "SELECT u.nombres, u.correo
         FROM citas c
         INNER JOIN usuarios u ON c.documento_usuario = u.documento_identidad 
         WHERE c.id_cita = $id_cita";
$result = $conn->query($sql2);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombres = $row['nombres'];
    $correo = $row['correo'];

    $mensaje = "Estimado/a $nombres:<br><br>
    Esperamos que se encuentre bien.<br><br>
    Nos dirigimos a usted en relación con su cita. Nos complace informarle que hemos procesado su cita; por favor, diríjase a nuestro sitio web para conocer los detalles.<br><br>
    Agradecemos su paciencia y comprensión durante este proceso. Si tiene alguna pregunta adicional o necesita más información, no dude en contactarnos a través de soporte@sendapp.com.co.<br><br>
    Estamos comprometidos en brindarle el mejor servicio posible y valoramos sus comentarios y sugerencias.<br><br>
    Atentamente,<br>
    SendApp<br><br>
    NOTA: No responder a este correo.";

    if (empty($correo)) {
        echo "Error: No se encontró un correo electrónico asociado al documento de identidad.";
    } else {
        $mail = new PHPMailer(true);
    
        try {
            // Habilitar depuración SMTP detallada
            $mail->SMTPDebug = 3; // Cambia a 2 o 3 para más detalles
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
            $mail->addAddress($correo, 'A');
    
            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Respuesta a su Cita';
            $mail->Body    = $mensaje;
    
            $mail->send();
            echo 'El mensaje ha sido enviado';
        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado con SSL. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>