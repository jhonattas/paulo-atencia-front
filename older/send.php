<?php
  include ("smtp.class.php");
  $host = "smtp.pauloatencia.com.br"; /*host do servidor SMTP */
  $mail = "paulo@pauloatencia.com.br";//o endereço de e-mail deve ser válido.
  $senha = "P1a2u3l4";//coloque sua senha aqui
 
  /* Configuração da classe.e smtp.class.php */
  $smtp = new Smtp($host, 587);
  $smtp->user = $mail; /*usuario do servidor SMTP */
  $smtp->pass = $senha; /* senha do usuario do servidor SMTP*/
  $smtp->debug = true; /*ativa a autenticacao SMTP */
 
  /* Prepara a mensagem para ser enviada. */
  $from = $mail;
  $to = 'jhonattas@soucriador.com';//Destinatario que vai receber o e-mail do formulário.
  $subject = $_POST['assunto'];//Assunto do e-mail.
  $msg = $_POST['nome']. "\r\n";//Nome do cliente que preencher o formulário.
  $msg .= $_POST['emailremetente']. "\r\n";//E-mail do cliente que preencher o formulário.
  $msg .= $_POST['mensagem']. "\r\n";//Mensagem do txtbox.
 
  /* faz o envio da mensagem */
  $enviou = $smtp->Send($to, $from, $subject, $msg, "text/html") ? 'enviou' : 'falhou';
  header("Location:index.php?status=".$enviou, "-r".$from);
?>