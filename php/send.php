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
require 'vendor\autoload.php';

$mail =new PHPMailer;
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
$mail->addAddress('4f22abc471@emailcbox.pro');
$mail->Subject = 'E-mail de teste';

$mail->Body = "<h1>Email enviado com sucesso!</h1><p>Parabéns!! Deu tudo certo.</p>";

if($mail->send())
    echo "E-mail enviado com sucesso!!";
else
    echo "Falha ao enviar e-mail."
?>