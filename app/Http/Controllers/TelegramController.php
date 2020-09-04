<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function sendMessage(){
        $response = Telegram::setWebhook(['url' => config('telegram.bots.mybot.webhook_url')]);
        $updates = Telegram::getWebhookUpdates();
        // $chat_id = $updat  / es['message']['chat']['id'];
        // $chat = $updates['message']['chat']['text'];
        // switch($chat){
        //     case('/salam'):
        //         $text =  'fuck you and your pepperoni';
        //     break;
        //     default:
        //     $text = 'fuck you';

        // }
        Telegram::sendMessage([
            'chat_id'=>81198865,
            'text'=>'test'
        ]);

    }
    //
}
