<?php
$token = "5336899115:AAHOBlwqmtNMs9m_m41SVYVdecGhtH43zGA"; // тут вводим ваш токен;
$chat_id = "-1001670948988"; // указываем идентификатор группового чата
$data = file_get_contents('php://input');
$data = json_decode($data, true);
file_put_contents(__DIR__ . '/message.txt', print_r($data, true));
fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r"); // отправляем данные в сторону API Телеграма;
?>