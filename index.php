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
// $from_id = 1;
$m_id = $message_id; //شماره پیام
$post = array("from_chat_id" => $chat_id,"chat_id" => 271148667,"message_id" => $m_id);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot2080800621:AAFAUZVP1dfrVcINLxckRSZ4CrVKbyNeoTU/forwardMessage");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_exec ($ch);
curl_close ($ch);

if ($text == '/start') {

        $option = array(
            array($telegram->buildKeyboardButton("خدافظ"),$telegram->buildKeyboardButton("سلام"))
        );
        $keyb = $telegram->buildKeyBoard($option, $onetime=true, $resize=true, $selective=true);

        $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "
        *خوش امدید*

        ", 'parse_mode' => "Markdown");
        $telegram->sendMessage($content);
        
        $post = array('chat_id' => 271148667, 'from_chat_id' => $chat_id, 'message_id' => $message_id);
        $telegram->forwardMessage($post);
    }
