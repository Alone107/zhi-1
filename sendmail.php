<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->isHTML(true);

$mail->setFrom('zhiviesteni', 'Отправка телефона')

$mail->addAdress('AloneOmen@yandex.ru');

$mail->Subject = 'Позвонить по телефону'


$body = '<h1> Заявка по сотрудничеству </h1>';

$body = '<p>' $_POST['number'] '</p>'

