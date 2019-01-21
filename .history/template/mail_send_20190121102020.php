<?php
  $de = pegaValor("nome");
  $email = pegaValor("email");
  $mensagem = pegaValor("msg");

 function pegaValor($valor) {
      return isset($_REQUEST[$valor]) ? $_REQUEST[$valor] : '';
  }
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "../mail/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = "smtp.umbler.com"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor$mail->Host = "smtp.gmail.com"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 587; 
//$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)$mail->SMTPSecure = 'ssl'; // Obrigatório para o Gmail
$mail->Username = 'contato@estro.com'; // Usuário do servidor SMTP (endereço de email)$mail->Username = GUSER; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'T39922146'; // Mesma senha da sua conta de email$mail->Password = GPWD; // Mesma senha da sua conta de email
 
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
$mail->From = "contato@estro.com"; // Seu e-mail
$mail->FromName = "Estro"; // Seu nome
 
// Define o(s) destinatário(s)
$mail->AddAddress('contato@estro.com', 'Agência Estro');
//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(true); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Email enviado do formulario do site Agência Estro"; 
 
// Corpo do email
$mail->Body = '<strong> Nome: '.$de.'</strong><br><br> <strong>E-mail: </strong>'.$email.'<br><br> <strong>Mensagem: </strong>'. $mensagem;
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "<span style='color: #fff;background-color: rgba(26, 73, 108, 0.7);border-color: #c3e6cb;padding: .75rem 1.25rem;display: block;margin: 20% auto;text-align: center;border: 1px solid transparent;border-radius: .25rem;width: 300px;'>Seu E-mail foi enviado com sucesso!</span>";
     //echo '<meta http-equiv="refresh" content="2;URL=../index.html" />';
     // header("Location: {$_SERVER['HTTP_REFERER']}");
    // exit;     
} else {
     echo "<span style='color: #721c24;background-color: #f8d7da;border-color: #c3e6cb;padding: .75rem 1.25rem;display: block;margin: 20% auto;text-align: center;border: 1px solid transparent;border-radius: .25rem;width: 300px;'>Houve um erro enviando o E-mail</span>";
}


?>