<?php
//Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

//Inicia a classe PHPMailer
$mail = new PHPMailer();

//define os dados do servidor e tipo de conexo
$mail->IsSMTP(); // Define que a mensagem ser SMTP
$mail->Host = "smtp.pauloatencia.com.br"; // Endereo do servidor SMTP
$mail->SMTPAuth = true; // Autenticao
$mail->Username = 'teste@pauloatencia.com.br'; // Usurio do servidor SMTP
$mail->Password = 'email102030!@#'; // Senha da caixa postal utilizada

//Define o remetente
$mail->From = "teste@pauloatencia.com.br"; 
$mail->FromName = "Contato";

//Define os destinatrio(s)
$mail->AddAddress('teste@pauloatencia.com.br', 'Contato');

//Define os dados tcnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail ser enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

//Texto e Assunto
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = 'Este  o corpo da mensagem de teste, em HTML!';
$mail->AltBody = 'Este  o corpo da mensagem de teste, em Texto Plano! \r\n';

//Anexos (opcional)

//Envio da Mensagem
$enviado = $mail->Send();

//Limpa os destinatrios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

//Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";
} else {
echo "No foi possvel enviar o e-mail.
 
";
echo "Informaes do erro: 
" . $mail->ErrorInfo;
}
?>