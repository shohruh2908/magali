<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'magaliorient-travel@mail.ru';
$mail->Password = 'uztravel000';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('magaliorient-travel@mail.ru');
$mail->addAddress('jasur.khakimov.98@mail.ru');
$mail->addAddress('jahon@magaliorient-travel.uz');
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);

$mail->Subject = 'Magali Orient Callback';
$mail->Body = "Email: <b>$email</b>, <br>
Name: <b>$name</b>, <br>
Text: $text";
$mail->AltBody = '';

if (!$mail->send()) {
	echo "Error";
}else{
	header('location: index.html');
}


 ?>