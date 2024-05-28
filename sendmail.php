<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$tel = $data['tel'];

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');

$mail->setFrom('zhiviesteni', 'Отправка телефона')

$mail->addAdress('AloneOmen@yandex.ru');

$body = '<h1> Заявка по сотрудничеству </h1>';
$body = '<p>' $tel '</p>'

$mail->isHTML(true);
$mail->Subject = 'Позвонить по телефону'
$mail->Body = $body;

$mail->send('d');




