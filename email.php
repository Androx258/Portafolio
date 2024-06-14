<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluye el autoload de Composer
require 'vendor/autoload.php';

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer();

try {
    // Configuración del servidor
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            // Usar SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Servidor SMTP
    $mail->SMTPAuth   = true;                                   // Autenticación SMTP
    $mail->Username   = 'marlonportafolio9@gmail.com';                // Usuario SMTP
    $mail->Password   = 'imbhcvhinnqqurgd';                        // Contraseña SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Encriptación TLS
    $mail->Port       = 587;                                    // Puerto TCP

    // Destinatarios
    $mail->setFrom('marlonportafolio9@gmail.com', $_POST['nombre']);
    $mail->addAddress('m.andresm94@gmail.com', 'Marlon Andres');     // Añadir un destinatario

    // Contenido del correo
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = $_POST['Asunto'];
    $mail->Body    = "<h2>".$_POST['correo']."</h2><br>".$_POST['mensaje'];
    $mail->AltBody = "";

    // Enviar el correo
    $mail->send();
    header("Location: ".$_SERVER['HTTP_REFERER']);
} catch (Exception $e) {
    echo "No se pudo enviar el correo. Mailer Error: {$mail->ErrorInfo}";
}
?>