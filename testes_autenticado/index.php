<?php

require_once('class.phpmailer.php');

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexo para a sada de e-mails
$mailer->Host = 'smtp.pauloatencia.com.br'; //smtp.dominio.com.br
$mailer->SMTPAuth = true; //define se haver ou no autenticao no SMTP
$mailer->Username = 'paulo@pauloatencia.com.br'; //Informe o e-mai o completo
$mailer->Password = 'P1a2u3l4@1'; //Senha da caixa postal
$mailer->FromName = 'Teste de Envio - Cron'; //Nome que ser exibido para o destinatrio
$mailer->From = 'teste@pauloatencia.com.br'; //Obrigatrio ser a mesma caixa postal indicada em "username"
$mailer->AddAddress('jhonattas@soucriador.com','TESTE'); //Destinatrios
$mailer->Subject = 'Teste enviado atraves do PHP Mailer - Teste do CronTab';
$mailer->Body = 'Este e um teste realizado com o PHP Mailer - Teste feito pela a ferramenta CronTab';
if(!$mailer->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!"
?>

