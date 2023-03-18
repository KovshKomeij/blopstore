<?php

/* https://api.telegram.org/bot6053946893:AAH235sW8nXMVjFaHsHzqXKLDsGkEKA_hJc/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$desc = $_POST['desc'];
$webad = $_POST['webpro'];
$avtor = $_POST['avto'];
$token = "6053946893:AAH235sW8nXMVjFaHsHzqXKLDsGkEKA_hJc";
$chat_id = "-982504386";
$arr = array('Пришла заявка от' => $avtor,
	'Имя приложения: ' => $name,
	'Описание приложения: ' => $desc,
	'Веб-адрес приложения: ' => $webad);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: loaded.html');
} else {
  echo "Error";
}
?>
