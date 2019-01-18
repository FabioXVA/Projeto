<?php
  $de = pegaValor("nome");
  $email = pegaValor("email");
  $mensagem = pegaValor("mensagem");
	define('GUSER', 'fabio.fxva@gmail.com');	define('GPWD', 'T02967010');

 function pegaValor($valor) {
      return isset($_REQUEST[$valor]) ? $_REQUEST[$valor] : '';
  }
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "../mail/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = "smtp.gmail.com"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor$mail->Host = "smtp.gmail.com"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 587; 
//$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)$mail->SMTPSecure = 'ssl'; // Obrigatório para o Gmail
$mail->Username = GUSER; // Usuário do servidor SMTP (endereço de email)$mail->Username = GUSER; // Usuário do servidor SMTP (endereço de email)
$mail->Password = GPWD; // Mesma senha da sua conta de email$mail->Password = GPWD; // Mesma senha da sua conta de email
$mail->SMTPSecure = 'tls';
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
$mail->SMTPDebug = 1; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = "fabio.fxva@gmail.com"; // Seu e-mail
$mail->FromName = "Âgencia Estro"; // Seu nome
 
// Define o(s) destinatário(s)
$mail->AddAddress('fabio.fxva@gmail.com', 'Âgencia Estro');
//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(true); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Email enviado de www.http://agenciaestro.com/"; 
 
// Corpo do email
$mail->Body = '<strong> Nome: '.$de.'</strong><br><br> <strong>E-mail: </strong>'.$email.'<br><br> <strong>Mensagem: </strong>'. $mensagem;
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo '<meta http-equiv="refresh" content="2;URL=../index.html" />';
     echo "<h1 style='color: #93cdf2;background-color: #38004e;border-color: #c3e6cb;padding: .75rem 1.25rem;display: block;margin: 20% auto;text-align: center;border: 1px solid transparent;border-radius: .25rem;width: 300px;'>Seu E-mail foi enviado com sucesso!</h1>";
     echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
     // header("Location: {$_SERVER['HTTP_REFERER']}");
    // exit;     
} else {
     echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
     echo "<h1 style='color: #721c24;background-color: #f8d7da;border-color: #c3e6cb;padding: 2rem 1.25rem;display: block;margin: 45% auto;text-align: center;border: 1px solid transparent;border-radius: .25rem;width: 90%; '>Houve um erro enviando o E-mail</h1>";
}

?>