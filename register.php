<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estadoCivil = $_POST['estadoCivil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereço'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$comprovante = $_FILES['comprovante'];
$documento = $_FILES['documento'];

$msg = "
    Nome: $nome, \n
    Email: $email, \n
    Número: $number, \n
    Estado Civil: $estadoCivil, \n
    CPF: $cpf, \n
    RG: $rg, \n
    Endereço: $endereco, \n
    CEP: $cep, \n
    Cidade: $cidade, \n
    Estado: $estado, \n
    Banco: $banco, \n
    Agência: $agencia, \n
    Conta: $conta, \n
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

    $mail->setFrom($email);
    $mail->addAddress("Seu email");

    $mail->addAttachment($comprovante['tmp_name'], $comprovante['name']);
    $mail->addAttachment($documento['tmp_name'], $documento['name']);
    $mail->isHTML(true);
    $mail->Subject = "Dados de formulario";
    $mail->Body = $msg;

    if ($mail->send()) {
        header("Location: /");
        echo "<script>window.location.href = '/'</script>";
    } else {
        echo "Email não enviado";
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem:  {$mail->ErrorInfo}";
}
