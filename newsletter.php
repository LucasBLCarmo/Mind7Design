<?php

// Mudar Aqui

$email_envio = 'contato@mind7design.com.br'; // E-mail receptor
$email_pass = 'JKiU*7Q8.ddhMd_'; // Senha do e-mail

$site_name = 'Mind7Design'; // Nome do Site
$site_url = 'https://www.mind7design.com.br'; // URL do Site

$host_smtp = 'smtp.mind7design.com.br'; // HOST SMTP Ex: smtp.domain.com.br
$host_port = '587'; // Porta do Host

// Variáveis do Formulário


$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Conteúdo do Formulário

$body_content = "Novo cadastro na sua newsletter: \n E-mail: $email \n Telefone: $telefone";

// Não mudar a partir daqui

if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {

  echo "<h2
	style=\"
	font-size: 1em;
	margin-top: 20%;
	text-align: center;
	font-family: 'Helvetica', 'Arial', 'Sans-Serif';
	font-weight: normal;
	color: #1b1b1b;
	\"><center><span>Aconteceu algum erro!</span><p>Você pode tentar denovo ou enviar direto para " . $email_envio . "!</p></center><h2>";

	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $site_url . "'>";
}

else if (isset($_POST['email'])){

require ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$mail->isSMTP();
$mail->Host = $host_smtp;
$mail->SMTPAuth = true;
$mail->Username = $email_envio;
$mail->Password = $email_pass;
$mail->Port = $host_port;

$mail->From = $email_envio;

$mail->addAddress($email_envio);

$mail->FromName = 'Formulário de contato';
$mail->AddReplyTo($_POST['email'], $_POST['telefone']);

$mail->WordWrap = 70;

$mail->Subject = 'Newsletter - ' . $site_name . ' - ' . $_POST['email'];

$mail->Body = $body_content;

if(!$mail->send()) {

  echo "<h2
	style=\"
	font-size: 1.5em;
	margin-top: 20%;
	text-align: center;
	font-family: Inconsolata', 'Helvetica', 'Arial', 'sans-serif';
	font-weight: normal;
	color: #fdc64b;
	\"><center><span>Aconteceu algum erro!</span><p>Você pode tentar denovo ou enviar direto para " . $email_envio . "!</p></center><h2>";

	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $site_url . "'>";

} else {

  echo "<h2
	style=\"
	font-size: 1.5em;
	margin-top: 20%;
	text-align: center;
	font-family: 'Inconsolata', 'Helvetica', 'Arial', 'sans-serif';
	font-weight: normal;
	color: #89bb50;
	\"><center><span>Formulário Enviado</span><p>Em breve eu entro em contato com você. Abraços!</p></center><h2>";

	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $site_url . "'>";
}
}
?>
