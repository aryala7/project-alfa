<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function sendMessage(){
        $response = Telegram::setWebhook(['url' => config('telegram.bots.mybot.webhook_url')]);        
        $updates = Telegram::getWebhookUpdates();
        // $message_id=$updates['message']['id'];
        $text = $updates['message']['text'];
        $keyboard = [
            ['pepperoni'],
            ['veggie'],
            ['caprichuza']
        ];
        $chat_id = $updates['message']['chat']['id'];
        switch($text){
            case('/start'):
                $letter = 'lets begin psycho!';
            break;
            default:
            $letter = 'you did it is default!';
        }
        if($text == '/start'){
            // $reply_markup = Telegram::replyKeyboardMarkup([
            //     'keyboard' => $keyboard, 
            //     'resize_keyboard' => true, 
            //     'one_time_keyboard' => true
            // ]);
            // Telegram::sendPhoto([
            //     'chat_id'=>$chat_id,
            //     'photo'=>'public/images/image_1.jpg',
            //     'caption'=>'this is a fresh pepperoni pizza!'
            // ]);
            Telegram::sendMessage([
                'chat_id'=>$chat_id,
                'text'=>$letter,
                // 'reply_markup'=>$reply_markup
            ]);
        }
    }
    //
}
