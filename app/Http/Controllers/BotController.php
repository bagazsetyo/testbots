<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotController extends Controller
{
    public function store()
    {
        dd(1);
        // Laravel - Setup a POST route.
        $response = Telegram::setWebhook(['url' => 'https://testbot.test/1881085314:AAECD4Ke8UZpHAeEzqcMB6YnFV-gRP8i2YI/webhook']);
        // $updates = Telegram::getWebhookUpdates();
        // $updates = Telegram::getWebhookUpdates();
        // return $updates;
    }

    public function getUpdate()
    {
        $activity = Telegram::getUpdates();
        foreach($activity as $as){
            $id = $as->message;
        }
        return $id;
        $keyboard = [
            ['7', '8', '9'],
            ['4', '5', '6'],
            ['1', '2', '3'],
                 ['0']
        ];
        
        // $reply_markup = Telegram::replyKeyboardMarkup([
        //     'keyboard' => $keyboard, 
        //     'resize_keyboard' => true, 
        //     'one_time_keyboard' => true
        // ]);
        
        $response = Telegram::sendMessage([
            'chat_id' => $id->chat->id, 
            'text' => 'Hello World'
        ]);
        $messageId = $response->getMessageId();

        // $response = Telegram::sendMessage([
        //     'chat_id' => $id->chat->id, 
        //     'text' => 'Hello World'
        // ]);
        
        // $messageId = $response->getMessageId();
        return $messageId;
    }
}