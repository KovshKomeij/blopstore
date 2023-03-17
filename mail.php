<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$desc = $_POST['desc'];
$webad = $_POST['webpro'];
$avtor = $_POST['avto'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.blopsoft.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dibil228of@blopsoft.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Nightsandytiktok234'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('dibil228of@blopsoft.ru'); // от кого будет уходить письмо?
$mail->addAddress('legubrawl@gmail.com');     // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Приложение $name';
$mail->Body    = 'Привет, я $avtor и я хочу отправить своё приложени в Blopstore, вот инофрмация про моё приложение:
Название: $name
Описание: $desc
веб-адрес приложения: $webad
Надеюсь что моё приложение попдёт в BlopStore.';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'У тебя отправиласть анкета про твоё приложение!';
}
?>