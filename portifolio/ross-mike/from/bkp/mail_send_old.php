<?php
  $de = pegaValor("nome");
  $email = pegaValor("email");
  $mensagem = pegaValor("mensagem");


 function pegaValor($valor) {
      return isset($_REQUEST[$valor]) ? $_REQUEST[$valor] : '';
  }
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "../PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = "mail.infinito.etc.br"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 587; 
//$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'contato@infinito.etc.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'inFINITO**'; // Mesma senha da sua conta de email
 
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
//$mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = "contato@infinito.etc.br"; // Seu e-mail
$mail->FromName = "inFINITO"; // Seu nome
 
// Define o(s) destinatário(s)
$mail->AddAddress('contato@infinito.etc.br', 'inFINITO');
//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(true); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Email enviado de www.infinito.etc.br"; 
 
// Corpo do email
$mail->Body = '<strong> Nome: '.$de.'</strong><br><br> <strong>E-mail: </strong>'.$email.'<br><br> <strong>Mensagem: </strong>'. $mensagem;
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Seu E-mail foi enviado com sucesso!";
    // header("Location: {$_SERVER['HTTP_REFERER']}");
    // exit;     
} else {
     echo "Houve um erro enviando o E-mail";
}


?>