<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];	
$to="leorotondano@gmail.com";
$subject=$nome . " enviou um email para a MV Serviços através do site";
$headers = 'From: ' . $email . "\r\n" .
	'Reply-To: ' . $email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

$contato_path="./contato.html";
if(mail($to, $subject, $mensagem, $headers))
	print("<script type='text/javascript'>alert('Email enviado com sucesso');window.location='$contato_path'</script>");
else
	print("<script type='text/javascript'>alert('Infelizmente o seu e-mail não pôde ser enviado. Por favor tente novamente mais tarde.');window.location='$contato_path'</script>");

?>