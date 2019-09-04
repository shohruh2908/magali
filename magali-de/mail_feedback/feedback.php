<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // �������� ��������� ����� �������

$mail->isSMTP();                                      // ��������� ��� ���������� SMTP
$mail->Host = 'ahost.cloud';  // ������� SMTP ������
$mail->SMTPAuth = true;                               // ��������� �������� ����������� SMTP
$mail->Username = 'magaliorient@yandex.ru';                 // ����� ��������� �����
$mail->Password = 'magaliorient123';                           // ������ 
$mail->SMTPSecure = 'ssl';                            // ��������� ����� ����������� ���������� TLS ��� SSL � ����� ������ SSL
$mail->Port = 465;                                    // ���� ��� SSL - 465, TLS 587.

$mail->setFrom('magaliorient@yandex.ru', 'Web Page Call Back');
$mail->addAddress('jasur.khakimov9@gmail.com', 'Jasur Khakimov');     // �������� ����������

$mail->isHTML(true);                                  // ��������� ���������� HTML

$mail->Subject = 'Call Back magaliorient-travel.com';
$mail->Body    = "Email <b>in bold!</b> <br> Name <b> Name </b>";


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}