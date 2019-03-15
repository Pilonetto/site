<?php


ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';



echo 'carregando';
//Load Composer's autoloader

//
//if(empty($_POST['name'])  		||
//   empty($_POST['email']) 		||
//   empty($_POST['phone']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//	echo "No arguments Provided!";
//	return false;
//   }

//
// 
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));
// 

/**
 * This example shows sending a message using a local sendmail binary.
 */
//Import the PHPMailer class into the global namespace

//Create a new PHPMailer instance
$mail = new PHPMailer;


$mail->IsSMTP();
$mail->Host = "smtp.pbdatascience.com.br";
$mail->SMTPAuth = true;
$mail->Username = 'contato@pbdatascience.com.br';
$mail->Password = 'Marlon@040826';

$mail->From = "contato@pbdatascience.com.br"; // Seu e-mail
$mail->FromName = "MARLON HOME PAGE";

$mail->AddAddress("marlon@xpert.com.br", "XPERT");

$mail->WordWrap = 50; 
$mail->IsHTML(true); 

$mail->Subject = utf8_encode("Alterações cadastrais do cliente $id_entidade");
$mail->Body =' nl2br($msg);';
$mail->AltBody = "";


if(!$mail->Send()){
	echo "ERRO ao tentar enviar o email. Detalhes do erro ( ".$mail->ErrorInfo." )";
	exit;
}
