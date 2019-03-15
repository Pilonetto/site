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
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();

$mail->isSMTP();
$mail->Host = 'mail.pbdatascience.com.br';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

//$mail->IsSMTP(true); // Define que a mensagem será SMTP
//$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
//$mail->Port = 587;
//$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
//$mail->SMTPSecure = 'ssl';
$mail->Username = 'contato@pbdatascience.com.br'; // Usuário do servidor SMTP
$mail->Password = 'Marlon@040826'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@pbdatascience.com.br"; // Seu e-mail
$mail->FromName = "Joãozinho"; // Seu nome


//Set who the message is to be sent from
//$mail->setFrom('marlon@xpert.com.br', 'First Last');
$mail->addAddress('marlon@xpert.com.br');
//Set an alternative reply-to address
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body



$mail->Body = 'Body of the email. Testing PHPMailer.';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>