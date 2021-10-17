<?php
include 'Telegram.php';

// Set the bot TOKEN
$bot_id = "2080800621:AAFAUZVP1dfrVcINLxckRSZ4CrVKbyNeoTU";
// Instances the class
$telegram = new Telegram($bot_id);

$text = $telegram->Text(); // متنی که کاربر ارسال میکنه
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id = $telegram->UserID(); // آیدی یکتای کاربر
$chat_id = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه


$from_chat = "@test2zbot";
$from_id = ;
$m_id = 2; //شماره پیام
$post = array("from_chat_id" => $from_chat,"chat_id" => $chat_id,"message_id" => $m_id);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot2080800621:AAFAUZVP1dfrVcINLxckRSZ4CrVKbyNeoTU/forwardMessage");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_exec ($ch);
curl_close ($ch);
