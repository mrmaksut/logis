<?php

/* https://api.telegram.org/bot7127796439:AAGHGQfots0QT0WDOqXdMJD9cG2zJoYEkdY/getUpdates */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "7127796439:AAGHGQfots0QT0WDOqXdMJD9cG2zJoYEkdY";
$chat_id = "-4170901735";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>