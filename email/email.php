<?php

$headers = "Content-type:text/html; charset=utf-8";

     $nome = 'Duda';
  $destino = 'eduardacirina@gmail.com';
      $de = utf8_decode("Contrato - ".$email."");
      $assunto = 'teste';
  $html='teste';
  $email = 'eduardacirina@gmail.com';
  
    
include ("class.phpmailer.php");
$mail = new PHPMailer();// Inicia a classe PHPMailer

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)


$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->Port = 587;
$mail->Username = ("quantichearttestes@gmail.com");
$mail->Password = ("qQ@20152015");

$mail->SMTPSecure = "tls";
$mail->Mailer = ("mail");

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Sender = $email; // Seu e-mail
$mail->From = utf8_decode($email); // Seu e-mail
$mail->FromName = $de; // Seu nome


$mail->Subject = utf8_decode($assunto);
$mail->IsHTML(true); 
$mail->MsgHTML($html);
$mail->Body = $html;
$mail->AddAddress ('atendimento@passini.adv.br');

$mail->AddReplyTo("$email","$nome");
$mail->Wordwrap = 50;
//$mail->Addbcc ($para);
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

$mail->Send($headers, $destino, $html);
$mail->ClearAllRecipients();
$mail->ClearAttachments();