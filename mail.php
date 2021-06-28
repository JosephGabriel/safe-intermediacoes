<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$msg = "
    Nome: $name, \n
    Email: $email, \n
    Número: $number \n
";

require_once("src/PHPMailer.php");
require_once("src/SMTP.php");
require_once("src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Username = "Seu email";
    $mail->Password = "Sua senha";
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;

    $mail->setFrom("Seu email");

    $mail->addAddress("Seu email");

    $mail->isHTML(true);
    $mail->Subject = "Dados de formulario";
    $mail->Body = $msg;

    if ($mail->send()) {
        echo "Email enviado";
        header("Location: /");
    } else {
        echo "Email não enviado";
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem:  {$mail->ErrorInfo}";
}
