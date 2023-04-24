<?php
// importa a biblioteca PHPMailer
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// instancia o objeto do PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// configura as credenciais da AWS
$mail->isSMTP();
$mail->Host = 'smtp.dominio.com.br';
$mail->SMTPAuth = true;
$mail->Username = 'SUA_ACCESS_KEY';
$mail->Password = 'SUA_SECRET_KEY';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// configura o conteúdo do e-mail
$mail->setFrom('seu-email@seu-dominio.com', 'Seu Nome');
$mail->addAddress('destinatario@dominio.com', 'Destinatário');
$mail->Subject = 'Assunto do e-mail';
$mail->Body = 'Conteúdo do e-mail em HTML';
$mail->AltBody = 'Conteúdo do e-mail em texto plano';

// envia o e-mail
if(!$mail->send()) {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
} else {
    echo 'E-mail enviado com sucesso!';
}
?>
