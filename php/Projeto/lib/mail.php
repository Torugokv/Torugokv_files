<?php

// Senha : mc0BfI9*mn<
// Email : teste@zerobugs.com.br
// smtp.zerobugs.com.br
// porta : 587

// Senha: Sakurasaber@6857;
// Email: torugokv6857@outlook.com;
// Servidor SMTP: SMTP.office365.com;
// Porta de saída: 587;

use PHPMailer\PHPMailer\PHPMailer;

function enviar_email($destinatario, $assunto, $mensagemHTML)
{
    require 'vendor/autoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host ="smtp.office365.com";
    $mail->Port = 587 ;
    $mail->SMTPAuth = true;
    $mail->Username = 'torugokv6857@outlook.com';
    $mail->Password = 'Sakurasaber@6857';

    $mail->SMTPSecure = false;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';   

    $mail->setFrom('torugokv6857@outlook.com', 'Torugokv Teste');
    $mail->addAddress($destinatario);
    $mail->Subject = $assunto;

    $mail->Body = $mensagemHTML;

    if($mail->send()){
        return true;
    } else {
        return false;
    }
}
?>